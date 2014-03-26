<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-26
 * Time: 下午9:11
 * To change this template use File | Settings | File Templates.
 */
class PhotoManageController extends Controller{

    public $layout='//layouts/column3';

    public function actionIndex(){
        $photolistModel = new PhotolistModel();
        $photolistModel->uid = Yii::app()->session['user']->id;
        $photolist = $photolistModel->getPhotolistByUid();
        if(!$photolist){
            $photolist = null;
        }
        $this->render('index',array('msg'=>Yii::app()->session['msg'],'photolist'=>$photolist));
        Yii::app()->session['msg'] = '';
    }

    public function actionAddphotolist(){
        $this->render('add',array('msg'=>Yii::app()->session['msg']));
        Yii::app()->session['msg'] = '';
    }

    public function actionInsertphotolist(){
        $name = Yii::app()->request->getParam('name');
        $description = Yii::app()->request->getParam('description');
        $index_image = Yii::app()->request->getParam('index_image');
        $photoListModel = new PhotolistModel();
        $photoListModel->name = $name;
        $photoListModel->description = $description;
        $photoListModel->index_image = $index_image;
        $photoListModel->uid = Yii::app()->session['user']->id;
        if($photoListModel->insertPhotolist()){
            Yii::app()->session['msg'] = '创建相册成功';
            $this->redirect(Yii::app()->request->baseUrl.'/PhotoManage/Index');
        }else{
            Yii::app()->session['msg'] = '创建相册失败';
            $this->redirect(Yii::app()->request->baseUrl.'/PhotoManage/Addphotolist');
        }

    }

    public function actionAddphoto(){
        $id = Yii::app()->request->getParam('id');
        $this->render('addphoto',array('id'=>$id));
    }


}