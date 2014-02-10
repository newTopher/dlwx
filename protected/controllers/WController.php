<?php
/**
 * Created by IntelliJ IDEA.
 * User: db
 * Date: 14-2-10
 * Time: 下午3:14
 * To change this template use File | Settings | File Templates.
 */
class Wcontroller extends Controller {

    public function actionI(){
        Yii::app()->setTheme('400');
        $this->render('index');
    }

}