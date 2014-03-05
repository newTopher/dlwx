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
        if(Yii::app()->session['user']->level==1){
            $puid =  0;
        }else{
            $puid=Yii::app()->session['user']->id;
        }
        $this->render('adduser',array('puid'=>$puid));
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
        $charge_note=new AgentChargeNoteModel();
        $list=$agent_user->AgentUserView();
        if($_POST){
            $charge_note->status=0;
            $charge_note->money= Yii::app()->request->getParam('money','');
            $charge_note->time=Yii::app()->request->getParam('date','');
            $charge_note->uid=Yii::app()->session['user']->id;
            $charge_note->mobilephone=Yii::app()->session['user']->mobilephone;
            $charge_note->pay_way=Yii::app()->request->getParam('pay_way','');
            $charge_note->pay_num=Yii::app()->request->getParam('pay_num','');
            $charge_note->email=Yii::app()->session['user']->email;
            $charge_note->agent_name=Yii::app()->session['user']->agent_name;
            if(empty($charge_note->pay_way)){
                $msg="支付方式不能为空，请重新提交";
            }elseif(empty( $charge_note->time)){
                $msg="支付时间不能为空，请重新提交";
            }elseif(empty( $charge_note->money)){
                $msg="支付金额不能为空，请重新提交";
            }elseif(empty( $charge_note->pay_num)){
                $msg="交易号不能为空，请重新提交";
            }else{
                if($charge_note->NoteInsert()){
                    $msg="提交成功，请等待审核";
                }else{
                    $msg = "未能提交成功，请重新提交";
                }
            }
        }else{
            $msg ="";
        }
        $this->render('addMoney',array('list'=>$list,'msg'=>$msg));
    }

    public function actionAddWexinAccount(){
        $User= new UserModel();
        if(Yii::app()->session['user']->level==1){
            $User->wx_account=Yii::app()->request->getParam('wx_account','');
            $User->email=Yii::app()->request->getParam('wx_account','');
            if($User->findByEmail($User->email)){
                $msg="该用户已存在";
            }else{
                $User->password=md5(Yii::app()->request->getParam('wx_password',''));
                $User->trade_id=Yii::app()->request->getParam('trade_id','');
                $User->wx_token=md5($User->wx_account);
                $User->puid=0;
                if($User->addUser()){
                    $msg='提交成功';
                }else{
                    $msg='提交失败，请重新提交';
                }
            }
            $this->render('adduser',array('msg'=>$msg));
        }else{
            $email= Yii::app()->request->getParam('wx_account','');
            if($User->findByEmail($email)){
                $msg="该用户已存在";
            }else{
                $agentWxUserModel = new AgentWxUserModel();
                $agentWxUserModel->wx_account=Yii::app()->request->getParam('wx_account','');
                $agentWxUserModel->wx_password=Yii::app()->request->getParam('wx_password','');
                $agentWxUserModel->trade_id=Yii::app()->request->getParam('trade_id','');
                $agentWxUserModel->token=md5($agentWxUserModel->wx_account);
                $agentWxUserModel->puid=Yii::app()->request->getParam('puid','');
                if($agentWxUserModel->insertWxAccount()){
                    $msg='提交成功，请等待审核';
                }else{
                    $msg='提交失败，请重新提交';
                }
            }
            $this->render('adduser',array('msg'=>$msg));
        }
    }

    public function actionAddtempUser(){
        $User= new UserModel();
        $email= Yii::app()->request->getParam('username','');
        if($User->findByEmail($email)){
           $Msg= "用户名已存在";
           $this->redirect("http://www.wapwei.com/site/reg1.php?Msg=$Msg");
        }else{
        }else{            $User->email=$email;
            $User->password=md5(Yii::app()->request->getParam('password',''));
            $User->tel=Yii::app()->request->getParam('phone','');
            $User->trade_id=Yii::app()->request->getParam('trade_id','');
            $User->qq=Yii::app()->request->getParam('qq','');
            $User->wx_token=md5($User->email);
            $User->trade_id=1;
            $User->template_id=rand(0,5);
            $User->puid=0;
            $User->deadline_date=time()+7*3600*24;
            if($User->addUser()){
                $url='/login/index/email/'.$User->email.'/password/'.Yii::app()->request->getParam('password','');
               echo "<script>window.location.href ='".$url."';</script>";
            }else{
                echo "<script>window.location.href='http://www.wapwei.com/site/reg1.php';</script>";
            }
        }
    }

    public function actionApplyList(){
        $puid = Yii::app()->session['user']->id;
        $agentWxUserModel = new AgentWxUserModel();
        $agentWxUserData = $agentWxUserModel->getAgentWxUser($puid);
        $this->render('applylist',array('agentWxUserData'=>$agentWxUserData));
    }

    public function actionUserList(){
        $puid = Yii::app()->session['user']->id;
        $agentWxUserModel=new UserModel();
        $list=$agentWxUserModel->findUserByUid($puid);
        $this->render('userlist',array('list'=>$list));
    }

    public function actionUserEdit(){
        if($id=Yii::app()->request->getParam('id','')){
            $agentWxUserModel=new UserModel();
            $list=$agentWxUserModel->findUserByid($id);
        }else{
            $list=array();
        }
        $this->render('edit',array('list'=>$list));
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