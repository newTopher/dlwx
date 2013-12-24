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
        $this->render('home');
    }

}