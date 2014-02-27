<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-2-27
 * Time: 下午11:19
 * To change this template use File | Settings | File Templates.
 */
class ChannelManageController extends Controller{

    public $layout='//layouts/column3';

    public function actionIndex(){
        $this->render('index');
    }

}