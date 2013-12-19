<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 13-12-16
 * Time: 下午11:25
 * To change this template use File | Settings | File Templates.
 */
class AccountController extends Controller{

    public $layout='//layouts/column3';

    public function actionSet(){

        $this->render('set');
    }

    public function actionPwdset(){
        $this->render('pwdset');
    }


}