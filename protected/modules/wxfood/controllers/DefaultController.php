<?php

class DefaultController extends Controller{

    public $layout='//layouts/column5';

    public function actionIndex(){
		$this->render('index');
	}

}