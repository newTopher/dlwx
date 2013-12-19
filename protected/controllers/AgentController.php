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
        $this->render('adduser');
    }


}