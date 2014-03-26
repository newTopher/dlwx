<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-18
 * Time: 下午10:21
 * To change this template use File | Settings | File Templates.
 */
class LiuyanManageController extends Controller{

    public $layout='//layouts/column3';

    public function actionIndex(){
        $liuyanlist = LiuyanModel::getLiuyanByUid(Yii::app()->session['user']->id);
        if(!$liuyanlist){
            $liuyanlist = null;
        }

        $liuyanListModel = new LiuyanListModel();
        $liuyanListModel->uid = Yii::app()->session['user']->id;
        $liulistdata =$liuyanListModel->getAllLiuyanList();

        $this->render('index',array('msg'=>Yii::app()->session['msg'],'liuyanlist'=>$liuyanlist,
            'liulistdata'=>$liulistdata));
        Yii::app()->session['msg'] = '';
    }

    public function actionInsertliuyan(){
        $id = Yii::app()->request->getParam('id');
        $name = Yii::app()->request->getParam('name');
        $index_title = Yii::app()->request->getParam('index_title');
        $index_image = Yii::app()->request->getParam('index_image');
        $description = Yii::app()->request->getParam('description');

        $liuyanModel = new LiuyanModel();
        $liuyanModel->name = $name;
        $liuyanModel->index_title = $index_title;
        $liuyanModel->index_image = $index_image;
        $liuyanModel->description = $description;
        $liuyanModel->uid = Yii::app()->session['user']->id;
        $liuyanlist = LiuyanModel::getLiuyanByUid(Yii::app()->session['user']->id);
        if($liuyanlist){
            $liuyanModel->id = $liuyanlist->id;
            if($liuyanModel->updateLiuyan()){
                Yii::app()->session['msg'] = '留言板设置成功';
                $this->redirect(Yii::app()->request->baseUrl.'/LiuyanManage/Index');
            }else{
                Yii::app()->session['msg'] = '留言板设置失败';
                $this->redirect(Yii::app()->request->baseUrl.'/LiuyanManage/Index');
            }
        }else{
            if($liuyanModel->insertLiuyan()){
                Yii::app()->session['msg'] = '留言板设置成功';
                $this->redirect(Yii::app()->request->baseUrl.'/LiuyanManage/Index');
            }else{
                Yii::app()->session['msg'] = '留言板设置失败';
                $this->redirect(Yii::app()->request->baseUrl.'/LiuyanManage/Index');
            }

        }


    }


}