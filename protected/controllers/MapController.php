<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-2-16
 * Time: 下午2:34
 * To change this template use File | Settings | File Templates.
 */
class MapController extends Controller {

    public $layout='//layouts/column4';

    public function actionIndex(){
        $this->render('baidu');
    }
}