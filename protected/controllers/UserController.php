<?php
/**
 * Created by IntelliJ IDEA.
 * User: db
 * Date: 13-12-24
 * Time: 下午4:33
 * To change this template use File | Settings | File Templates.
 */
class UserController extends Controller{

    public $layout='//layouts/column3';

    public function actionHome(){
        $userModel = new UserModel();
        $userModel->id = Yii::app()->session['user']->id;
        $userdata = $userModel->getUserById();
        $this->render('home',array('userdata'=>$userdata));
    }

    public function actionSet(){
        $userModel = new UserModel();
        $userModel->id = Yii::app()->session['user']->id;
        $userdata = $userModel->getUserById();
        $this->render('set',array('userdata'=>$userdata));
    }

    public function actionPwdset(){
        $id = Yii::app()->session['user']->id;
        $this->render('pwdset',array('id'=>$id));
    }

    public function actionUpdate(){
        $userModel = new UserModel();
        $userModel->id = Yii::app()->request->getParam('id','');
        $userModel->name = Yii::app()->request->getParam('name','');
        $userModel->tel = Yii::app()->request->getParam('tel','');
        $userModel->trade_id = Yii::app()->request->getParam('trade_id','');
        if($userModel->updateUser()){
            $this->redirect(Yii::app()->getBaseUrl()."/User/set");
        }else{
            $this->redirect(Yii::app()->getBaseUrl()."/User/set");
        }
    }

    public function actionPwdUpdate(){
        $userModel = new UserModel();
        $userModel->id = Yii::app()->request->getParam('id','');
        $opassword = Yii::app()->request->getParam('opassword','');
        $npassword = Yii::app()->request->getParam('npassword','');
        $rnpassword = Yii::app()->request->getParam('rnpassword','');
        $userModel->id = Yii::app()->request->getParam('id','');
        $userdata = $userModel->getUserById();
        if(md5($opassword) != $userdata->password && $npassword != $rnpassword){
            $this->redirect(Yii::app()->getBaseUrl()."/User/set");
        }else{
            $userModel->password = md5($npassword);
            if($userModel->updateUserPwd()){
                $this->redirect(Yii::app()->getBaseUrl()."/User/set");
            }else{
                $this->redirect(Yii::app()->getBaseUrl()."/User/set");
            }
        }
    }

}