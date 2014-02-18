<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 13-12-23
 * Time: 下午10:01
 * To change this template use File | Settings | File Templates.
 */
class AgentUserCheckController extends Controller{

    public $layout='//layouts/column3';

    public function actionList(){
        $agentWxUserModel = new AgentWxUserModel();
        $agentWxUserData = $agentWxUserModel->getAllAgentWxUser();
        $this->render('list',array('agentWxUserData'=>$agentWxUserData));
    }

    public function actionCheck(){
        $agentWxUserModel = new AgentWxUserModel();
        $data = $agentWxUserModel->getFailReason(Yii::app()->request->getParam('id',''));
        $this->render('check',array('data'=>$data));
    }

    public function actionDocheck(){
        $agentWxUserModel = new AgentWxUserModel();
        $agentWxUserModel->id=Yii::app()->request->getParam('id','');
        $agentWxUserModel->status=Yii::app()->request->getParam('status','');
        $agentWxUserModel->mark=Yii::app()->request->getParam('mark','');
        $puid=Yii::app()->request->getParam('puid','');
        $wx_account=Yii::app()->request->getParam('wx_account','');
        $wx_password=Yii::app()->request->getParam('wx_password','');
        $token=Yii::app()->request->getParam('wx_password','');
        if($agentWxUserModel->updateAgentUserByAdmin()){
            if($agentWxUserModel->status == 1){
                if(!empty($puid)){
                    $userModel = new UserModel();
                    $userModel->puid = $puid;
                    $userModel->email=$wx_account;
                    $userModel->password=md5($wx_password);
                    $userModel->wx_account=$wx_account;
                    $userModel->open_weixin=1;
                    $userModel->wx_token=$this->genSubToken();
                    $userModel->msg_status=0;
                    $userModel->trade_id=1;
                    if($userModel->addUser()){
                        $this->redirect(Yii::app()->getBaseUrl()."/AgentUserCheck/List");
                    }else{
                        $this->redirect(Yii::app()->getBaseUrl()."/AgentUserCheck/Check/id/".$agentWxUserModel->id);
                    }
                }
            }
        }else{
            $this->redirect(Yii::app()->getBaseUrl()."/AgentUserCheck/Check/id/".$agentWxUserModel->id);
        }
    }


}
