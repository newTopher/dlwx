<?php

class LoginController extends CController{

    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha'=>array(
                'class'=>'CCaptchaAction',
                'backColor'=>0xFFFFFF,
                'maxLength'=>'5',       // 最多生成几个字符
                'minLength'=>'4',       // 最少生成几个字符
                'height'=>'40'
            ),
        );
    }

    public function actionIndex(){
        //代理商用户15293897812@wapwe$verifyCodei
        $model=new LoginForm();
        $errMsg='';
        $email=Yii::app()->request->getParam('email','');
        if(!empty($email)){
            Yii::app()->user->returnUrl = Yii::app()->getBaseUrl()."/User/Home?b=1";
            $model->email=Yii::app()->request->getParam('email','');
            $model->verifyCode=Yii::app()->request->getParam('verifyCode','');
            $model->password=Yii::app()->request->getParam('password','');
            $model->rememberMe=Yii::app()->request->getParam('remember','');
            $User=new UserModel();
            $Users=$User->findByEmail($email);
            $deadline_date=$Users->deadline_date;
            if($deadline_date>time()){
                if($model->validate() && $model->login()){
                    Yii::app()->session['user']=$model->getUser();
                    $this->redirect(Yii::app()->user->returnUrl);
                }else{
                    $errMsg='用户名或者密码错误';
                }
            }else{
                $errMsg='该账户已过期';
            }
        }
        $this->render('login',array('errMsg'=>$errMsg,'model'=>$model));
    }

    public function actionLoginOut(){
        Yii::app()->session->destroy();
        $this->redirect(Yii::app()->request->baseUrl."/Login/Index");
    }

}