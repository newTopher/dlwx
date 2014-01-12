<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 13-12-18
 * Time: 下午11:21
 * To change this template use File | Settings | File Templates.
 */
class AgentManageController extends Controller{

    public $layout='//layouts/column3';

    public function actionAdd(){
        $this->render('add');
    }

    public function actionInsert(){
        $agentUserModel = new AgentUserModel();
        $agentUserModel->email = Yii::app()->request->getParam('email','')."@wapwei";
        $agentUserModel->password = md5(Yii::app()->request->getParam('password',''));
        $agentUserModel->agent_name = Yii::app()->request->getParam('agent_name','');
        $agentUserModel->telephone = Yii::app()->request->getParam('telephone','');
        $agentUserModel->mobilephone = Yii::app()->request->getParam('mobilephone','');
        $agentUserModel->money = Yii::app()->request->getParam('money','');
        $agentUserModel->login_time=time();
        $login_time=$agentUserModel->login_time;
        $deadline = Yii::app()->request->getParam('deadline','');
        if($deadline=="试用7天"){
          $agentUserModel->end_time=$login_time+7*3600*24;
          $agentUserModel->status=2;
          $agentUserModel->type=2;
        }elseif($deadline=="使用一年"){
          $agentUserModel->end_time=$login_time+365*3600*24;
          $agentUserModel->status=1;
          $agentUserModel->type=1;
        }elseif($deadline=="长期有效"){
          $agentUserModel->end_time=1;
          $agentUserModel->status=1;
          $agentUserModel->type=0;
        }
        $agentUserModel->token_sub=$this->genSubToken();
        if($agentUserModel->insertUser()){
            $this->redirect_message('添加成功','success',2,Yii::app()->getBaseUrl()."/AgentManage/add");
        }else{
            $this->redirect_message('添加失败','error',2,Yii::app()->getBaseUrl()."/AgentManage/add");
            exit;

        }
    }

    public function actionUpdate(){
        $agentUserModel = new AgentUserModel();
        $agentUserModel->update_time=time();
        $login_time=time();
        $agentUserModel->id = Yii::app()->request->getParam('id','');
        $agentUserModel->money = Yii::app()->request->getParam('add_money','');
        $agentUserModel->rate = Yii::app()->request->getParam('rate','');
        $deadline = Yii::app()->request->getParam('deadline','');

        if($deadline=="试用7天"){
            $agentUserModel->end_time=$login_time+7*3600*24;
            $agentUserModel->status=2;
            $agentUserModel->type=2;
        }elseif($deadline=="使用一年"){
            $agentUserModel->end_time=$login_time+365*3600*24;
            $agentUserModel->status=1;
            $agentUserModel->type=1;
        }elseif($deadline=="长期有效"){
            $agentUserModel->end_time=1;
            $agentUserModel->status=1;
            $agentUserModel->type=0;
        }
        if($agentUserModel->UpdateUser()){
            $this->redirect(Yii::app()->getBaseUrl()."/AgentManage/renew?id=".$agentUserModel->id."&meg=1");
        }else{
            $this->redirect(Yii::app()->getBaseUrl()."/AgentManage/renew?id=".$agentUserModel->id."&meg=2");
            exit;
        }

    }
    public function actionList(){
        $agentUserModel = new AgentUserModel();
        $attributes=$agentUserModel->selectUser();
        $this->render('list',array('list'=>$attributes));
    }

    public function actionClose(){
        $agentUserModel = new AgentUserModel();
        $agentUserModel->id = Yii::app()->request->getParam('id','');
        $agentUserModel->AgentUserClose();
        $this->redirect(Yii::app()->getBaseUrl().'/AgentManage/list');
    }

    public function actionOpen(){
        $agentUserModel = new AgentUserModel();
        $agentUserModel->id = Yii::app()->request->getParam('id','');
        $agentUserModel->type = Yii::app()->request->getParam('type','');
        $agentUserModel->AgentUserOpen();
        $this->redirect(Yii::app()->getBaseUrl().'/AgentManage/list');
    }

    public function actionView(){
        $agentUserModel = new AgentUserModel();
        $agentUserModel->id=Yii::app()->request->getParam('id','');
        $list=$agentUserModel->AgentUserView();
        $this->render('view',array('list'=>$list));
    }

    public function actionChangePassword(){
        $agentUserModel = new AgentUserModel();
        $agentUserModel->id=Yii::app()->request->getParam('id','');
        $oldpass=Yii::app()->request->getParam('old_password','');
        $List=$agentUserModel->AgentUserView();
        echo $List->password;
        if($List->password==$oldpass){
            $e=1;
        }else{
            $e=2;
        }

        $pass=Yii::app()->request->getParam('wx_password','');
        $pass1=Yii::app()->request->getParam('wx_password1','');
        if(!empty($pass1)&&!empty($pass)&&$pass==$pass1){
            $agentUserModel->id=Yii::app()->request->getParam('id','');
            $agentUserModel->password=$pass;
            $agentUserModel->changePassword();
            $e=1;
            $this->redirect(Yii::app()->getBaseUrl().'/AgentManage/view?id='.$agentUserModel->id.'&e='.$e);
        }else{
            $e=3;
            $this->redirect(Yii::app()->getBaseUrl().'/AgentManage/view?id='.$agentUserModel->id.'&e='.$e);
        }
    }

    public function actionRenew(){
        $agentUserModel = new AgentUserModel();
        $agentUserModel->id = Yii::app()->request->getParam('id','');
        $meg = Yii::app()->request->getParam('meg','');
        if($meg==1){
            $meg="充值成功";
        }elseif($meg==2){
            $meg="充值失败";
        }else{
            $meg=null;
        }
        $AgentList=$agentUserModel->AgentUserView();
        $agentUserModel->id = Yii::app()->request->getParam('id','');
        $agentUserModel->money=Yii::app()->request->getParam('money','');
        $this->render('renew',array('list'=>$AgentList,'meg'=>$meg));

    }
}