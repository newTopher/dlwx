<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-7
 * Time: 上午11:03
 * To change this template use File | Settings | File Templates.
 */
class MemberController extends CController {

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
            $vipdata = MemberCardModel::getWeiMemberCardByUid($uid);
            $member = ViplistModel::getVipByUidAndOpenid($uid,$openid);
            if($member){
                $this->render('index',array('vipdata'=>$vipdata,'sid'=>$uid,'openid'=>$openid,'member'=>$member));
            }else{
                $this->render('home',array('vipdata'=>$vipdata,'sid'=>$uid,'openid'=>$openid));
            }
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
            $member = ViplistModel::getVipByUidAndOpenid($uid,$openid);
            if($member){
                $result = array('errno'=>0,'error'=>'您已经是会员','url'=>Yii::app()->request->baseUrl.'/Member/Home/sid/'.$uid.'/f/'.$openid.'/v/'.$member->id);
            }else{
                if($lastid = $vipModel->insertVip()){
                    $result = array('errno'=>0,'error'=>'领取成功','url'=>Yii::app()->request->baseUrl.'/Member/Home/sid/'.$uid.'/f/'.$openid.'/v/'.$lastid);
                }else{
                    $result = array('errno'=>-1,'error'=>'领取失败');
                }
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
            $member = ViplistModel::getVipByUidAndOpenid($uid,$openid);
            if(!$member){
                $this->redirect(Yii::app()->request->baseUrl.'/Member/Addmember/sid/'.$uid.'/f/'.$openid);
            }else{
                $this->render('index',array('vipdata'=>$vipdata,'sid'=>$uid,'openid'=>$openid,'member'=>$member));
            }
        }
    }

    public function actionMemberdetail(){
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
            $member = ViplistModel::getVipByUidAndOpenid($uid,$openid);
            if(!$member){
                $this->redirect(Yii::app()->request->baseUrl.'/Member/Addmember/sid/'.$uid.'/f/'.$openid);
            }else{
                $this->render('memberdetail',array('vipdata'=>$vipdata,'sid'=>$uid,'openid'=>$openid,'member'=>$member));
            }
        }
    }

    public function actionUpdatedetail(){
        $uid = Yii::app()->request->getParam('sid');
        $id = Yii::app()->request->getParam('i');
        $openid = Yii::app()->request->getParam('f');
        $username = Yii::app()->request->getParam('username');
        $phone = Yii::app()->request->getParam('telephone');
        $sex = Yii::app()->request->getParam('gender');
        $birth_year = Yii::app()->request->getParam('birth_year');
        $birth_month = Yii::app()->request->getParam('birth_month');
        if(strlen($birth_month) ==1){
            $birth_month = '0'.$birth_month;
        }
        $birth_date = Yii::app()->request->getParam('birth_date');
        if(strlen($birth_date) ==1){
            $birth_date = '0'.$birth_date;
        }
        $address = Yii::app()->request->getParam('address');
        $wxUserModel  = new WxuserModel();
        $wxUserModel->uid = $uid;
        $wxUserModel->openid = $openid;
        $wxuser = $wxUserModel->getUserByUidAndOpenId();
        if(!$wxuser){
            echo 'error';exit;
        }else{
            $vipModel = new ViplistModel();
            $vipModel->id = $id;
            $vipModel->username = $username;
            $vipModel->phone = $phone;
            $vipModel->address = $address;
            $vipModel->sex = $sex;
            $vipModel->birthday = $birth_year.'-'.$birth_month.'-'.$birth_date;
            $member = ViplistModel::getVipByUidAndOpenid($uid,$openid);
            if(!$member){
                $result = array('errno'=>0,'error'=>'您已经是会员','url'=> Yii::app()->request->baseUrl.'/Member/Addmember/sid/'.$uid.'/f/'.$openid);
            }else{
                if($vipModel->updateVip()){
                    $result = array('errno'=>0,'error'=>'完善资料成功','url'=>Yii::app()->request->baseUrl.'/Member/Home/sid/'.$uid.'/f/'.$openid.'/v/'.$id);
                }else{
                    $result = array('errno'=>-1,'error'=>'完善资料失败');
                }
            }
            echo CJSON::encode($result);
        }
    }


}