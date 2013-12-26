<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 13-12-26
 * Time: 下午11:24
 * To change this template use File | Settings | File Templates.
 */
class WeixinController extends Controller{

    public $layout='//layouts/column3';

    public function actionBase(){
        $this->render('base',array());
    }

}