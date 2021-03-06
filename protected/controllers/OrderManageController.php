<?php

class OrderManageController extends Controller{
    public $layout='//layouts/column3';

    public function actionIndex(){
        $OrderManage=new OrdermanageModel();
        $orders=$OrderManage->getAllOrderByUid(Yii::app()->session['user']->id);
        $this->render('index',array('orders'=>$orders));
    }

    public function actionAdd(){
        if($_POST){
            $OrderManage=new OrdermanageModel();
            $KeywordsReplay=new KeywordsReplayModel();
            $KeywordsReplay->keywords = Yii::app()->request->getParam('keywords','');
            $KeywordsReplay->source_id=0;
            $KeywordsReplay->source_type=0;
            $KeywordsReplay->type='OrderCard';
            $KeywordsReplay->preg_type=1;
            $KeywordsReplay->uid=Yii::app()->session['user']->id;
            $OrderManage->kid=$KeywordsReplay->insertKeywords();
            $OrderManage->keywords = Yii::app()->request->getParam('keywords','');
            $OrderManage->uid = Yii::app()->session['user']->id;
            $OrderManage->title =  Yii::app()->request->getParam('title','');
            $OrderManage->image_path =  Yii::app()->request->getParam('image_path','');
            $OrderManage->username =  Yii::app()->request->getParam('image_path','');
            $OrderManage->image_path =  Yii::app()->request->getParam('image_path','');
            $OrderManage->image_path =  Yii::app()->request->getParam('image_path','');
            $OrderManage->introduce =  Yii::app()->request->getParam('introduce','');
            $OrderManage->adress =  Yii::app()->request->getParam('address','');
            $OrderManage->position_x =  Yii::app()->request->getParam('position_x','');
            $OrderManage->position_y =  Yii::app()->request->getParam('position_y','');
            $OrderManage->header_image_path =  Yii::app()->request->getParam('header_image_path','');
            $tel =  Yii::app()->request->getParam('order_tel','');
            $tels= explode("\r\n",$tel);
            $OrderManage->order_tel = json_encode($tels);
            $OrderManage->setname_tel =  Yii::app()->request->getParam('setname_tel','');
            $OrderManage->order_introduce =  Yii::app()->request->getParam('description','');
            $OrderManage->setname_introduce =  Yii::app()->request->getParam('setname_desc','');
            $OrderManage->displayname =  Yii::app()->request->getParam('DisplayName','');
            $OrderManage->displaytelephone =  Yii::app()->request->getParam('DisplayTelephone','');
            $OrderManage->displayreservedate =  Yii::app()->request->getParam('DisplayReserveDate','');
            $OrderManage->displayreservetime = Yii::app()->request->getParam('DisplayReserveTime','');
            $InputName =  Yii::app()->request->getParam('InputName','');
            $InputValue =  Yii::app()->request->getParam('InputValue','');
            $SelectName =  Yii::app()->request->getParam('SelectName','');
            $SelectValue =  Yii::app()->request->getParam('SelectValue','');
            $arr=array('inputname'=>$InputName,'inputvalue'=>$InputValue,'selectname'=>$SelectName,'selectvalue'=>$SelectValue);
            $OrderManage->feedback_info=json_encode($arr);
            if($OrderManage->settingInsert()){
                $this->redirect(Yii::app()->request->baseUrl."/OrderManage/Index");
                $msg="添加成功";
            }else{
                $msg="预订页面未能添加成功";
            }
        }
        $this->render('add');
    }

    public function actionDelete(){
        if(Yii::app()->request->getParam('id')){
            $OrderManage=new OrdermanageModel();
            $KeyWords=new KeywordsReplayModel();
            $OrderManage->id=Yii::app()->request->getParam('id');
            $KeyWords->id=Yii::app()->request->getParam('kid');

            if($OrderManage->deleteOrder() && $KeyWords->delKeyWordsById()){
                $this->redirect(Yii::app()->request->baseUrl.'/OrderManage/Index');
            }else{

            }
        }
    }
    public function actionOrderUpdate(){
        if(Yii::app()->request->getParam('id')){
            $OrderManage=new OrdermanageModel();
            $order = $OrderManage->getOrderById(Yii::app()->request->getParam('id'));
            $KeyWords=new KeywordsReplayModel();
            $KeyWords->id=Yii::app()->request->getParam('kid');
            $keys=$KeyWords->getKeyWordById();
        }
        $this->render('update',array('order'=>$order,'key'=>$keys));
    }

    public function actionOrderList(){
        $oid= Yii::app()->request->getParam('oid');
        $criteria = new CDbCriteria();
        $criteria->order = 'add_time desc';
        $criteria->addCondition('uid='.Yii::app()->session['user']->id);
        $criteria->addCondition('orderid='.$oid);
        $criteria->addCondition('status=1');
        $count = OrderModel::model()->count($criteria);
        $pager = new CPagination($count);
        $pager->pageSize =10;
        $pager->applyLimit($criteria);
        $list = OrderModel::model()->findAll($criteria);
        $this->render('list',array('data'=>$list,'pages'=>$pager));
    }



}


?>