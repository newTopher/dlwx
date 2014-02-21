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
        $agent_user=new AgentUserModel();
        $agent_user->id=Yii::app()->session['user']->id;
        $list=$agent_user->AgentUserView();
        $this->render('set',array('list'=>$list));
    }

    public function actionPwdSet(){
        $msg="";
        if($_POST){
            $oldPass=Yii::app()->request->getParam('oldPass');
            $newPass=Yii::app()->request->getParam('newPass');
            $newPass1=Yii::app()->request->getParam('newpass1');
            if($newPass==$newPass1){
                $agent_user=new AgentUserModel();
                $agent_user->id= Yii::app()->session['user']->id;
                $agent_user->password=md5($newPass);
                $agent_user->changePassword();
            }else{
                $msg="两次密码输入不对";
            }
        }
        $this->render('pwdset',array('msg'=>$msg));
    }

    public function  actionAddMoney(){
        $agent_user=new AgentUserModel();
        $agent_user->id=Yii::app()->session['user']->id;
        $charge_note=new AgentUserModel();
        $list=$agent_user->AgentUserView();
        if($_POST){
            $charge_note->uid=$agent_user->id;
            $charge_note->money= Yii::app()->request->getParam('money','');
            $charge_note->time=Yii::app()->request->getParam('date');
            $charge_note->pay_way=Yii::app()->request->getParam('pay_way','');
            $charge_note->email=Yii::app()->session['user']->email;
            $charge_note->agent_name=Yii::app()->session['user']->name;
        }else{
            $msg = "";
        }
         $this->render('addMoney',array('list'=>$list));
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
        $puid = Yii::app()->session['user']->id;
        $agentWxUserModel = new AgentWxUserModel();
        $agentWxUserData = $agentWxUserModel->getAgentWxUser($puid);
        $this->render('applylist',array('agentWxUserData'=>$agentWxUserData));
    }

    public function actionCatFailReason(){
        $agentWxUserModel = new AgentWxUserModel();
        $reasonData = $agentWxUserModel->getFailReason(Yii::app()->request->getParam('id',''));
        $this->render('failreason',array('reasonData'=>$reasonData));
    }

    public function actionResubmit(){
        $agentWxUserModel = new AgentWxUserModel();
        $data = $agentWxUserModel->getFailReason(Yii::app()->request->getParam('id',''));
        $this->render('resubmit',array('data'=>$data));
    }

    public function actionDoresubmit(){
        $agentWxUserModel = new AgentWxUserModel();
        $agentWxUserModel->wx_account=Yii::app()->request->getParam('wx_account','');
        $agentWxUserModel->wx_password=Yii::app()->request->getParam('wx_password','');
        $agentWxUserModel->id=Yii::app()->request->getParam('id','');
        if($agentWxUserModel->updateAgentUser()){
            $this->redirect(Yii::app()->getBaseUrl()."/Agent/ApplyList");
        }else{
            $this->redirect(Yii::app()->getBaseUrl()."/Agent/Resubmit");
        }
    }

    public function actionDel(){
        $agentWxUserModel = new AgentWxUserModel();
        $agentWxUserModel->id=Yii::app()->request->getParam('id','');
        if($agentWxUserModel->delAgentUser()){
            $this->redirect_message('删除成功','success',2,Yii::app()->getBaseUrl()."/Agent/ApplyList");
        }else{
            $this->redirect_message('删除失败','error',2,Yii::app()->getBaseUrl()."/Agent/ApplyList");
        }
    }

    

}