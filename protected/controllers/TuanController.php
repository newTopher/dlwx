<?php
    /**
     * Created by IntelliJ IDEA.
     * User: Topher
     * Date: 14-3-7
     * Time: 上午11:03
     * To change this template use File | Settings | File Templates.
     */
class TuanController extends CController {

    public $layout='//layouts/column4';

    public function actionI(){
        $uid = Yii::app()->request->getParam('sid');
        $openid = Yii::app()->request->getParam('f');
        $id = Yii::app()->request->getParam('s');
        $wxUserModel  = new WxuserModel();
        $wxUserModel->uid = $uid;
        $wxUserModel->openid = $openid;
        $wxuser = $wxUserModel->getUserByUidAndOpenId();
        if(!$wxuser){
            echo 'error';exit;
        }else{
            $tuandata = TuangoodModel::getTuangoodById($id);
            $vipdata = MemberCardModel::getWeiMemberCardByUid($uid);
            if(!$vipdata){
                $vipdata = null;
            }
            $this->render('tuanview',array('tuandata'=>$tuandata,'sid'=>$uid,'openid'=>$openid,'vipdata'=>$vipdata));
        }
    }

    public function actionList(){
        $uid = Yii::app()->request->getParam('sid');
        $openid = Yii::app()->request->getParam('f');
        $wxUserModel  = new WxuserModel();
        $wxUserModel->uid = $uid;
        $wxUserModel->openid = $openid;
        $wxuser = $wxUserModel->getUserByUidAndOpenId();
        if(!$wxuser){
            echo 'error';exit;
        }else{
            $tuandata = TuangoodModel::getDataTuanlistById($uid);
            $this->render('index',array('tuandata'=>$tuandata,'sid'=>$uid,'openid'=>$openid));
        }
    }

    public function actionCantuan(){
        $uid = Yii::app()->request->getParam('sid');
        $openid = Yii::app()->request->getParam('f');
        $id = Yii::app()->request->getParam('s');
        $wxUserModel  = new WxuserModel();
        $wxUserModel->uid = $uid;
        $wxUserModel->openid = $openid;
        $wxuser = $wxUserModel->getUserByUidAndOpenId();
        if(!$wxuser){
            echo 'error';exit;
        }else{
            $tuandata = TuangoodModel::getTuangoodById($id);
            $this->render('cantuan',array('tuandata'=>$tuandata,'sid'=>$uid,'openid'=>$openid));
        }
    }

    public function actionContuan(){
        $uid = Yii::app()->request->getParam('sid');
        $openid = Yii::app()->request->getParam('f');
        $id = Yii::app()->request->getParam('s');
        $num = Yii::app()->request->getParam('num');
        $mobile = Yii::app()->request->getParam('mobile');
        $username = Yii::app()->request->getParam('username');
        $mark = Yii::app()->request->getParam('mark');
        $wxUserModel  = new WxuserModel();
        $wxUserModel->uid = $uid;
        $wxUserModel->openid = $openid;
        $wxuser = $wxUserModel->getUserByUidAndOpenId();
        if(!$wxuser){
            echo 'error';exit;
        }else{
            $tuandata = TuangoodModel::getTuangoodById($id);
            $this->render('confirmtuan',array('tuandata'=>$tuandata,'sid'=>$uid,'openid'=>$openid,
                'num'=>$num,'mobile'=>$mobile,'username'=>$username,'mark'=>$mark
            ));
        }
    }

    public function actionAddorder(){
        $uid = Yii::app()->request->getParam('sid');
        $openid = Yii::app()->request->getParam('f');
        $id = Yii::app()->request->getParam('s');
        $num = Yii::app()->request->getParam('num');
        $mobile = Yii::app()->request->getParam('mobile');
        $username = Yii::app()->request->getParam('username');
        $mark = Yii::app()->request->getParam('mark');
        $wxUserModel  = new WxuserModel();
        $wxUserModel->uid = $uid;
        $wxUserModel->openid = $openid;
        $wxuser = $wxUserModel->getUserByUidAndOpenId();
        if(!$wxuser){
            echo 'error';exit;
        }else{
            $tuandata = TuangoodModel::getTuangoodById($id);
            $tuanOrderModel = new TuanorderlistModel();
            $tuanOrderModel->uid = $uid;
            $tuanOrderModel->openid = $openid;
            $tuanOrderModel->username = $username;
            $tuanOrderModel->phone = $mobile;
            $tuanOrderModel->money = $num*$tuandata->price;
            $tuanOrderModel->status = 0;
            $tuanOrderModel->num = $num;
            $tuanOrderModel->tid = $id;
            $tuanOrderModel->mark = $mark;
            if($tuanOrderModel->insertTuanorder()){
                echo CJSON::encode(array('code'=>0,'url'=>Yii::app()->request->baseUrl.'/Tuan/Orderlist/sid/'.$uid.'/f/'.$openid.'/s/'.$id.'/sta/0'));
            }else{
                echo CJSON::encode(array('code'=>-1));
            }
        }
    }

    public function actionOrderlist(){
        $uid = Yii::app()->request->getParam('sid');
        $openid = Yii::app()->request->getParam('f');
        $status = Yii::app()->request->getParam('sta');
        $wxUserModel  = new WxuserModel();
        $wxUserModel->uid = $uid;
        $wxUserModel->openid = $openid;
        $wxuser = $wxUserModel->getUserByUidAndOpenId();
        if(!$wxuser){
            echo 'error';exit;
        }else{
            $orderlist = TuanorderlistModel::getUserTuanOrder($openid,$uid,$status);
            $this->render('orderlist',array('sid'=>$uid,'openid'=>$openid,'orderlist'=>$orderlist,'status'=>$status));
        }
    }

    public function actionOrderdetail(){
        $uid = Yii::app()->request->getParam('sid');
        $openid = Yii::app()->request->getParam('f');
        $oid = Yii::app()->request->getParam('oid');
        $id = Yii::app()->request->getParam('s');
        $wxUserModel  = new WxuserModel();
        $wxUserModel->uid = $uid;
        $wxUserModel->openid = $openid;
        $wxuser = $wxUserModel->getUserByUidAndOpenId();
        if(!$wxuser){
            echo 'error';exit;
        }else{
            $tuandata = TuangoodModel::getTuangoodById($id);
            $orderdata = TuanorderlistModel::getOrder($oid);
            $this->render('orderdetail',array('sid'=>$uid,'openid'=>$openid,'tuandata'=>$tuandata,'orderdata'=>$orderdata));
        }
    }


}