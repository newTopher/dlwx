<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-7
 * Time: 上午11:03
 * To change this template use File | Settings | File Templates.
 */
class MemberController extends Controller {

    public $layout='//layouts/column4';

    public function actionI(){
        $uid = Yii::app()->request->getParam('sid');
        $openid = Yii::app()->request->getParam('

        ');
        $wxUserModel  = new WxuserModel();
        $wxUserModel->uid = $uid;
        $wxUserModel->openid = $openid;
        $wxuser = $wxUserModel->getUserByUidAndOpenId();
        if(!$wxuser){
            echo 'error';exit;
        }else{
            $vipdata = MemberCardModel::getWeiMemberCardByUid($uid);
            $this->render('home',array('vipdata'=>$vipdata,'sid'=>$uid,'openid'=>$openid));
        }
    }

    public function actionAddmember(){
        $uid = Yii::app()->request->getParam('sid');
        $openid = Yii::app()->request->getParam('f');
        $wxUserModel  = new WxuserModel();
        $wxUserModel->uid = $uid;
        $wxUserModel->openid = $openid;
        $wxuser = $wxUserModel->getUserByUidAndOpenId();
        if(!$wxuser){
            echo 'error';exit;
        }else{
            $vipdata = MemberCardModel::getWeiMemberCardByUid($uid);
            $this->render('addmember',array('vipdata'=>$vipdata,'sid'=>$uid,'openid'=>$openid));
        }
    }

    public function actionInsertMember(){
        $uid = Yii::app()->request->getParam('sid');
        $openid = Yii::app()->request->getParam('f');
        $username = Yii::app()->request->getParam('username');
        $phone = Yii::app()->request->getParam('telephone');
        $wxUserModel  = new WxuserModel();
        $wxUserModel->uid = $uid;
        $wxUserModel->openid = $openid;
        $wxuser = $wxUserModel->getUserByUidAndOpenId();
        if(!$wxuser){
            echo 'error';exit;
        }else{
            $vipModel = new ViplistModel();
            $vipModel->uid = $uid;
            $vipModel->username = $username;
            $vipModel->openid = $openid;
            $vipModel->phone = $phone;
            if($lastid = $vipModel->insertVip()){
                $result = array('errno'=>0,'error'=>'领取成功','url'=>Yii::app()->request->baseUrl.'/Member/Home/sid/'.$uid.'/f/'.$openid.'/v/'.$lastid);
            }else{
                $result = array('errno'=>-1,'error'=>'领取失败');
            }
            echo CJSON::encode($result);
        }
    }

    public function actionHome(){
        $uid = Yii::app()->request->getParam('sid');
        $openid = Yii::app()->request->getParam('f');
        $wxUserModel  = new WxuserModel();
        $wxUserModel->uid = $uid;
        $wxUserModel->openid = $openid;
        $wxuser = $wxUserModel->getUserByUidAndOpenId();
        if(!$wxuser){
            echo 'error';exit;
        }else{
            $vipdata = MemberCardModel::getWeiMemberCardByUid($uid);
            $this->render('index',array('vipdata'=>$vipdata,'sid'=>$uid,'openid'=>$openid));
        }
    }


}