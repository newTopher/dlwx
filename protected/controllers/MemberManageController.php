<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-7
 * Time: 上午11:27
 * To change this template use File | Settings | File Templates.
 */
class MemberManageController extends Controller{

    public $layout='//layouts/column3';

    public function actionBase(){
        $memberCardModel = new MemberCardModel();
        $memberCardModel->uid =  Yii::app()->session['user']->id;
        $keywordsModel = new KeywordsReplayModel();
        $keywordsModel->uid = Yii::app()->session['user']->id;
        $keywordsModel->type = 'MemberCard';
        $keydata = $keywordsModel->getDataKeyWordsByUidAndMember();
        $data = $memberCardModel->getDataMemberCardByUid();
        if(!$data){
            $data = null;
        }
        if(!$keydata){
            $keydata = null;
        }
        $this->render('base',array('data'=>$data,'keydata'=>$keydata));
    }


    /*
     * 商家设置
     */
    public function actionCusset(){
        $cust_name = Yii::app()->request->getParam('cust_name');
        $tel = Yii::app()->request->getParam('tel');
        $address = Yii::app()->request->getParam('address');
        $keywords = Yii::app()->request->getParam('keywords');
        $index_title = Yii::app()->request->getParam('index_title');
        $description = Yii::app()->request->getParam('description');
        $position_x = Yii::app()->request->getParam('position_x');
        $position_y = Yii::app()->request->getParam('position_y');
        $index_image = Yii::app()->request->getParam('index_image');
        $memberCardModel = new MemberCardModel();
        $keywordsModel = new KeywordsReplayModel();
        $keywordsModel->uid = Yii::app()->session['user']->id;
        $keywordsModel->keywords = $keywords;
        $keywordsModel->source_id = 0;
        $keywordsModel->source_type = 0;
        $keywordsModel->preg_type = 1;
        $keywordsModel->type = 'MemberCard';
        if($keywordsModel->getKeyWordsByUidAndMember()){
            $keywordsModel->updateKeyWordsByUidAndMember();
        }else{
            $keywordsModel->insertKeywords();
        }

        $memberCardModel->uid = Yii::app()->session['user']->id;
        $memberCardModel->cust_name = $cust_name;
        $memberCardModel->tel = $tel;
        $memberCardModel->address = $address;
        $memberCardModel->index_title = $index_title;
        $memberCardModel->description = $description;
        $memberCardModel->position_x = $position_x;
        $memberCardModel->position_y = $position_y;
        $memberCardModel->index_image = $index_image;
        if($memberCardModel->getMemberCardByUid()){
            if($memberCardModel->updateMemberCard()){
                $this->redirect(Yii::app()->request->baseUrl.'/MemberManage/Base');
            }else{
                $this->redirect(Yii::app()->request->baseUrl.'/MemberManage/Base');
            }
        }else{
            if($memberCardModel->insertMemberCard()){
                $this->redirect(Yii::app()->request->baseUrl.'/MemberManage/Base');
            }else{
                $this->redirect(Yii::app()->request->baseUrl.'/MemberManage/Base');
            }
        }
    }




}