<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-9
 * Time: 下午5:53
 * To change this template use File | Settings | File Templates.
 */
class ZhuancardController extends Controller{

    public $layout='//layouts/column3';

    public function actionIndex(){
        $zhuanModel = new ZhuanCardModel();
        $zhuanModel->uid = Yii::app()->session['user']->id;
        $zhuanlist = $zhuanModel->getZhuanlistByUid();
        if(!$zhuanlist){
            $zhuanlist = null;
        }
        $this->render('index',array('msg'=>Yii::app()->session['msg'],'zhuanlist'=>$zhuanlist));
        Yii::app()->session['msg'] = '';
    }

    public function actionAddzhuan(){
        $this->render('add',array('msg'=>Yii::app()->session['msg']));
        Yii::app()->session['msg'] = '';
    }

    public function actionInsertzhuan(){
        $name = Yii::app()->request->getParam('name');
        $keywords = Yii::app()->request->getParam('keywords');
        $chance = Yii::app()->request->getParam('chance');
        $start_date = Yii::app()->request->getParam('start_date');
        $end_date = Yii::app()->request->getParam('end_date');
        $index_title = Yii::app()->request->getParam('index_title');
        $description = Yii::app()->request->getParam('description');
        $index_image = Yii::app()->request->getParam('index_image');
        $one_name = Yii::app()->request->getParam('one_name');
        $two_name = Yii::app()->request->getParam('two_name');
        $three_name = Yii::app()->request->getParam('three_name');
        $one_no = Yii::app()->request->getParam('one_no');
        $two_no = Yii::app()->request->getParam('two_no');
        $three_no = Yii::app()->request->getParam('three_no');
        $user_everyday_times = Yii::app()->request->getParam('user_everyday_times');
        $zhuanCardModel = new ZhuanCardModel();
        $keywordsModel = new KeywordsReplayModel();
        $keywordsModel->uid = Yii::app()->session['user']->id;
        $keywordsModel->keywords = $keywords;
        $keywordsModel->source_id = 0;
        $keywordsModel->source_type = 0;
        $keywordsModel->preg_type = 1;
        $keywordsModel->type = 'ZhuanCard';
        if($keywordsModel->getDataKeyWordsByUidAndSale()){
            Yii::app()->session['msg'] = '关键词已存在';
            $this->redirect(Yii::app()->request->baseUrl.'/Salecard/Addsale');
        }else{
            $k_id = $keywordsModel->insertKeywords();
        }

        $zhuanCardModel->uid = Yii::app()->session['user']->id;
        $zhuanCardModel->name = $name;
        $zhuanCardModel->chance = $chance;
        $zhuanCardModel->start_date = $start_date;
        $zhuanCardModel->end_date = $end_date;
        $zhuanCardModel->user_everyday_times = $user_everyday_times;
        $zhuanCardModel->index_title = $index_title;
        $zhuanCardModel->description = $description;
        $zhuanCardModel->index_image = $index_image;
        $zhuanCardModel->keywords_id = $k_id;
        $zhuanCardModel->keywords = $keywords;
        $zhuanCardModel->prizetext = json_encode(array(
            'one'=>array('one_name'=>$one_name,'one_nu'=>$one_no),
            'two'=>array('two_name'=>$two_name,'two_nu'=>$two_no),
            'three'=>array('three_name'=>$three_name,'three_nu'=>$three_no)
        ));
        if($zhuanCardModel->insertZhuan()){
            Yii::app()->session['msg'] = '创建活动成功';
            $this->redirect(Yii::app()->request->baseUrl.'/Zhuancard/Index');
        }else{
            Yii::app()->session['msg'] = '创建活动失败';
            $this->redirect(Yii::app()->request->baseUrl.'/Zhuancard/Addzhuan');
        }
    }

    public function actionGetprizeuser(){
        $id = Yii::app()->request->getParam('id');
        $criteria = new CDbCriteria();
        $criteria->order = 'add_time desc';
        $criteria->addCondition('uid='.Yii::app()->session['user']->id);
        $criteria->addCondition('aid='.$id);
        $criteria->addCondition('type=3');
        $count = ActivitySnModel::model()->count($criteria);
        $pager = new CPagination($count);
        $pager->pageSize =10;
        $pager->applyLimit($criteria);
        $data = ActivitySnModel::model()->findAll($criteria);
        $this->render('prizeuser',array('data'=>$data,'pages'=>$pager));
    }

    public function actionViewzhuan(){
        $id = Yii::app()->request->getParam('id');
        //$keywords_id = Yii::app()->request->getParam('kid');
        $zhuandata = ZhuanCardModel::getZhuanCardById($id);
        $this->render('view',array('zhuandata'=>$zhuandata));
    }

    public function actionUpdatezhuan(){
        $id = Yii::app()->request->getParam('id');
        $keywords_id = Yii::app()->request->getParam('k_id');
        $name = Yii::app()->request->getParam('name');
        $keywords = Yii::app()->request->getParam('keywords');
        $chance = Yii::app()->request->getParam('chance');
        $start_date = Yii::app()->request->getParam('start_date');
        $end_date = Yii::app()->request->getParam('end_date');
        $index_title = Yii::app()->request->getParam('index_title');
        $description = Yii::app()->request->getParam('description');
        $index_image = Yii::app()->request->getParam('index_image');
        $one_name = Yii::app()->request->getParam('one_name');
        $two_name = Yii::app()->request->getParam('two_name');
        $three_name = Yii::app()->request->getParam('three_name');
        $one_no = Yii::app()->request->getParam('one_no');
        $two_no = Yii::app()->request->getParam('two_no');
        $three_no = Yii::app()->request->getParam('three_no');
        $user_everyday_times = Yii::app()->request->getParam('user_everyday_times');
        $zhuanCardModel = new ZhuanCardModel();
        $keywordsModel = new KeywordsReplayModel();
        $keywordsModel->id = $keywords_id;
        $keywordsModel->type = 1;
        $keywordsModel->uid = Yii::app()->session['user']->id;
        $keywordsModel->keywords = $keywords;
        if($keywordsModel->getDataKeyWordsByUidAndSale()){
            Yii::app()->session['msg'] = '关键词已存在';
            $this->redirect(Yii::app()->request->baseUrl.'/Zhuancard/Viewzhuan');
        }else{
            $keywordsModel->updateKeywords();
        }

        $zhuanCardModel->name = $name;
        $zhuanCardModel->id = $id;
        $zhuanCardModel->chance = $chance;
        $zhuanCardModel->start_date = $start_date;
        $zhuanCardModel->end_date = $end_date;
        $zhuanCardModel->user_everyday_times = $user_everyday_times;
        $zhuanCardModel->index_title = $index_title;
        $zhuanCardModel->description = $description;
        $zhuanCardModel->index_image = $index_image;
        $zhuanCardModel->keywords = $keywords;
        $zhuanCardModel->prizetext = json_encode(array(
            'one'=>array('one_name'=>$one_name,'one_nu'=>$one_no),
            'two'=>array('two_name'=>$two_name,'two_nu'=>$two_no),
            'three'=>array('three_name'=>$three_name,'three_nu'=>$three_no)
        ));
        if($zhuanCardModel->updateZhuan()){
            Yii::app()->session['msg'] = '修改活动成功';
            $this->redirect(Yii::app()->request->baseUrl.'/Zhuancard/Index');
        }else{
            Yii::app()->session['msg'] = '修改活动失败';
            $this->redirect(Yii::app()->request->baseUrl.'/Zhuancard/AddZhuan');
        }
    }


}