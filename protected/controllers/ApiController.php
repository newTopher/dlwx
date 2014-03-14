<?php
/**
 * Created by IntelliJ IDEA.
 * User: db
 * Date: 14-2-10
 * Time: 下午2:47
 * To change this template use File | Settings | File Templates.
 */
class ApiController extends Controller {

    public $token = null;
    public $userdata =null;
    public $postObj = null;

    public function actionBind(){
        $t=Yii::app()->request->getParam('t','');
        if(!empty($t)){
            if(($this->userdata = UserModel::findByToken($t))){
                $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
                //file_put_contents('1.txt',$postStr);
                if (!empty($postStr)){
                    $this->postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
                    $RX_TYPE = trim($this->postObj->MsgType);
                    switch($RX_TYPE){
                        case "text":
                            $resultStr = $this->handleText($this->postObj);
                            break;
                        case "event":
                            $resultStr = $this->handleEvent($this->postObj);
                            break;
                        default:
                            $resultStr = "Unknow msg type: ".$RX_TYPE;
                            break;
                    }
                    echo $resultStr;
                }else {
                    echo "";
                    exit;
                }
            }else{
                $this->token = TOKEN;
                if(!$this->checkSignature()){
                    echo CJSON::encode(array('status'=>'-1','msg'=>'msg is error'));
                    exit;
                }else{
                    $userModel = new UserModel();
                    $userModel->wx_token = $t;
                    if($userModel->updateByToken()){
                        $this->valid();exit;
                    }else{
                        return false;
                    }
                }
            }
        }
    }

