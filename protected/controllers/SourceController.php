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
        if(!empty($singleNewsMsgModel->id)){
            $singleData =  $singleNewsMsgModel->getSingleNewsMsgById();
        }else{
            $singleData = new stdClass();
            $singleData->title='';
            $singleData->index_image='';
            $singleData->description='';
        }
        $allsingleData = $singleNewsMsgModel->getAllSingleNewsMsg();
        $this->render('singlemsg',array('singleData'=>$singleData,'allsingleData'=>$allsingleData));
    }

    public function actionAddMutilMsg(){

        $this->render('mutilmsg');
    }

    public function actionInsertSingleMsg(){
        $singleNewsMsgModel = new SingleNewsMsgModel();
        $singleNewsMsgModel->title = Yii::app()->request->getParam('title','');
        $singleNewsMsgModel->description = Yii::app()->request->getParam('description','');
        $singleNewsMsgModel->url_id = Yii::app()->request->getParam('url_id','');
        $singleNewsMsgModel->uid = Yii::app()->session['user']->id;
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


}