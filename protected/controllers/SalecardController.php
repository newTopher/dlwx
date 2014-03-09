<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-9
 * Time: 下午5:53
 * To change this template use File | Settings | File Templates.
 */
class SalecardController extends Controller{

    public $layout='//layouts/column3';

    public function actionIndex(){
        $this->render('index');
    }

    public function actionAddsale(){
        $this->render('add',array('msg'=>Yii::app()->session['msg']));
        Yii::app()->session['msg'] = '关键词已存在';
    }

    public function actionInsertsale(){
        $name = Yii::app()->request->getParam('name');
        $keywords = Yii::app()->request->getParam('keywords');
        $chance = Yii::app()->request->getParam('chance');
        $index_title = Yii::app()->request->getParam('index_title');
        $description = Yii::app()->request->getParam('description');
        $index_image = Yii::app()->request->getParam('index_image');
        $one_name = Yii::app()->request->getParam('one_name');
        $two_name = Yii::app()->request->getParam('two_name');
        $three_name = Yii::app()->request->getParam('three_name');
        $one_nu = Yii::app()->request->getParam('one_nu');
        $two_nu = Yii::app()->request->getParam('two_nu');
        $three_nu = Yii::app()->request->getParam('three_nu');
        $saleCardModel = new SaleCardModel();
        $keywordsModel = new KeywordsReplayModel();
        $keywordsModel->uid = Yii::app()->session['user']->id;
        $keywordsModel->keywords = $keywords;
        $keywordsModel->source_id = 0;
        $keywordsModel->source_type = 0;
        $keywordsModel->preg_type = 1;
        $keywordsModel->type = 'SaleCard';
        if($keywordsModel->getDataKeyWordsByUidAndSale()){
            Yii::app()->session['msg'] = '关键词已存在';
            $this->redirect(Yii::app()->request->baseUrl.'/Salecard/Addsale');
        }else{
            $keywordsModel->insertKeywordss();
        }

        $saleCardModel->uid = Yii::app()->session['user']->id;
        $saleCardModel->name = $name;
        $saleCardModel->chance = $chance;
        $saleCardModel->index_title = $index_title;
        $saleCardModel->description = $description;
        $saleCardModel->index_image = $index_image;
        if($saleCardModel->insertSale()){

        }else{
            Yii::app()->session['msg'] = '创建活动失败';
            $this->redirect(Yii::app()->request->baseUrl.'/Salecard/Addsale');
        }
    }

}