    private function checkSignature(){
        $signature = Yii::app()->request->getParam('signature');
        $timestamp = Yii::app()->request->getParam('timestamp');
        $nonce =  Yii::app()->request->getParam('nonce');
        $token = $this->token;
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );
        if( $tmpStr == $signature ){
            return true;
        }else{
            return false;
        }
    }

    public function valid(){
        $echoStr = Yii::app()->request->getParam('echostr');
        echo $echoStr;
    }

    public function actionIndex(){
        //$this->valid();

    }

    public function handleText(){
        $keyword = trim($this->postObj->Content);
        if(!empty($keyword)){
            /*
            if(preg_match('/微官网/',$keyword)){
                $this->getWeiWebMsg($postObj);
            }
            */
            $keydata = $this->getUseKeyWords();
            $msglistModel = new MsgListModel();
            $msglistModel->uid = $this->userdata->id;
            $msglistModel->to_openid = $this->postObj->ToUserName;
            $msglistModel->from_openid = $this->postObj->FromUserName;
            $msglistModel->content = $keyword;
            $msglistModel->type = $this->postObj->MsgType;
            $msglistModel-> insertMsg();
            if($keydata){
                foreach($keydata as $k=>$v){
                    if($v->preg_type == 1){
                        if($v->keywords == $keyword){
                            if($v->source_type == 1){
                                $this->responseText($v->text);
                            }else if($v->source_type == 2){
                                $temp = explode('_',$v->source_id);
                                if($temp[0] == 'w'){
                                    $this->getWeiWebMsg();
                                }else if($temp[0] == 'g'){
                                    $this->getGuaCard($temp[1]);
                                }else if($temp[0] == 't'){
                                    $this->getTuangood($temp[1]);
                                }else if($temp[0] == 's'){
                                    $this->getSale($temp[1]);
                                }else if($temp[0] == 'z'){
                                    $this->getZhuan($temp[1]);
                                }else if($temp[0] == 'm'){
                                    $this->getMem($temp[1]);
                                }else if($temp[0] == 'y'){
                                    $this->getYu($temp[1]);
                                }else if($temp[0] == 'n'){
                                    $this->getName($temp[1]);
                                }else{
                                    $this->nouseReplay();
                                }
                            }else if($v->source_type == 0){
                                if($v->type == 'MemberCard'){
                                    $this->getMemberCard();
                                }elseif($v->type == 'OrderCard'){
                                    $this->getOrderCard();
                                }elseif($v->type == 'SaleCard'){
                                    $this->getSaleCard();
                                }elseif($v->type == 'GuaguaCard'){
                                    $this->getGuaguaCard();
                                }elseif($v->type == 'ZhuanCard'){
                                    $this->getZhuanCard();
                                }elseif($v->type == 'CallingCard'){
                                    $this->getCallingcard();
                                }
                            }
                        }
                    }
                }

                foreach($keydata as $k=>$v){
                    if($v->preg_type == 2){
                        if(preg_match("/.*{$v->keywords}.*/",$keyword)){
                            if($v->source_type == 1){
                                $this->responseText($v->text);
                            }else if($v->source_type == 2){
                                $temp = explode('_',$v->source_id);
                                if($temp[0] == 'w'){
                                    $this->getWeiWebMsg();
                                }else if($temp[0] == 'g'){
                                    $this->getGuaCard($temp[1]);
                                }else if($temp[0] == 't'){
                                    $this->getTuangood($temp[1]);
                                }else if($temp[0] == 's'){
                                    $this->getSale($temp[1]);
                                }else if($temp[0] == 'z'){
                                    $this->getZhuan($temp[1]);
                                }else if($temp[0] == 'm'){
                                    $this->getMem($temp[1]);
                                }else if($temp[0] == 'y'){
                                    $this->getYu($temp[1]);
                                }else if($temp[0] == 'n'){
                                    $this->getName($temp[1]);
                                }else{
                                    $this->nouseReplay();
                                }
                            }else if($v->source_type == 0){
                                if($v->type == 'MemberCard'){
                                    $this->getMemberCard();
                                }elseif($v->type=='OrderCard'){
                                    $this->getOrderCard();
                                }elseif($v->type == 'SaleCard'){
                                    $this->getSaleCard();
                                }elseif($v->type == 'GuaguaCard'){
                                    $this->getGuaguaCard();
                                }elseif($v->type == 'ZhuanCard'){
                                    $this->getZhuanCard();
                                }elseif($v->type == 'CallingCard'){
                                    $this->getCallingcard();
                                }
                            }
                        }
                    }
                }
                $this->nouseReplay();
            }else{
                $this->nouseReplay();
            }
        }else{
            //$contentStr = "欢迎关注碉堡君!";
            //$this->responseText($postObj, $contentStr);
        }
    }

    public function getUseKeyWords(){
        $keydata = KeywordsReplayModel::getKeyWordsDataByUid($this->userdata->id);
        if($keydata){
            return $keydata;
        }else{
            return false;
        }
    }

    public function getFirstData(){
        $data = FirstReplayModel::getDataFristByUid($this->userdata->id);
        if($data){
            return $data;
        }else{
            return false;
        }
    }

    public function handleEvent(){
        $data = $this->getFirstData();
        switch ($this->postObj->Event){
            case "subscribe":
                $wxUserModel  = new WxuserModel();
                $wxUserModel->uid = $this->userdata->id;
                $wxUserModel->openid =$this->postObj->FromUserName;
                if(!$res = $wxUserModel->getUserByUidAndOpenId()){
                    $wxUserModel->addUser();
                }else{
                    if($res->status == 0){
                        $wxUserModel->status = 1;
                        $wxUserModel->updateWxuserStatus();
                    }
                }
                $udata = UserModel::findUserByid($this->userdata->id);
                if($udata->wx_openid == null){
                    UserModel::updateOpenidByid($this->userdata->id,$this->postObj->ToUserName);
                }
                if($data->type == 1){
                    $this->postObj->MsgType='text';
                    $this->insertReplay('subscribe',$data->text,1);
                    $this->responseText($data->text);
                }else if($data->type == 2){
                    $this->postObj->MsgType='news';
                    $temp = explode('_',$data->source_id);
                    if($temp[0] == 't'){
                        $this->getWeiWebMsg();
                    }else if($temp[0] == 'g'){
                        $this->getGuaCard($temp[1]);
                    }else if($temp[0] == 't'){
                        $this->getTuangood($temp[1]);
                    }else if($temp[0] == 's'){
                        $this->getSale($temp[1]);
                    }else if($temp[0] == 'z'){
                        $this->getZhuan($temp[1]);
                    }else if($temp[0] == 'm'){
                        $this->getMem($temp[1]);
                    }else if($temp[0] == 'y'){
                        $this->getYu($temp[1]);
                    }else if($temp[0] == 'n'){
                        $this->getName($temp[1]);
                    }else{
                        $this->nouseReplay();
                    }
                }

                break;
            case "unsubscribe":
                $wxUserModel  = new WxuserModel();
                $wxUserModel->uid = $this->userdata->id;
                $wxUserModel->openid =$this->postObj->FromUserName;
                $res = $wxUserModel->getUserByUidAndOpenId();

                $wxUserModel->id =$res->id;
                $wxUserModel->status = 0;
                $wxUserModel->updateWxuserStatus();
                break;
            default :
                $contentStr = "Unknow Event: ".$this->postObj->Event;
                break;
        }
        $this->responseText($this->postObj, $contentStr);
    }


    /*无效回复*/
    public function nouseReplay(){
        $data = NouseReplayModel::getNouseData($this->userdata->id);
        if($data){
            if($data->type == 1){
                $this->insertReplay('nouse',$data->text,1);
                $this->responseText($data->text);
            }else if($data->type == 2){
                $temp = explode('_',$data->source_id);
                if($temp[0] == 'w'){
                    $this->getWeiWebMsg();
                }else if($temp[0] == 'g'){
                    $this->getGuaCard($temp[1]);
                }else if($temp[0] == 't'){
                    $this->getTuangood($temp[1]);
                }else if($temp[0] == 's'){
                    $this->getSale($temp[1]);
                }else if($temp[0] == 'z'){
                    $this->getZhuan($temp[1]);
                }else if($temp[0] == 'm'){
                    $this->getMem($temp[1]);
                }else if($temp[0] == 'y'){
                    $this->getYu($temp[1]);
                }else if($temp[0] == 'n'){
                    $this->getName($temp[1]);
                }
            }
        }else{
            return false;
        }
    }

    /*select刮刮卡*/
    public function getGuaCard($id){
        $guaguadata = GuaguaCardModel::getGuaguaCardById($id);
        if($guaguadata){
            $data = new stdClass();
            $data->title = $guaguadata->name;
            $data->description = $guaguadata->description;
            $data->picurl =  Yii::app()->request->hostInfo.'/upload/slider/'.$guaguadata->index_image;
            $data->url = Yii::app()->request->hostInfo.'/Guagua/I/sid/'.$this->userdata->id.'/f/'.$this->postObj->FromUserName.'/s/'.$id;
            $this->insertReplay('GuaguaCard','g_'.$id,2);
            $this->responseImageText($data);
        }else{
            return false;
        }
    }

    /*
     * select 会员卡
     */
    public function getMem($id){
        $membercarddata = MemberCardModel::getMemberCardById($id);
        if($membercarddata){
            $data = new stdClass();
            $data->title = $membercarddata->cust_name;
            $data->description = $membercarddata->description;
            $data->picurl =  Yii::app()->request->hostInfo.'/upload/slider/'.$membercarddata->index_image;
            $data->url = Yii::app()->request->hostInfo.'/Member/I/sid/'.$this->userdata->id.'/f/'.$this->postObj->FromUserName.'/s/'.$id;
            $this->insertReplay('MemberCard','m_'.$id,2);
            $this->responseImageText($data);
        }else{
            return false;
        }
    }

    /*select大转盘*/
    public function getZhuan($id){
        $zhuandata = ZhuanCardModel::getZhuanCardById($id);
        if($zhuandata){
            $data = new stdClass();
            $data->title = $zhuandata->name;
            $data->description = $zhuandata->description;
            $data->picurl =  Yii::app()->request->hostInfo.'/upload/slider/'.$zhuandata->index_image;
            $data->url = Yii::app()->request->hostInfo.'/Zhuan/I/sid/'.$this->userdata->id.'/f/'.$this->postObj->FromUserName.'/s/'.$id;
            $this->insertReplay('ZhuanCard','z_'.$id,2);
            $this->responseImageText($data);
        }else{
            return false;
        }
    }

    /*
     * select优惠券
     */
    public function getSale($id){
        $saledata = SaleCardModel::getSaleCardById($id);
        if($saledata){
            $data = new stdClass();
            $data->title = $saledata->name;
            $data->description = $saledata->description;
            $data->picurl =  Yii::app()->request->hostInfo.'/upload/slider/'.$saledata->index_image;
            $data->url = Yii::app()->request->hostInfo.'/Sale/I/sid/'.$this->userdata->id.'/f/'.$this->postObj->FromUserName.'/s/'.$id;
            $this->insertReplay('SaleCard','s_'.$id,2);
            $this->responseImageText($data);
        }else{
            return false;
        }
    }

    /*
     * select预约
     */
    public function getYu($id){
        $yudata = OrdermanageModel::getOrderById($id);
        if($yudata){
            $data = new stdClass();
            $data->title = $yudata->title;
            $data->description = $yudata->introduce;
            $data->picurl =  Yii::app()->request->hostInfo.'/upload/slider/'.$yudata->image_path;
            $data->url = Yii::app()->request->hostInfo.'/Order/OrderCard/sid/'.$this->userdata->id.'/f/'.$this->postObj->FromUserName.'/o/'.$id;
            $this->insertReplay('YuyueCard','y_'.$id,2);
            $this->responseImageText($data);
        }else{
            return false;
        }
    }

    /*
     * select名片
     */
    public function getName($id){
        $namedata = CallingcardManageModel::getCallingCardByid($id);
        if($namedata){
            $data = new stdClass();
            $data->title = $namedata->name.'--'.$namedata->job;
            $data->description = $namedata->company;
            $data->picurl =  Yii::app()->request->hostInfo.'/upload/slider/'.$namedata->head_image_path;
            $data->url = Yii::app()->request->hostInfo.'/CallingCard/Index/sid/'.$this->userdata->id.'/f/'.$this->postObj->FromUserName.'/c/'.$id;
            $this->insertReplay('NameCard','n_'.$id,2);
            $this->responseImageText($data);
        }else{
            return false;
        }
    }

    /*
     * 会员卡
     */
    public function getMemberCard(){
        $memberdata = MemberCardModel::getWeiMemberCardByUid($this->userdata->id);
        if($memberdata){
            $data = new stdClass();
            $data->title = $memberdata->index_title;
            $data->description = $memberdata->description;
            $data->picurl =  Yii::app()->request->hostInfo.'/upload/slider/'.$memberdata->index_image;
            $data->url = Yii::app()->request->hostInfo.'/Member/I/sid/'.$this->userdata->id.'/f/'.$this->postObj->FromUserName;
            $this->insertReplay('MemberCard','m_'.$memberdata->id,2);
            $this->responseImageText($data);
        }else{
            return false;
        }
    }
    /*-----预订-----*/
    public function getOrderCard(){
        $keyword = trim($this->postObj->Content);
        $OrderData = OrdermanageModel::getOrderCardByUid($this->userdata->id,$keyword);
        if($OrderData){
            $data= new stdClass();
            $data->title=$OrderData->title;
            $data->description=$OrderData->introduce;
            $data->picurl = Yii::app()->request->hostInfo.'/upload/slider/'.$OrderData->image_path;
            $data->url = Yii::app()->request->hostInfo.'/Order/OrderCard/sid/'.$this->userdata->id.'/f/'.$this->postObj->FromUserName.'/o/'.$OrderData->id;
            $this->insertReplay('OrderCard','o_'.$OrderData->id,2);
            $this->responseImageText($data);
        }else{
            return false;
        }
    }
    /*-------名片-------*/
    public function getCallingCard(){
        $keyword = trim($this->postObj->Content);
        $Callingcard = CallingcardManageModel::getCallingCardByUid($this->userdata->id,$keyword);
        if($Callingcard){
            $data= new stdClass();
            $data->title=$Callingcard->title;
            $data->description=$Callingcard->introduce;
            $data->picurl = Yii::app()->request->hostInfo.'/upload/slider/'.$Callingcard->image_path;
            $data->url = Yii::app()->request->hostInfo.'/Callingcard/Index/sid/'.$this->userdata->id.'/f/'.$this->postObj->FromUserName.'/c/'.$Callingcard->id;
            $this->insertReplay('CallingCard','c_'.$Callingcard->id,2);
            $this->responseImageText($data);
        }else{
            return false;
        }
    }
    /*
     * 优惠券
     */
    public function getSaleCard(){
        $keyword = trim($this->postObj->Content);
        $salecarddata = SaleCardModel::getSaleCardByUid($this->userdata->id,$keyword);
        if($salecarddata){
            $data = new stdClass();
            $data->title = $salecarddata->index_title;
            $data->description = $salecarddata->description;
            $data->picurl =  Yii::app()->request->hostInfo.'/upload/slider/'.$salecarddata->index_image;
            $data->url = Yii::app()->request->hostInfo.'/Sale/I/sid/'.$this->userdata->id.'/f/'.$this->postObj->FromUserName.'/s/'.$salecarddata->id;
            $this->insertReplay('SaleCard','s_'.$salecarddata->id,2);
            $this->responseImageText($data);
        }else{
            return false;
        }
    }

    /*
     * 刮刮卡
     */
    public function getGuaguaCard(){
        $keyword = trim($this->postObj->Content);
        $guaguacarddata = GuaguaCardModel::getGuaguaCardByUid($this->userdata->id,$keyword);
        if($guaguacarddata){
            $data = new stdClass();
            $data->title = $guaguacarddata->index_title;
            $data->description = $guaguacarddata->description;
            $data->picurl =  Yii::app()->request->hostInfo.'/upload/slider/'.$guaguacarddata->index_image;
            $data->url = Yii::app()->request->hostInfo.'/Guagua/I/sid/'.$this->userdata->id.'/f/'.$this->postObj->FromUserName.'/s/'.$guaguacarddata->id;
            $this->insertReplay('GuaguaCard','g_'.$guaguacarddata->id,2);
            $this->responseImageText($data);
        }else{
            return false;
        }
    }

    /*
     * 幸运大转盘
     */
    public function getZhuanCard(){
        $keyword = trim($this->postObj->Content);
        $zhuancarddata = ZhuanCardModel::getZhuanCardByUid($this->userdata->id,$keyword);
        if($zhuancarddata){
            $data = new stdClass();
            $data->title = $zhuancarddata->index_title;
            $data->description = $zhuancarddata->description;
            $data->picurl =  Yii::app()->request->hostInfo.'/upload/slider/'.$zhuancarddata->index_image;
            $data->url = Yii::app()->request->hostInfo.'/Zhuan/I/sid/'.$this->userdata->id.'/f/'.$this->postObj->FromUserName.'/s/'.$zhuancarddata->id;
            $this->insertReplay('ZhuanCard','z_'.$zhuancarddata->id,2);
            $this->responseImageText($data);
        }else{
            return false;
        }
    }

    /*
     * 微官网
     */
    public function getWeiWebMsg(){
        $webData = WxWebsiteModel::getWxWebByUid($this->userdata->id);
        $data = new stdClass();
        $data->title = $webData->msg_title;
        $data->description = $webData->msg_description;
        $data->picurl =  Yii::app()->request->hostInfo.'/upload/wxwebsite/'.$webData->msg_image;
        $data->url = Yii::app()->request->hostInfo.'/W/I/sid/'.$this->userdata->id;
        $this->insertReplay('WeiWebMsg','w_1',2);
        $this->responseImageText($data);
    }

    /*
     * 团购
     */
    public function getTuangood($id){
        $tuandata = TuangoodModel::getTuangoodById($id);
        if($tuandata){
            $data = new stdClass();
            $data->title = $tuandata->name;
            $data->description = $tuandata->description;
            $data->picurl =  Yii::app()->request->hostInfo.'/upload/slider/'.$tuandata->index_image;
            $data->url = Yii::app()->request->hostInfo.'/Tuan/I/sid/'.$this->userdata->id.'/f/'.$this->postObj->FromUserName.'/s/'.$tuandata->id;
            $this->insertReplay('Tuangood','t_'.$tuandata->id,2);
            $this->responseImageText($data);
        }else{
            return false;
        }
    }


    public function insertReplay($type,$data,$stype){
        $msglistModel = new MsgListModel();
        $msglistModel->uid = $this->userdata->id;
        $msglistModel->to_openid = $this->postObj->FromUserName;
        $msglistModel->from_openid = $this->postObj->ToUserName;
        $msglistModel->type = $type;
        if($stype ==1){
            $msglistModel->content = $data;
        }else if($stype == 2){
            $msglistModel->source_id = $data;
        }
        $msglistModel-> insertMsg();
    }

    public function responseText($content){
        $textTpl = "<xml>
                    <ToUserName><![CDATA[%s]]></ToUserName>
                    <FromUserName><![CDATA[%s]]></FromUserName>
                    <CreateTime>%s</CreateTime>
                    <MsgType><![CDATA[%s]]></MsgType>
                    <Content><![CDATA[%s]]></Content>
                    </xml>";
        echo sprintf($textTpl, $this->postObj->FromUserName, $this->postObj->ToUserName, time(),$this->postObj->MsgType, $content);
        exit;
    }

    public function responseImage($pic){
        $imageTpl="<xml>
                    <ToUserName><![CDATA[%s]]></ToUserName>
                    <FromUserName><![CDATA[%s]]></FromUserName>
                    <CreateTime>%s</CreateTime>
                    <MsgType><![CDATA[%s]]></MsgType>
                    <Image>
                    <MediaId><![CDATA[%s]]></MediaId>
                    </Image>
                    </xml> ";
        echo sprintf($imageTpl, $this->postObj->FromUserName, $this->postObj->ToUserName, time(),'image',$pic);
        exit;
    }

    public function responseImageText($data){
        $imageTpl = "<xml>
                    <ToUserName><![CDATA[%s]]></ToUserName>
                    <FromUserName><![CDATA[%s]]></FromUserName>
                    <CreateTime>%s</CreateTime>
                    <MsgType><![CDATA[%s]]></MsgType>
                    <ArticleCount>%s</ArticleCount>
                    <Articles>
                    <item>
                    <Title><![CDATA[%s]]></Title>
                    <Description><![CDATA[%s]]></Description>
                    <PicUrl><![CDATA[%s]]></PicUrl>
                    <Url><![CDATA[%s]]></Url>
                    </item>
                    </Articles>
                    </xml> ";
        echo sprintf($imageTpl, $this->postObj->FromUserName, $this->postObj->ToUserName, time(),'news', 1,$data->title,
            $data->description,$data->picurl,$data->url);
        exit;
    }

    public function responseImagesTexts($data){
        $tpl = "<xml>
                    <ToUserName><![CDATA[{$this->postObj->FromUserName}]]></ToUserName>
                    <FromUserName><![CDATA[{$this->postObj->ToUserName}]]></FromUserName>
                    <CreateTime>".time()."</CreateTime>
                    <MsgType><![CDATA[news]]></MsgType>
                    <ArticleCount>".count($data)."</ArticleCount>
                    <Articles>";
        foreach($data as $v){
            $v->origin_title=str_replace('&nbsp;','',$v->origin_title);
            $v->origin_title=str_replace('&quot;','',$v->origin_title);
            $v->origin_title=str_replace('&#8211;','',$v->origin_title);
            $tpl .= "<item>
                    <Title><![CDATA[".$v->origin_title."]]></Title>
                    <Description><![CDATA[sss]]></Description>
                    <PicUrl><![CDATA[http://img.diaobao.in/".$v->with_image."]]></PicUrl>
                    <Url><![CDATA[http://api.diaobao.in/index.php/m/s?s=".dechex(rand(10,99).$v->id)."]]></Url>
                    </item>\r\n";
        }

        $tpl .="</Articles>
                    </xml>";
        echo $tpl;
        exit;
    }



    public function actionCreateMenu(){
        $token = json_decode($this->getToken(),true);
        $url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$token['access_token'];
        $data = '{
     "button":[
     {
           "name":"微信联盟",
           "sub_button":[
           {
               "type":"click",
               "name":"联盟介绍",
               "key":"V1001_diaobao"
            },
            {
               "type":"click",
               "name":"成员介绍",
               "key":"V1002_diaobao"
            },
            {
               "type":"click",
               "name":"广告刊例",
               "key":"V1003_diaobao"
            },
            {
               "type":"view",
               "name":"加入联盟",
               "url":"http://api.diaobao.in/index.php/weixin/joindiaobao/index"
            }]
       },
       {
           "name":"每日一推",
           "sub_button":[
           {
               "type":"click",
               "name":"公众号推荐",
               "key":"V1004_diaobao"
            },
            {
               "type":"view",
               "name":"碉堡社区",
               "url":"http://mq.wsq.qq.com/126921624"
            },
            {
               "type":"click",
               "name":"碉民早爆",
               "key":"V1005_diaobao"
            }
            ]
       },
       {
           "name":"碉堡资讯",
           "sub_button":[
           {
               "type":"view",
               "name":"ios版下载",
               "url":"https://itunes.apple.com/cn/app/id702672102"
            },
            {
               "type":"view",
               "name":"安卓版下载",
               "url":"http://www.diaobao.la/diaobao.apk"
            },
            {
               "type":"click",
               "name":"绑定账号",
               "key":"V1006_diaobao"
            },
            {
               "type":"click",
               "name":"商务合作",
               "key":"V1007_diaobao"
            }]
       }]
 }';
        echo $this->httpMethod($url,$data);
    }

}