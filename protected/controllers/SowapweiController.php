<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-17
 * Time: 下午4:41
 * To change this template use File | Settings | File Templates.
 */
class SowapweiController extends CController{

    public $layout='//layouts/column4';

    public function actionI(){
        $id = Yii::app()->request->getParam('s');
        $uid = Yii::app()->request->getParam('sid');
        $openid = Yii::app()->request->getParam('f','');
        $from_openid = Yii::app()->request->getParam('from','');
        $type = Yii::app()->request->getParam('type','normal');
        $readModel = new ReaddataModel();
        $readModel->sid = $id;
        $readModel->from_openid = $from_openid;
        $readModel->type = 'so';
        $readModel->uid = $uid;
        $readModel->share_type = $type;
        $readModel->insertReaddata();
        if(!empty($uid)){
            $userdata = UserModel::findUserByid($uid);
            $webData = WxWebsiteModel::getWxWebByUid($uid);
            $sourcedata = SingleNewsMsgModel::getSingleById($id);
            if($sourcedata->url_id != null){
                $temp = explode('_',$sourcedata->url_id);
                $this->redirect(Yii::app()->request->baseUrl.'/'.strtoupper($temp[0]).'wapwei/I/id/'.$temp[1].'/f/'.$openid.'/sid/'.$uid);
            }else{
                $this->render('index',array('webdata'=>$webData,'openid'=>$openid,'sourcedata'=>$sourcedata,'uid'=>$uid,'userdata'=>$userdata));
            }
        }else{
            echo '非法请求';
        }
    }



}