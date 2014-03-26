<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-17
 * Time: 下午4:41
 * To change this template use File | Settings | File Templates.
 */
class LiuwapweiController extends CController{

    public $layout='//layouts/column4';

    public function actionI(){
        $uid = Yii::app()->request->getParam('sid');
        $openid = Yii::app()->request->getParam('f');
        $wxUserModel  = new WxuserModel();
        $wxUserModel->uid = $uid;
        $wxUserModel->openid = $openid;
        $wxuser = $wxUserModel->getUserByUidAndOpenId();
        if(!$wxuser){
            echo 'error';exit;
        }else{
            $liuyanListModel = new LiuyanListModel();
            $liuyanListModel->uid = $uid;
            $liuyandata = LiuyanModel::getLiuyanByUid($uid);
            $liulistdata =$liuyanListModel->getAllLiuyanList();
            $webdata = UserModel::findUserByid($uid);
            if($liuyandata){
                $this->render('index',array('liuyandata'=>$liuyandata,
                    'sid'=>$uid,
                    'openid'=>$openid,
                    'webdata'=>$webdata,
                    'liulistdata'=>$liulistdata
                ));
            }
        }
    }

    public function actionAddLiuyan(){
        $nickname = Yii::app()->request->getParam('nickname','');
        $content = Yii::app()->request->getParam('info');
        $openid = Yii::app()->request->getParam('openid');
        $uid = Yii::app()->request->getParam('uid');
        $pid = Yii::app()->request->getParam('pid');
        $liuyanListModel = new LiuyanListModel();
        $liuyanListModel->name = $nickname;
        $liuyanListModel->content = $content;
        $liuyanListModel->name = $nickname;
        $liuyanListModel->openid = $openid;
        $liuyanListModel->uid = $uid;
        $liuyanListModel->pid = $pid;
        if($liuyanListModel->addLiuyan()){
           echo CJSON::encode(array('success'=>true,'msg'=>'感谢您留言成功'));
        }else{
           echo CJSON::encode(array('success'=>false,'msg'=>'留言失败'));
            return false;
        }
    }



}