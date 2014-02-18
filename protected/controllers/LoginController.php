<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 13-12-10
 * Time: 上午12:40
 * To change this template use File | Settings | File Templates.
 */
class LoginController extends Controller{

    public function actionIndex(){
        //代理商用户15293897812@wapwei
        $model=new LoginForm();
        $errMsg='';
        if(isset($_POST['email'])){

            Yii::app()->user->returnUrl = Yii::app()->getBaseUrl()."/main";
            $model->email=Yii::app()->request->getParam('email','');
            $model->password=Yii::app()->request->getParam('password','');
            $model->rememberMe=Yii::app()->request->getParam('remember','');
            if($model->validate() && $model->login()){
                Yii::app()->session['user']=$model->getUser();
                $this->redirect(Yii::app()->user->returnUrl);
            }else{
                $errMsg='用户名或者密码错误';
            }
        }
        $this->render('login',array('errMsg'=>$errMsg));
    }

}