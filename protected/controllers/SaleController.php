<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-7
 * Time: 上午11:03
 * To change this template use File | Settings | File Templates.
 */
class SaleController extends Controller {

    public $layout='//layouts/column4';


    public function actionI(){
        $uid = Yii::app()->request->getParam('sid');
        $openid = Yii::app()->request->getParam('f');
        $id = Yii::app()->request->getParam('s');
        $wxUserModel  = new WxuserModel();
        $wxUserModel->uid = $uid;
        $wxUserModel->openid = $openid;
        $wxuser = $wxUserModel->getUserByUidAndOpenId();
        if(!$wxuser){
            echo 'error';exit;
        }else{
            $date = date ("Y-m-d");
            $saleData = SaleCardModel::getSaleCardById($id);
            $webdata = array();
            $webdata['sid'] = $uid;
            $webdata['openid'] = $openid;
            $webdata['id'] = $id;
            $webdata['saleData'] = $saleData;
            $webdata['sn'] = '';
            $webdata['prize_type_text'] = '';
            $webdata['prize_type'] = '';
            $webdata['is_end'] = 0;
            $webdata['is_get'] = 0;
            $webdata['is_out_times'] = 0;
            $webdata['times'] = 1;
            $webdata['name'] ='';
            if(($saleData->end_date.' 23:59:59') > $date.' 00:00:00'){
                $activityModel = new ActivityRecordModel();
                $activityModel->uid = $uid;
                $activityModel->openid = $openid;
                $activityModel->aid = $id;
                $activityModel->date = $date;
                $activityModel->type = 1;
                if($res = ActivityRecordModel::getRecordByUidAid($uid,$id,$openid,$date,1)){
                    if($res->times < $saleData->user_everyday_times){
                        $activityModel->updateRecordTimes();
                    }
                }else{
                    $activityModel->insertRecord();
                    $res = ActivityRecordModel::getRecordByUidAid($uid,$id,$openid,$date,1);
                }
                $webdata['times'] = $res->times;
                if( $res->times >= $saleData->user_everyday_times){
                    $webdata['is_out_times'] = 1;
                    $webdata['is_get'] = 0;
                }else{
                    if(ActivitySnModel::getUserPrize($uid,$id,$openid,1)){
                        $webdata['is_get'] = 0;
                    }else{
                        $prizeText = CJSON::decode($saleData->prizetext);
                        $allsum = $prizeText['one']['one_nu']+$prizeText['two']['two_nu']+$prizeText['three']['three_nu'];
                        $randnum = rand(0,1000000);
                        $znum = (1000000 * $saleData->chance)/100;
                        if($randnum > 0 && $randnum < $znum){
                            $rand = rand(0,$allsum);
                            if($rand > 0 && $rand < $prizeText['one']['one_nu']){
                                if(ActivitySnModel::getCountsPrizeType($id,$uid,1) < $prizeText['one']['one_nu']){
                                    $webdata['prize_type_text'] = '一等奖';
                                    $webdata['prize_type'] = 1;
                                    $webdata['is_get'] = 1;
                                    $webdata['name'] = $prizeText['one']['one_name'];
                                }else{
                                    $webdata['is_get'] = 0;
                                }
                            }else if($rand > $prizeText['one']['one_nu'] && $rand < $prizeText['one']['one_nu']+$prizeText['two']['two_nu']){
                                if(ActivitySnModel::getCountsPrizeType($id,$uid,2) < $prizeText['two']['two_nu']){
                                    $webdata['prize_type_text'] = '二等奖';
                                    $webdata['prize_type'] = 2;
                                    $webdata['is_get'] = 1;
                                    $webdata['name'] = $prizeText['two']['two_name'];
                                }else{
                                    $webdata['is_get'] = 0;
                                }
                            }else if($rand > $prizeText['one']['one_nu']+$prizeText['two']['two_nu'] && $rand < $allsum){
                                if(ActivitySnModel::getCountsPrizeType($id,$uid,3) < $prizeText['three']['three_nu']){
                                    $webdata['prize_type_text'] = '三等奖';
                                    $webdata['prize_type'] = 3;
                                    $webdata['is_get'] = 1;
                                    $webdata['name'] = $prizeText['three']['three_name'];
                                }else{
                                    $webdata['is_get'] = 0;
                                }
                            }else{
                                $webdata['is_get'] = 0;
                            }
                            if($webdata['is_get'] == 1){
                                $webdata['sn'] = 'WM'.$saleData->id.time();
                                $activitySnModel = new  ActivitySnModel();
                                $activitySnModel->uid = $uid;
                                $activitySnModel->aid = $id;
                                $activitySnModel->openid = $openid;
                                $activitySnModel->sn = $webdata['sn'];
                                $activitySnModel->type = 1;
                                $activitySnModel->prize_type = $webdata['prize_type'];
                                $activitySnModel->insertSn();
                            }
                        }else{
                            $webdata['is_get'] = 0;
                        }
                    }
                }
            }else{
                $webdata['is_end'] = 1;

            }
            $this->render('index',$webdata);
        }
    }

    public function actionSalesetphone(){
        $uid = Yii::app()->request->getParam('sid');
        $openid = Yii::app()->request->getParam('f');
        $id = Yii::app()->request->getParam('s');
        $phone = Yii::app()->request->getParam('tel');
        $wxUserModel  = new WxuserModel();
        $wxUserModel->uid = $uid;
        $wxUserModel->openid = $openid;
        $wxuser = $wxUserModel->getUserByUidAndOpenId();
        if(!$wxuser){
            echo 'error';exit;
        }else{
            $snModel = new ActivitySnModel();
            $snModel->uid = $uid;
            $snModel->aid = $id;
            $snModel->openid = $openid;
            $snModel->phone = $phone;
            $snModel->type = 1;
            $snModel->is_get = 1;
            if($snModel->updateUserPhone()){
                echo CJSON::encode(array('success'=>true,'msg'=>'提交成功,我们将与您取得联系'));
            }else{
                echo CJSON::encode(array('success'=>false,'msg'=>'提交失败,请重试'));
            }
        }
    }


}