<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-2-16
 * Time: 下午1:14
 * To change this template use File | Settings | File Templates.
 */
class ShopsettingController extends Controller{

    public $layout='//layouts/column5';

    public function actionIndex(){
        $this->render('index');
    }
}