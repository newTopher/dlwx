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

    public function actionAddSingleMsg(){
        $singleNewsMsgModel = new SingleNewsMsgModel();
        $singleNewsMsgModel->id = Yii::app()->request->getParam('id','');
        $singleNewsMsgModel->uid = Yii::app()->session['user']->id;
        if(!empty($singleNewsMsgModel->id)){
            $singleData =  $singleNewsMsgModel->getSingleNewsMsgById();
        }else{
            $singleData = new stdClass();
            $singleData->title='';
            $singleData->index_image='';
            $singleData->description='';
        }
        $allsingleData = $singleNewsMsgModel->getAllSingleNewsMsg();
        $selectdata = $this->getAllselect();
        $this->render('singlemsg',array('singleData'=>$singleData,
            'allsingleData'=>$allsingleData,
            'selectdata'=>$selectdata,
            'msg'=>Yii::app()->session['msg']
        ));
        Yii::app()->session['msg'] = '';
    }

    public function actionAddMutilMsg(){
        $this->render('mutilmsg');
    }

    public function actionInsertSingleMsg(){
        $singleNewsMsgModel = new SingleNewsMsgModel();
        $singleNewsMsgModel->title = Yii::app()->request->getParam('title','');
        $singleNewsMsgModel->description = Yii::app()->request->getParam('description','');
        $url_id = Yii::app()->request->getParam('url_id','');
        $text = Yii::app()->request->getParam('text','');
        $singleNewsMsgModel->uid = Yii::app()->session['user']->id;
        if(!empty($url_id)){
            $singleNewsMsgModel->url_id = $url_id;
            $singleNewsMsgModel->text = '';
        }else{
            $singleNewsMsgModel->url_id = null;
            $singleNewsMsgModel->text = $text;
        }
        if(isset($_FILES['index_image'])){
            $indexImageUrl = '';
            $dir = 'wxmsg';
            $name = $_FILES['index_image']['name']; //上传图片原名
            $type = $_FILES['index_image']['type']; //上传图片mime类型
            $tmp_name = $_FILES['index_image']['tmp_name']; //上传图片临时存放位置
            $indexImageUrl = Upload::createImageLink($name, $type, $tmp_name,$dir);
            $singleNewsMsgModel->index_image = $indexImageUrl;
        }
        if($singleNewsMsgModel->addSingleNewsMsg()){
            $this->redirect(Yii::app()->getBaseUrl()."/Source/AddSingleMsg/id/".$singleNewsMsgModel->id);
        }else{
            $this->redirect(Yii::app()->getBaseUrl()."/Source/AddSingleMsg");
        }
    }

    public function actionUrllist(){
        $uid = Yii::app()->session['user']->id;
        $criteria = new CDbCriteria();
        $criteria->order = 'add_time desc';
        $criteria->addCondition('uid='.$uid);
        $count = UrllistModel::model()->count($criteria);
        $pager = new CPagination($count);
        $pager->pageSize =10;
        $pager->applyLimit($criteria);
        $data = UrllistModel::model()->findAll($criteria);
        $this->render('urllist',array('data'=>$data,'pages'=>$pager,'msg'=>Yii::app()->session['msg']));
        Yii::app()->session['msg'] = '';
    }

    public function actionAddurl(){
        $this->render('addurl');
    }

    public function actionInserturl(){
        $urlModel = new UrllistModel();
        $urlModel->uid = Yii::app()->session['user']->id;
        $urlModel->url = trim(Yii::app()->request->getParam('url'));
        if($urlModel->insertUrl()){
            Yii::app()->session['msg'] = '添加成功';
            $this->redirect(Yii::app()->getBaseUrl()."/Source/Urllist");
        }else{
            Yii::app()->session['msg'] = '添加失败';
            $this->redirect(Yii::app()->getBaseUrl()."/Source/Urllist");
        }
    }

    public function actionSourcedel(){
        $singleModel = new SingleNewsMsgModel();
        $singleModel->id = Yii::app()->request->getParam('id');
        $singleModel->uid = Yii::app()->session['user']->id;
        if($singleModel->delsingle()){
            Yii::app()->session['msg'] = '删除成功';
            $this->redirect(Yii::app()->getBaseUrl()."/Source/AddSingleMsg");
        }else{
            Yii::app()->session['msg'] = '删除失败';
            $this->redirect(Yii::app()->getBaseUrl()."/Source/AddSingleMsg");
        }
    }

    public function actionDel(){
        $urlModel = new UrllistModel();
        $urlModel->id = Yii::app()->request->getParam('id');
        if($urlModel->delurl()){
            Yii::app()->session['msg'] = '删除成功';
            $this->redirect(Yii::app()->getBaseUrl()."/Source/Urllist");
        }else{
            Yii::app()->session['msg'] = '删除失败';
            $this->redirect(Yii::app()->getBaseUrl()."/Source/Urllist");
        }
    }


}