<?php
class DataManageController extends Controller{

    public $layout='//layouts/column3';

    public function actionIndex(){
        $Wxuser= new WxuserModel();
        $MsgList=new MsgListModel();
        $uid=Yii::app()->session['user']->id;
        $day1=$Wxuser->getNumByDate($uid,1)?$Wxuser->getNumByDate($uid,1):0;
        $day2=$Wxuser->getNumByDate($uid,2)?$Wxuser->getNumByDate($uid,2)-$day1:0;
        $day3=$Wxuser->getNumByDate($uid,3)?$Wxuser->getNumByDate($uid,3)-$day2-$day1:0;
        $day4=$Wxuser->getNumByDate($uid,4)?$Wxuser->getNumByDate($uid,4)-$day2-$day3-$day1:0;
        $day5=$Wxuser->getNumByDate($uid,5)?$Wxuser->getNumByDate($uid,5)-$day4-$day3-$day2-$day1:0;
        $day6=$Wxuser->getNumByDate($uid,5)?$Wxuser->getNumByDate($uid,6)-$day5-$day4-$day3-$day2-$day1:0;
        $t_num=$Wxuser->getAllnum($uid);
        $add_fans=array($day1,$day2,$day3,$day4,$day5,$day6,$t_num);
        $day30=$Wxuser->getNumByDate($uid,30);
        $day7=$Wxuser->getNumByDate($uid,7);
        $last30=$Wxuser->getLastNum($uid,30);
        $last7=$Wxuser->getLastNum($uid,7);         //---------------weixin user data end
        $K_day1 = $MsgList->getNumByDate($uid,1)?$MsgList->getNumByDate($uid,1):1;
        $K_day2 = $MsgList->getNumByDate($uid,2)?$MsgList->getNumByDate($uid,2):1;
        $K_day7 = $MsgList->getNumByDate($uid,7)?$MsgList->getNumByday($uid,7):1;
        $K_day30 = $MsgList->getNumByDate($uid,30)?$MsgList->getNumByday($uid,30):1;
        $NoUse_day1=$MsgList->getNoUseNumByDate($uid,1)?$MsgList->getNoUseNumByDate($uid,1):1;
        $NoUse_day2=$MsgList->getNoUseNumByDate($uid,2)?$MsgList->getNoUseNumByDate($uid,1):1;
        $NoUse_day7=$MsgList->getNoUseNumByDate($uid,7)?$MsgList->getNoUseNumByday($uid,7):1;
        $NoUse_day30=$MsgList->getNoUseNumByDate($uid,30)?$MsgList->getNoUseNumByday($uid,30):1;
        $shotpercent1=round((1-$NoUse_day1/$K_day1)*100);
        $shotpercent2=round((1-$NoUse_day2/$K_day2)*100);
        $shotpercent7=round((1-$NoUse_day7/$K_day7)*100);
        $shotpercent30=round((1-$NoUse_day30/$K_day30)*100);
        $arr=array('add_fans'=>$add_fans,'usekey7'=>$shotpercent7,'usekey30'=>$shotpercent30,'day30'=>$day30,'last30'=>$last30,'last7'=>$last7,'day7'=>$day7,'usekey1'=> $shotpercent1,'usekey2'=> $shotpercent2);
        $this->render('index',$arr);
    }
}
?>