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
        $agentUserModel->email = Yii::app()->request->getParam('email','');
        $agentUserModel->password = Yii::app()->request->getParam('password','');
        $agentUserModel->agent_name = Yii::app()->request->getParam('agent_name','');
        $agentUserModel->token_sub=$this->genSubToken();
        if($agentUserModel->insertUser()){
            $this->redirect_message('添加成功','success',2,Yii::app()->getBaseUrl()."/AgentManage/add");
        }else{
            $this->redirect_message('添加失败','error',2,Yii::app()->getBaseUrl()."/AgentManage/add");
        }
    }

    public function actionList(){
        $agentUserModel = new AgentUserModel();
        $attributes=$agentUserModel->selectUser();
        $this->render('list',array('list'=>$attributes));
    }
}