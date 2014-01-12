<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-1-10
 * Time: 上午12:21
 * To change this template use File | Settings | File Templates.
 */
class MsgController extends Controller{

    public $layout='//layouts/column3';

    public function actionIndex(){
        $this->render('index');
    }

}