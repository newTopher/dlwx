<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-1-9
 * Time: 下午10:37
 * To change this template use File | Settings | File Templates.
 */
class AutoReplayController extends Controller{

    public $layout='//layouts/column3';

    public function actionBase(){
        $this->render('base');
    }

    public function actionAddKeyword(){
        $this->render('addkeyword');
    }

    public function actionKeywordInsert(){
        $this->render('addkeyword');
    }

}