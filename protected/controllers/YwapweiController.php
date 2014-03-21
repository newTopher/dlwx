<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-17
 * Time: 下午9:20
 * To change this template use File | Settings | File Templates.
 */
class YwapweiController extends CController{

    public $layout='//layouts/column4';

    public function actionI(){
        $id = Yii::app()->request->getParam('id');
        $openid = Yii::app()->request->getParam('f');
        $uid = Yii::app()->request->getParam('sid');
        if(!empty($id)){
            $this->redirect(Yii::app()->request->baseUrl.'/Order/OrderCard/sid/'.$uid.'/f/'.$openid.'/o/'.$id);
        }else{
            echo '非法请求';
        }
    }



}