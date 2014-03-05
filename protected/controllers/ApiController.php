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

    public function actionBind(){
        $t=Yii::app()->request->getParam('t','');
        if(!empty($t)){
            if(($this->userdata = UserModel::findByToken($t))){
                $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
              //  file_put_contents('1.txt',$postStr);
                if (!empty($postStr)){
                    $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
                    $RX_TYPE = trim($postObj->MsgType);
                    switch($RX_TYPE){
                        case "text":
                            $resultStr = $this->handleText($postObj);
                            break;
                        case "event":
                            $resultStr = $this->handleEvent($postObj);
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
                    $this->valid();
                    if(userModel::findByToken(TOKEN)){
                        $this->valid();exit;
                    }else{
                        $userModel = new UserModel();
                        $userModel->wx_token = $t;
                        if($userModel->updateByToken()){
                            return true;
                        }else{
                            return false;
                        }
                        $this->valid();
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

    public function handleText($postObj){
        $keyword = trim($postObj->Content);
        if(!empty($keyword)){
            if(preg_match('/微官网/',$keyword)){
                $this->getWeiWebMsg($postObj);
            }
        }else{
            //$contentStr = "欢迎关注碉堡君!";
            //$this->responseText($postObj, $contentStr);
        }
    }

    public function handleEvent($object){
        $contentStr = "";
        switch ($object->Event){
            case "subscribe":
                $contentStr = "谢谢关注";
                $object->MsgType='text';
                break;
            default :
                $contentStr = "Unknow Event: ".$object->Event;
                break;
        }
        $this->responseText($object, $contentStr);
    }

    public function getWeiWebMsg($postObj){
        $webData = WxWebsiteModel::getWxWebByUid($this->userdata->id);
        $data = new stdClass();
        $data->title = $webData->msg_title;
        $data->description = $webData->msg_description;
        $data->picurl =  Yii::app()->request->hostInfo.'/upload/wxwebsite/'.$webData->msg_image;
        $data->url = Yii::app()->request->hostInfo.'/W/I/sid/'.$this->userdata->id;
        $this->responseImageText($postObj,$data);
    }

    public function responseText($object, $content){
        $textTpl = "<xml>
                    <ToUserName><![CDATA[%s]]></ToUserName>
                    <FromUserName><![CDATA[%s]]></FromUserName>
                    <CreateTime>%s</CreateTime>
                    <MsgType><![CDATA[%s]]></MsgType>
                    <Content><![CDATA[%s]]></Content>
                    </xml>";
        echo sprintf($textTpl, $object->FromUserName, $object->ToUserName, time(),$object->MsgType, $content);
    }

    public function responseImage($object,$pic){
        $imageTpl="<xml>
                    <ToUserName><![CDATA[%s]]></ToUserName>
                    <FromUserName><![CDATA[%s]]></FromUserName>
                    <CreateTime>%s</CreateTime>
                    <MsgType><![CDATA[%s]]></MsgType>
                    <Image>
                    <MediaId><![CDATA[%s]]></MediaId>
                    </Image>
                    </xml> ";
        echo sprintf($imageTpl, $object->FromUserName, $object->ToUserName, time(),'image',$pic);

    }

    public function responseImageText($object,$data){
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
        echo sprintf($imageTpl, $object->FromUserName, $object->ToUserName, time(),'news', 1,$data->title,
            $data->description,$data->picurl,$data->url);
    }

    public function responseImagesTexts($object,$data){
        $tpl = "<xml>
                    <ToUserName><![CDATA[{$object->FromUserName}]]></ToUserName>
                    <FromUserName><![CDATA[{$object->ToUserName}]]></FromUserName>
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