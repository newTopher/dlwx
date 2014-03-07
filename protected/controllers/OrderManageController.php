<?php

class OrderManageController extends Controller{
    public $layout='//layouts/column3';

    public function actionIndex(){
       $this->render('index');
    }

    public function actionAdd(){
        $this->render('add');
    }

}


?>