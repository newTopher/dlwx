<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-1-9
 * Time: 下午10:37
 * To change this template use File | Settings | File Templates.
 */
class AutoReplayController extends Controller{

    public $layout='//layouts/column3';

    public function actionBase(){
        $firstModel = new FirstReplayModel();
        $firstModel->uid =  Yii::app()->session['user']->id;
        $firstData =  $firstModel->getFristByUid();
        $nouseModel = new NouseReplayModel();
        $nouseModel->uid =  Yii::app()->session['user']->id;
        $nouseData =  $nouseModel->getFristByUid();
        if(!$firstData){
            $firstData = null;
        }
        if(!$nouseData){
            $nouseData = null;
        }
        $keywordsModel = new KeywordsReplayModel();
        $keywordsModel->uid = Yii::app()->session['user']->id;
        $keywordsData = $keywordsModel->getKeyWordsByUid();
        $this->render('base',array('firstData'=>$firstData,'nouseData'=>$nouseData,'keywordsData'=>$keywordsData));
    }

    public function actionAddKeyword(){
        $type = Yii::app()->request->getParam('source_type');
        $text = Yii::app()->request->getParam('text');
        $source_id = Yii::app()->request->getParam('source_id');
        $firstModel = new FirstReplayModel();
        $firstModel->uid =  Yii::app()->session['user']->id;
        $firstData =  $firstModel->getFristByUid();
        $firstModel->type = $type;
        $firstModel->uid = Yii::app()->session['user']->id;
        if(!$firstData){
            if($type == 1){
                $firstModel->source_id = null;
                $firstModel->text = $text;
            }else if($type == 2){
                $firstModel->source_id = $source_id;
                $firstModel->text = null;
            }
            if($insertid = $firstModel->addFirstReplay()){
                $this->redirect(Yii::app()->request->baseUrl.'/AutoReplay/Base');
            }else{
                $this->redirect(Yii::app()->request->baseUrl.'/AutoReplay/AddKeyword');
            }
        }else{
            $firstModel->id = $firstData->id;
            if($type == 1){
                $firstModel->source_id = null;
                $firstModel->text = $text;
            }else if($type == 2){
                $firstModel->source_id = $source_id;
                $firstModel->text = null;
            }
            if($insertid = $firstModel->updateFirstReplay()){
                $this->redirect(Yii::app()->request->baseUrl.'/AutoReplay/Base');
            }else{
                $this->redirect(Yii::app()->request->baseUrl.'/AutoReplay/AddKeyword');
            }
        }
    }

    public function actionAddNouseKeyword(){
        $type = Yii::app()->request->getParam('source_type');
        $text = Yii::app()->request->getParam('text');
        $source_id = Yii::app()->request->getParam('source_id');
        $firstModel = new NouseReplayModel();
        $firstModel->uid =  Yii::app()->session['user']->id;
        $firstData =  $firstModel->getFristByUid();
        $firstModel->type = $type;
        $firstModel->uid = Yii::app()->session['user']->id;
        if(!$firstData){
            if($type == 1){
                $firstModel->source_id = null;
                $firstModel->text = $text;
            }else if($type == 2){
                $firstModel->source_id = $source_id;
                $firstModel->text = null;
            }
            if($insertid = $firstModel->addFirstReplay()){
                $this->redirect(Yii::app()->request->baseUrl.'/AutoReplay/Base');
            }else{
                $this->redirect(Yii::app()->request->baseUrl.'/AutoReplay/AddKeyword');
            }
        }else{
            $firstModel->id = $firstData->id;
            if($type == 1){
                $firstModel->source_id = null;
                $firstModel->text = $text;
            }else if($type == 2){
                $firstModel->source_id = $source_id;
                $firstModel->text = null;
            }
            if($insertid = $firstModel->updateFirstReplay()){
                $this->redirect(Yii::app()->request->baseUrl.'/AutoReplay/Base');
            }else{
                $this->redirect(Yii::app()->request->baseUrl.'/AutoReplay/AddKeyword');
            }
        }
    }

    public function actionAddkeywords(){
        $this->render('addkeyword');
    }

    public function actionInsertKeyword(){
        $type = Yii::app()->request->getParam('source_type');
        $text = Yii::app()->request->getParam('text');
        $source_id = Yii::app()->request->getParam('source_id');
        $source_type = Yii::app()->request->getParam('source_type');
        $preg_type = Yii::app()->request->getParam('preg_type');
        $keywords = Yii::app()->request->getParam('keywords');
        $keywordsModel = new KeywordsReplayModel();
        $keywordsModel->uid =  Yii::app()->session['user']->id;
        $keywordsModel->type = 1;
        $keywordsModel->preg_type = $preg_type;
        $keywordsModel->source_type = $source_type;
        $keywordsModel->keywords = $keywords;
        if($type == 1){
            $keywordsModel->source_id = null;
            $keywordsModel->text = $text;
        }else if($type == 2){
            $keywordsModel->source_id = $source_id;
            $keywordsModel->text = null;
        }
        if($keywordsModel->insertKeywords()){
            $this->redirect(Yii::app()->request->baseUrl.'/AutoReplay/Base');
        }else{
            $this->redirect(Yii::app()->request->baseUrl.'/AutoReplay/Addkeywords');
        }
    }

    public function actionDelKeyword(){
        $id = Yii::app()->request->getParam('id');
        if(!empty($id)){
            $keywordsModel = new KeywordsReplayModel();
            $keywordsModel->id = $id;
            if($keywordsModel->delKeyWordsById()){
                $this->redirect(Yii::app()->request->baseUrl.'/AutoReplay/Base');
            }else{
                $this->redirect(Yii::app()->request->baseUrl.'/AutoReplay/Base');
            }
        }
    }


}