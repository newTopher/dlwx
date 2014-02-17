<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-2-15
 * Time: 下午8:13
 * To change this template use File | Settings | File Templates.
 */
class OrderManageController extends Controller{

    public $layout='//layouts/column5';

    public function actionIndex(){
        $this->render('index');
    }
}