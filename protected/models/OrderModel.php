<?php
class OrderModel extends Ar{

    public $openid;
    public $uid;
    public $username;
    public $dateline;
    public $timepart;
    public $remark;
    public $tel;
    public $inputdata;
    public $selectdata;
    public $add_time;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{ordercard}}';
    }

    public function OrderInsert(){
        $this->add_time=time();
        if($this->insert()){
            return $this->id;
        }else{
            return false;
        }
    }

    public function OrderSelectById($openid,$uid){
       return   self::model()->findAllByAttributes(array('openid'=>$openid,'uid'=>$uid));
    }



}