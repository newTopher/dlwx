<?php
/**
 * Created by IntelliJ IDEA.
 * User: db
 * Date: 13-12-18
 * Time: 上午11:49
 * To change this template use File | Settings | File Templates.
 */
class AgentController extends Controller{

    public $layout='//layouts/column3';

    public function actionAddUser(){
        $token = Yii::app()->session['user']->token_sub.$this->genSubToken();
        $puid =  Yii::app()->session['user']->id;
        $this->render('adduser',array('token'=>$token,'puid'=>$puid));
    }

    public function actionSet(){
        $this->render('set');
    }

    public function actionPwdSet(){
        $this->render('pwdset');
    }

    public function actionAddWexinAccount(){
        $agentWxUserModel = new AgentWxUserModel();
        $agentWxUserModel->wx_account=Yii::app()->request->getParam('wx_account','');
        $agentWxUserModel->wx_password=Yii::app()->request->getParam('wx_password','');
        $agentWxUserModel->token=Yii::app()->request->getParam('token','');
        $agentWxUserModel->puid=Yii::app()->request->getParam('puid','');
        if($agentWxUserModel->insertWxAccount()){
            $this->redirect_message('添加成功','success',2,Yii::app()->getBaseUrl()."/Agent/AddUser");
        }else{
            $this->redirect_message('添加失败','error',2,Yii::app()->getBaseUrl()."/Agent/AddUser");
        }
    }

    public function actionApplyList(){
        $agentWxUserModel = new AgentWxUserModel();
        $agentWxUserData = $agentWxUserModel->getAgentWxUser();
        $this->render('applylist',array('agentWxUserData'=>$agentWxUserData));
    }


}