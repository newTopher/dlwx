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
        }elseif($deadline=="使用一年"){
          $agentUserModel->end_time=$login_time+365*3600*24;
          $agentUserModel->status=1;
        }elseif($deadline=="长期有效"){
          $agentUserModel->end_time=1;
          $agentUserModel->status=1;
        }
        $agentUserModel->token_sub=$this->genSubToken();
        if($agentUserModel->insertUser()){
            $this->redirect_message('添加成功','success',2,Yii::app()->getBaseUrl()."/AgentManage/add");
        }else{
            $this->redirect_message('添加失败','error',2,Yii::app()->getBaseUrl()."/AgentManage/add");
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
        $agentUserModel->status = Yii::app()->request->getParam('status','');
        echo   $agentUserModel->status;exit;
        $agentUserModel->AgentUserOpen();
    }
}