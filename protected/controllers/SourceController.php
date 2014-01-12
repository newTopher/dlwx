<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-1-10
 * Time: 上午12:36
 * To change this template use File | Settings | File Templates.
 */
class SourceController extends Controller{

    public $layout='//layouts/column3';

    public function actionBase(){
        $this->render('base');
    }


}