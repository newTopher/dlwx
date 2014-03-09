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

    public function actionUpdatecard(){
        $memberCardModel = new MemberCardModel();
        $memberCardModel->uid =  Yii::app()->session['user']->id;
        $memberCardModel->vip_name =  Yii::app()->request->getParam('vip_name');
        $memberCardModel->vip_logo =  Yii::app()->request->getParam('vip_logo');
        $memberCardModel->vip_style =  Yii::app()->request->getParam('vip_style');
        if($memberCardModel->getMemberCardByUid()){
            if($memberCardModel->updateVipMemberCard()){
                $this->redirect(Yii::app()->request->baseUrl.'/MemberManage/Cardset');
            }else{
                $this->redirect(Yii::app()->request->baseUrl.'/MemberManage/Cardset');
            }
        }else{
            if($memberCardModel->insertMemberCard()){
                $this->redirect(Yii::app()->request->baseUrl.'/MemberManage/Cardset');
            }else{
                $this->redirect(Yii::app()->request->baseUrl.'/MemberManage/Cardset');
            }
        }

    }

    public function actionCardset(){
        $memberCardModel = new MemberCardModel();
        $memberCardModel->uid =  Yii::app()->session['user']->id;
        $data = $memberCardModel->getDataMemberCardByUid();
        if(!$data){
            $data = null;
        }
        $this->render('cardset',array('data'=>$data));
    }

    public function actionMemberlist(){
        $uid =  Yii::app()->session['user']->id;
        $criteria = new CDbCriteria();
        $criteria->order = 'add_time desc';
        $criteria->addCondition('uid='.$uid);
        $count = ViplistModel::model()->count($criteria);

        $pager = new CPagination($count);
        $pager->pageSize =10;
        $pager->applyLimit($criteria);
        $data = ViplistModel::model()->findAll($criteria);
        $this->render('memberlist',array('data'=>$data,'pages'=>$pager));
    }

    public function actionGetmember(){
        $id = Yii::app()->request->getParam('id');
        $vipModel = new ViplistModel();
        $vipModel->id = $id;
        $data = $vipModel->getVipById();
        if($data){
            echo CJSON::encode(array('code'=>0,'data'=>$data->attributes));
        }else{
            echo CJSON::encode(array('code'=>-1,'msg'=>'获取会员资料失败'));
        }
    }




}