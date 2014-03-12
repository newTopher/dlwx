<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-11
 * Time: 上午10:12
 * To change this template use File | Settings | File Templates.
 */
class ActivitySnModel extends Ar{

    public $id;
    public $uid;
    public $openid;
    public $type;
    public $prize_type;
    public $sn;
    public $is_get;
    public $add_time;
    public $phone;
    public $aid;


    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{activity_sn}}';
    }

    static public function getUserPrize($uid,$aid,$openid,$type){
        if(self::model()->findByAttributes(array('uid'=>$uid,'aid'=>$aid,'openid'=>$openid,'type'=>$type))){
            return true;
        }else{
            return false;
        }
    }

    public function insertSn(){
        $this->add_time = time();
        $this->is_get = 0;
        if($this->insert()){
            return false;
        }else{
            return true;
        }
    }

    static public function getCountsPrizeType($aid,$uid,$prize_type){
        return self::model()->countByAttributes(array('aid'=>$aid,'uid'=>$uid,'prize_type'=>$prize_type));
    }

    public function setPhone(){
        $sndata = self::model()->findByAttributes(array('uid'=>$this->uid,'aid'=>$this->aid,'openid'=>$this->openid,'type'=>$this->type));
        print_r($sndata);exit;
        $sndata->phone = $this->phone;
        $sndata->is_get = $this->is_get;
        if($sndata->save()){
            return true;
        }else{
            return false;
        }
    }



}