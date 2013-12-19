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

    public $token='';

    const TOKEN = 'yiyue_wx';
    const APPID = 'wx03af9cefacdb3647';
    const APPSECRET = 'wx03af9cefacdb3647';

    public $tokenUrl = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx03af9cefacdb3647&secret=46bca6d2b05acaef4b7c138c7aeccc9d";
    public function valid(){
        //$echoStr = Yii::app()->request->getParam('echostr');
        if(!$this->checkSignature()){
            echo CJSON::encode(array('status'=>'-1','msg'=>'msg is error'));
        }
    }

    public function getToken(){
        return $this->getMethod($this->tokenUrl);
    }

    public function getMethod($url){
        return file_get_contents($url);
    }

    private function checkSignature(){
        $signature = Yii::app()->request->getParam('signature');
        $timestamp =  Yii::app()->request->getParam('timestamp');
        $nonce =  Yii::app()->request->getParam('nonce');
        $token = self::TOKEN;
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

    public function getConfig($key){
        $obj = new stdClass();
        switch ($key){
            case 'V1001':
                $obj->title = '今天免费午餐是什么呢';
                $obj->description = '参与天天秒杀，免费午餐享不停';
                $obj->picurl = 'http://qcyn.sinaimg.cn/2010/1115/2010111513124.jpg';
                $obj->url = 'http://www.baidu.com';
                return $obj;
                break;
            case 'V1002':
                $obj->title = '今天免费午餐是什么呢';
                $obj->description = '参与天天秒杀，免费午餐享不停';
                $obj->picurl = 'http://qcyn.sinaimg.cn/2010/1115/2010111513124.jpg';
                $obj->url = 'http://www.baidu.com';
                return $obj;
                break;
            case 'V1003':
                $obj->title = '今天免费午餐是什么呢';
                $obj->description = '参与天天秒杀，免费午餐享不停';
                $obj->picurl = 'http://qcyn.sinaimg.cn/2010/1115/2010111513124.jpg';
                $obj->url = 'http://www.baidu.com';
                return $obj;
                break;
            case 'V1004':
                $obj->title = '今天免费午餐是什么呢';
                $obj->description = '参与天天秒杀，免费午餐享不停';
                $obj->picurl = 'http://qcyn.sinaimg.cn/2010/1115/2010111513124.jpg';
                $obj->url = 'http://www.baidu.com';
                return $obj;
                break;
            case 'V1005':
                $obj->title = '今天免费午餐是什么呢';
                $obj->description = '参与天天秒杀，免费午餐享不停';
                $obj->picurl = 'http://qcyn.sinaimg.cn/2010/1115/2010111513124.jpg';
                $obj->url = 'http://www.baidu.com';
                return $obj;
                break;
            case 'V1006':
                $obj->title = '今天免费午餐是什么呢';
                $obj->description = '参与天天秒杀，免费午餐享不停';
                $obj->picurl = 'http://qcyn.sinaimg.cn/2010/1115/2010111513124.jpg';
                $obj->url = 'http://www.baidu.com';
                return $obj;
                break;
            default:
                break;
        }
    }

    public function genSubToken(){
        return md5(time());
    }
}