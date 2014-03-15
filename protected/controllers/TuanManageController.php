<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-13
 * Time: 上午9:20
 * To change this template use File | Settings | File Templates.
 */
class TuanManageController extends Controller{

    public $layout='//layouts/column3';

    public function actionIndex(){
        $tuanModel = new TuangoodModel();
        $tuanModel->uid = Yii::app()->session['user']->id;
        $tuanlist = $tuanModel->getTuanlistById();
        if(!$tuanlist){
            $tuanlist = null;
        }
        $this->render('index',array('msg'=>Yii::app()->session['msg'],'tuanlist'=>$tuanlist));
        Yii::app()->session['msg'] = '';
    }

    public function actionAddtuan(){
        $this->render('add');
    }

    public function actionInserttuan(){
        $name = Yii::app()->request->getParam('name');
        $price = Yii::app()->request->getParam('price');
        $o_price = Yii::app()->request->getParam('o_price');
        $sum = Yii::app()->request->getParam('sum');
        $every_limit = Yii::app()->request->getParam('every_limit');
        $init_num = Yii::app()->request->getParam('init_num');
        $start_date = Yii::app()->request->getParam('start_date');
        $end_date = Yii::app()->request->getParam('end_date');
        $description = Yii::app()->request->getParam('description');
        $need_know = Yii::app()->request->getParam('need_know');
        $tuan_detail = Yii::app()->request->getParam('tuan_detail');
        $index_image = Yii::app()->request->getParam('index_image');
        $tuangoodModel = new TuangoodModel();
        $tuangoodModel->name = $name;
        $tuangoodModel->uid = Yii::app()->session['user']->id;
        $tuangoodModel->price = $price;
        $tuangoodModel->o_price = $o_price;
        $tuangoodModel->sum = $sum;
        $tuangoodModel->every_limit = $every_limit;
        $tuangoodModel->init_num = $init_num;
        $tuangoodModel->start_date = $start_date;
        $tuangoodModel->end_date = $end_date;
        $tuangoodModel->description = $description;
        $tuangoodModel->need_know = $need_know;
        $tuangoodModel->tuan_detail = $tuan_detail;
        $tuangoodModel->index_image = $index_image;
        if($tuangoodModel->insertTuangood()){
            Yii::app()->session['msg'] = '团购创建成功';
            $this->redirect(Yii::app()->request->baseUrl.'/TuanManage/Index');
        }else{
            Yii::app()->session['msg'] = '团购创建失败';
            $this->redirect(Yii::app()->request->baseUrl.'/TuanManage/Addtuan');
        }
    }

    public function actionViewtuan(){
        $id = Yii::app()->request->getParam('id');
        //$keywords_id = Yii::app()->request->getParam('kid');
        $tuandata = TuangoodModel::getTuangoodById($id);
        $this->render('view',array('tuandata'=>$tuandata));
    }

    public function actionUpdatetuan(){
        $name = Yii::app()->request->getParam('name');
        $id = Yii::app()->request->getParam('id');
        $price = Yii::app()->request->getParam('price');
        $o_price = Yii::app()->request->getParam('o_price');
        $sum = Yii::app()->request->getParam('sum');
        $every_limit = Yii::app()->request->getParam('every_limit');
        $init_num = Yii::app()->request->getParam('init_num');
        $start_date = Yii::app()->request->getParam('start_date');
        $end_date = Yii::app()->request->getParam('end_date');
        $description = Yii::app()->request->getParam('description');
        $need_know = Yii::app()->request->getParam('need_know');
        $tuan_detail = Yii::app()->request->getParam('tuan_detail');
        $index_image = Yii::app()->request->getParam('index_image');
        $tuangoodModel = new TuangoodModel();
        $tuangoodModel->name = $name;
        $tuangoodModel->id = $id;
        $tuangoodModel->price = $price;
        $tuangoodModel->o_price = $o_price;
        $tuangoodModel->sum = $sum;
        $tuangoodModel->every_limit = $every_limit;
        $tuangoodModel->init_num = $init_num;
        $tuangoodModel->start_date = $start_date;
        $tuangoodModel->end_date = $end_date;
        $tuangoodModel->description = $description;
        $tuangoodModel->need_know = $need_know;
        $tuangoodModel->tuan_detail = $tuan_detail;
        $tuangoodModel->index_image = $index_image;
        if($tuangoodModel->updateTuangood()){
            Yii::app()->session['msg'] = '团购修改成功';
            $this->redirect(Yii::app()->request->baseUrl.'/TuanManage/Index');
        }else{
            Yii::app()->session['msg'] = '团购修改失败';
            $this->redirect(Yii::app()->request->baseUrl.'/TuanManage/Viewtuan');
        }
    }

    public function actionGettuanorderlist(){
        $tid = Yii::app()->request->getParam('id');
        $criteria = new CDbCriteria();
        $criteria->addCondition('uid='.Yii::app()->session['user']->id);
        $criteria->addCondition('tid='.$tid);
        $criteria->order = 'add_time desc';
        $count = TuanorderlistModel::model()->count($criteria);
        $pager = new CPagination($count);
        $pager->pageSize =10;
        $pager->applyLimit($criteria);
        $tuanlist = TuanorderlistModel::model()->findAll($criteria);
        $this->render('tuanorderlist',array('tuanorderlist'=>$tuanlist,'pages'=>$pager,'msg'=>Yii::app()->session['msg']));
        Yii::app()->session['msg'] = '';
    }

    public function actionGetorder(){
        $id = Yii::app()->request->getParam('id');
        $data = TuanorderlistModel::getOrder($id);
        $tuanname = TuangoodModel::getTuangoodById($data->tid)->name;
        if($data){
            echo CJSON::encode(array('code'=>0,'data'=>$data->attributes,'tuanname'=>$tuanname));
        }else{
            echo CJSON::encode(array('code'=>-1,'msg'=>'获取订单详情失败'));
        }
    }

    public function actionDoorder(){
        $id = Yii::app()->request->getParam('id');
        $tid = Yii::app()->request->getParam('tid');
        $tuanOrderModel = new TuanorderlistModel();
        $tuanOrderModel->id = $id;
        $tuanOrderModel->status = 1;
        if($tuanOrderModel->updateOrder()){
            Yii::app()->session['msg'] = '订单审核成功';
            $this->redirect(Yii::app()->request->baseUrl.'/TuanManage/Gettuanorderlist/id/'.$tid);
        }else{
            Yii::app()->session['msg'] = '订单审核失败';
            $this->redirect(Yii::app()->request->baseUrl.'/TuanManage/Gettuanorderlist/id/'.$tid);
        }
    }

}