<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-7
 * Time: 上午11:03
 * To change this template use File | Settings | File Templates.
 */
class GuaguaController extends CController {

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
            $guaguaData = GuaguaCardModel::getGuaguaCardById($id);
            $webdata = array();
            $webdata['sid'] = $uid;
            $webdata['openid'] = $openid;
            $webdata['times'] = 1;
            $webdata['id'] = $id;
            $webdata['guaguaData'] = $guaguaData;
            $webdata['sn'] = '';
            $webdata['prize_type_text'] = '';
            $webdata['prize_type'] = '';
            $webdata['is_end'] = 0;
            $webdata['is_get'] = 0;
            $webdata['is_out_times'] = 0;
            $webdata['name'] ='';
            if(($guaguaData->end_date.' 23:59:59') > $date.' 00:00:00'){
                $activityModel = new ActivityRecordModel();
                $activityModel->uid = $uid;
                $activityModel->openid = $openid;
                $activityModel->aid = $id;
                $activityModel->date = $date;
                $activityModel->type = 2;
                if($res = ActivityRecordModel::getRecordByUidAid($uid,$id,$openid,$date,2)){
                    if($res->times < $guaguaData->user_everyday_times){
                        $activityModel->updateRecordTimes();
                    }
                }else{
                    $activityModel->insertRecord();
                    $res = ActivityRecordModel::getRecordByUidAid($uid,$id,$openid,$date,2);
                }
                $webdata['times'] = $res->times;
                if( $res->times >= $guaguaData->user_everyday_times){
                    $webdata['is_out_times'] = 1;
                    $webdata['is_get'] = 0;
                }else{
                    if(ActivitySnModel::getUserPrize($uid,$id,$openid,2)){
                        $webdata['is_get'] = 0;
                    }else{
                        $prizeText = CJSON::decode($guaguaData->prizetext);
                        $allsum = $prizeText['one']['one_nu']+$prizeText['two']['two_nu']+$prizeText['three']['three_nu'];
                        $randnum = rand(0,1000000);
                        $znum = (1000000 * $guaguaData->chance)/100;
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
                                $webdata['sn'] = 'WM'.$guaguaData->id.time();
                                $activitySnModel = new  ActivitySnModel();
                                $activitySnModel->uid = $uid;
                                $activitySnModel->aid = $id;
                                $activitySnModel->openid = $openid;
                                $activitySnModel->sn = $webdata['sn'];
                                $activitySnModel->type = 2;
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

    public function actionGuaguasetphone(){
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
            $snModel->type = 2;
            $snModel->is_get = 1;
            if($snModel->updateUserPhone()){
                echo CJSON::encode(array('success'=>true,'msg'=>'提交成功,我们将与您取得联系'));
            }else{
                echo CJSON::encode(array('success'=>false,'msg'=>'提交失败,请重试'));
            }
        }
    }


}