<?php
class OrderController extends Controller {

public $layout='//layouts/column4';



    public function actionOrderCard(){
        $sid=Yii::app()->request->getParam('sid','');
        $f=Yii::app()->request->getParam('f','');
        $o=Yii::app()->request->getParam('o','');
        $order= new OrdermanageModel();
        $wxUserModel  = new WxuserModel();
        $wxUserModel->uid = $sid;
        $wxUserModel->openid = $f;
        $wxuser = $wxUserModel->getUserByUidAndOpenId();
        if(!$wxuser){
            echo 'error';exit;
        }else{
            $orders = $order->getOrderById($o);
            $this->render('card',array('order'=>$orders));
        }

    }

}