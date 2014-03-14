<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

    const TOKEN = 'yiyue_wx';
    public  $APPID = null;
    public  $APPSECRET = null;
    public $access_token;

    public $tokenUrl = "";

    public function getToken(){
        $this->tokenUrl = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$this->APPID."&secret=".$this->APPSECRET;
        return $this->getMethod($this->tokenUrl);
    }

    public function getMethod($url){
        return file_get_contents($url);
    }



    public function httpMethod($url,$data){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $info = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Errno'.curl_error($ch);
        }

        curl_close($ch);
        return $info;
    }

    public function getAllselect(){
        $selectdata = array();
        $channelModel = new ChannelModel();
        $channelModel->uid = Yii::app()->session['user']->id;
        $selectdata['channel'] =$channelModel->getChannelByUid();

        $member_data = MemberCardModel::getWeiMemberCardByUid(Yii::app()->session['user']->id);
        if($member_data){
            $selectdata['member'] = $member_data;
        }else{
            $selectdata['member'] = null;
        }
        $saledata = SaleCardModel::getDataSalelistByUid(Yii::app()->session['user']->id);
        if($saledata){
            $selectdata['saledata'] = $saledata;
        }else{
            $selectdata['saledata'] = null;
        }

        $guaguadata = GuaguaCardModel::getDataGuagualistByUid(Yii::app()->session['user']->id);
        if($guaguadata){
            $selectdata['guaguadata'] = $guaguadata;
        }else{
            $selectdata['guaguadata'] = null;
        }

        $zhuandata = ZhuanCardModel::getDataZhuanlistByUid(Yii::app()->session['user']->id);
        if($zhuandata){
            $selectdata['zhuandata'] = $zhuandata;
        }else{
            $selectdata['zhuandata'] = null;
        }

        $yuyuedata = OrdermanageModel::getAllOrderByUid(Yii::app()->session['user']->id);
        if($yuyuedata){
            $selectdata['yuyuedata'] = $yuyuedata;
        }else{
            $selectdata['yuyuedata'] = null;
        }

        $namecarddata = CallingcardManageModel::getAllOrderByUid(Yii::app()->session['user']->id);
        if($namecarddata){
            $selectdata['namecarddata'] = $namecarddata;
        }else{
            $selectdata['namecarddata'] = null;
        }

        $tuandata = TuangoodModel::getDataTuanlistById(Yii::app()->session['user']->id);
        if($tuandata){
            $selectdata['tuandata'] = $tuandata;
        }else{
            $selectdata['tuandata'] = null;
        }

        return $selectdata;
    }

    public function getUserDetailInfo($openid){
        $userModel = UserModel::findUserByid(Yii::app()->session['user']->id);
        if($userModel->wx_appid != null && $userModel->wx_appsecret != null){
            $this->APPID = $userModel->wx_appid;
            $this->APPSECRET = $userModel->wx_appsecret;
            $accessToken = $this->getToken();
            $token = CJSON::decode($accessToken,true);
            $this->access_token = $token['access_token'];
            $url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$this->access_token."&openid=".$openid."&lang=zh_CN";
            return $this->getMethod($url);
        }else{
            return false;
        }
    }

    public function sendMsgToUser($data){
        $accessToken = $this->getToken();
        $token = CJSON::decode($accessToken,true);
        $this->access_token = $token['access_token'];
        $url = "https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token=".$this->access_token;
        return $this->httpMethod($url,$data);
    }


}