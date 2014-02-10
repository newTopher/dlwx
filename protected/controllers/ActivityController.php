<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-1-18
 * Time: 上午12:12
 * To change this template use File | Settings | File Templates.
 */
class ActivityController extends Controller{

    public $layout='//layouts/column3';

    public function actionIndex(){
        $this->render('index');
    }

    public function actionCreate(){
        $this->render('create');
    }
}