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

    public function actionBind(){
        $t=Yii::app()->request->getParam('t','');
        if(!empty($t)){
            $temp = substr($t,0,2).hexdec(substr($t,2));
            $this->token = dechex($temp);
            if(!$this->checkSignature()){
                echo CJSON::encode(array('status'=>'-1','msg'=>'msg is error'));
                exit;
            }else{
                $this->valid();exit;
                if(userModel::findByToken($temp)){
                    $this->valid();exit;
                }else{
                    $agentUserModel =  new AgentUserModel();
                    $agentUserModel->token_sub = substr($temp,2,5);
                    $result = $agentUserModel->findByTokenSub();
                    if($result !== null){
                        $userModel = new UserModel();
                        $userModel->wx_token = $temp;
                        $userModel->puid = $result->id;
                        if($userModel->updateByToken()){
                            return true;
                        }else{
                            return false;
                        }
                    }
                    $this->valid();
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
        $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
        //file_put_contents('1.txt',$postStr);
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
    }

}