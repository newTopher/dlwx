<?php
class OrderController extends Controller {

public $layout='//layouts/column4';

    public function actionOrderCard(){
        $sid=Yii::app()->request->getParam('sid','');  //userid  from user table
        $f=Yii::app()->request->getParam('f','');      //fansid  from wxuser table
        $o=Yii::app()->request->getParam('o','');      //orderid from order table
        $order= new OrdermanageModel();
        $wxUserModel  = new WxuserModel();
        $wxUserModel->uid = $sid;
        $wxUserModel->openid = $f;
        $wxuser = $wxUserModel->getUserByUidAndOpenId();
        if(!$wxuser){
            echo 'error';exit;
        }else{
            $orders = $order->getOrderById($o);
            $this->render('card',array('order'=>$orders,'sid'=>$sid,'f'=>$f,'o'=>$o));
        }
    }

    public function actionWxOrderInsert(){

        if($_POST){
            $orderList = new OrderModel();
            $orderList->openid= Yii::app()->request->getParam('wechatid');
            $orderList->uid= Yii::app()->request->getParam('aid');
            $orderList->orderid=Yii::app()->request->getParam('rid');
            $orderList->username=  Yii::app()->request->getParam('contact');
            $orderList->dateline=  Yii::app()->request->getParam('dateline');
            $orderList->timepart=  Yii::app()->request->getParam('timepart');
            $orderList->remark= Yii::app()->request->getParam('remark');
            $orderList->tel= Yii::app()->request->getParam('contacttel');
            $orderList->input_data=Yii::app()->request->getParam('fieldsigle');
            $orderList->select_data= Yii::app()->request->getParam('fielddownload');
            $orderList->OrderInsert();
            $result = array('errno'=>0,'msg'=>'123','url'=>Yii::app()->request->baseUrl.'/Order/OrderUpdate/o/'.$orderList->openid.'/u/'.$orderList->uid.'/r/'.$orderList->orderid);
            echo CJSON::encode($result,true);
       }
    }

    public function actionOrderUpdate(){
        $orderlist= new OrderModel();
        $orderManage=new OrdermanageModel();
        if(Yii::app()->request->getParam('u')){
            $openid=Yii::app()->request->getParam('o');
            $uid=Yii::app()->request->getParam('u');
            $orderid=Yii::app()->request->getParam('r');
            $order=$orderlist->OrderSelectById($openid,$uid);
            $list=$orderManage->getOrderById($orderid);
            $this->render('list',array('order'=>$order,'list'=>$list,'o'=>$openid,'u'=>$uid,'r'=>$orderid));
        }else{
        }

    }

    public function actionUpdate(){
        $orderlist= new OrderModel();
        $orderManage=new OrdermanageModel();
        if(Yii::app()->request->getParam('o')){
            $openid = Yii::app()->request->getParam('o');
            $orderlist->id = Yii::app()->request->getParam('e');
            $uid = Yii::app()->request->getParam('u');
            $orderid = Yii::app()->request->getParam('r');
            $order = $orderlist->OrderSelect();
            $list = $orderManage->getOrderById($orderid);
        }
        $this->render('update',array('order'=>$order,'list'=>$list,'o'=>$openid,'u'=>$uid,'r'=>$orderid));
    }


    public function actionDeleteOrder(){
        $autoid = Yii::app()->request->getParam('autoid');
        $orderlist= new OrderModel();
        $orderlist->OrderDelete($autoid);
        $result = array('errno'=>0,'msg'=>123);
        echo CJSON::encode($result,true);
    }

    public function actionChangeOrder(){
        $orderList = new OrderModel();
        $orderList->openid= Yii::app()->request->getParam('wechatid');
        $orderList->uid= Yii::app()->request->getParam('aid');
        $orderList->orderid=Yii::app()->request->getParam('rid');
        $orderList->username=  Yii::app()->request->getParam('contact');
        $orderList->dateline=  Yii::app()->request->getParam('dateline');
        $orderList->timepart=  Yii::app()->request->getParam('timepart');
        $orderList->remark= Yii::app()->request->getParam('remark');
        $orderList->tel= Yii::app()->request->getParam('contacttel');
        $orderList->input_data=Yii::app()->request->getParam('fieldsigle');
        $orderList->select_data= Yii::app()->request->getParam('fielddownload');
        $orderList->OrderUpdate(Yii::app()->request->getParam('autoid'));
        $result = array('errno'=>0,'msg'=>'123','url'=>Yii::app()->request->baseUrl.'/Order/OrderUpdate/o/'.$orderList->uid.'/u/'.$orderList->openid.'/r/'.$orderList->orderid);
        echo CJSON::encode($result,true);
    }
}