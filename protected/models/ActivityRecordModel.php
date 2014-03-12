<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-11
 * Time: 上午10:12
 * To change this template use File | Settings | File Templates.
 */
class ActivityRecordModel extends Ar{

    public $id;
    public $uid;
    public $openid;
    public $type;
    public $date;
    public $times;
    public $aid;


    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{activity_record}}';
    }

    public function insertRecord(){
        $this->date = date("Y-m-d");
        $this->times = 1;
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }

    static public function getRecordByUidAid($uid,$aid,$openid,$date,$type){
        if($res = self::model()->findByAttributes(array('uid'=>$uid,'aid'=>$aid,'openid'=>$openid,'date'=>$date,'type'=>$type))){
            return $res;
        }else{
            return false;
        }
    }

    public function updateRecordTimes(){
        $record = self::model()->findByAttributes(array('uid'=>$this->uid,'type'=>$this->type,'aid'=>$this->aid,'openid'=>$this->openid,'date'=>$this->date));
        $record->times = $record->times+1;
        if($record->save()){
            return true;
        }else{
            return false;
        }
    }

    static public function getCountsUserByAid($aid){
        return self::model()->countByAttributes(array('aid'=>$aid));
    }



}