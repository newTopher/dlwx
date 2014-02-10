<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-1-15
 * Time: 下午10:40
 * To change this template use File | Settings | File Templates.
 */
class WeixinFansController extends Controller{

    public $layout='//layouts/column3';

    public function actionIndex(){
        $wxUserModel = new WxuserModel();
        $wxUserModel->uid = Yii::app()->session['user']->id;
        $wxUserData = $wxUserModel->getWeixinUser();
        $this->render('index',array('wxUserData'=>$wxUserData));
    }

    public function actionView(){
        $wxUserModel = new WxuserModel();
        $wxUserModel->id = Yii::app()->request->getParam('id');
        $wxUserData = $wxUserModel->getWeixinUserById();
        $this->render('view',array('wxUserData'=>$wxUserData));
    }

    public function actionSendMsgView(){
        $wxUserModel = new WxuserModel();
        $wxUserModel->id = Yii::app()->request->getParam('id');
        $wxUserData = $wxUserModel->getWeixinUserById();
        $this->render('sendmsgview',array('wxUserData'=>$wxUserData));
    }

    public function actionSendMsg(){

    }



}