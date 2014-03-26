<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-17
 * Time: 下午1:36
 * To change this template use File | Settings | File Templates.
 * 频道控制器
 */
class CwapweiController extends CController{

    public $layout='//layouts/column4';

    public function actionI(){
        $id = Yii::app()->request->getParam('id');
        $uid = Yii::app()->request->getParam('sid');
        $openid = Yii::app()->request->getParam('f','');
        $from_openid = Yii::app()->request->getParam('from','');
        $type = Yii::app()->request->getParam('type','normal');
        $readModel = new ReaddataModel();
        $readModel->sid = $id;
        $readModel->from_openid = $from_openid;
        $readModel->type = 'c';
        $readModel->uid = $uid;
        $readModel->share_type = $type;
        $readModel->insertReaddata();
        if(!empty($uid)){
            $userdata = UserModel::findUserByid($uid);
            $webData = WxWebsiteModel::getWxWebByUid($uid);
            $menudata = ChannelModel::getChannel($id);
            if($menudata->pid == 0){
                if($data = ChannelModel::getPidChannel($id)){
                    if($menudata->linkid != null){
                        $temp = explode('_',$menudata->linkid);
                        $this->redirect(Yii::app()->request->baseUrl.'/'.strtoupper($temp[0]).'wapwei/I/id/'.$temp[1].'/sid/'.$uid.'/f/'.$openid);
                    }else{
                        $this->render('list',array('listdata'=>$data,'uid'=>$uid,'webdata'=>$webData,'menudata'=>$menudata,'openid'=>$openid)) ;
                    }
                }else{
                    $this->render('index',array('webdata'=>$webData,'openid'=>$openid,'menudata'=>$menudata,'uid'=>$uid,'userdata'=>$userdata));
                }
            }else{
                if($menudata->linkid != null){
                    $temp = explode('_',$menudata->linkid);
                    $this->redirect(Yii::app()->request->baseUrl.'/'.strtoupper($temp[0]).'wapwei/I/id/'.$temp[1].'/sid/'.$uid.'/f/'.$openid);
                }else{
                    $this->render('index',array('webdata'=>$webData,'openid'=>$openid,'menudata'=>$menudata,'uid'=>$uid,'userdata'=>$userdata));
                }
            }
        }else{
            echo '非法请求';
        }
    }



}