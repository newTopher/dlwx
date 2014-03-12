<?php
class OrderModel extends Ar{

    public $openid;
    public $orderid;
    public $uid;
    public $username;
    public $dateline;
    public $timepart;
    public $remark;
    public $tel;
    public $input_data;
    public $select_data;
    public $add_time;
    public $status;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{ordercard}}';
    }

    public function OrderInsert(){
        $this->status=1;
        $this->add_time=time();
        if($this->insert()){
            return $this->id;
        }else{
            return false;
        }
    }

    public function OrderSelectByUid($uid,$oid){
        return   self::model()->findAllByAttributes(array('uid'=>$uid,'orderid'=>$oid));
    }

    public function OrderSelectById($openid,$uid){
       return   self::model()->findAllByAttributes(array('openid'=>$openid,'uid'=>$uid,'status'=>1));
    }

    public function OrderSelect(){
        return self::model()->findBypk($this->id);
    }

    public function OrderDelete($id){
         if(self::model()->updateByPk($id,array('status'=>'0'))){
             return true;
         }else{
             return false;
         }
    }

    public function OrderUpdate($id){
        if(self::model()->updateByPk($id,array('update_time'=>time(),'username'=>$this->username,'remark'=>$this->remark,'timepart'=>$this->timepart,'dateline'=>$this->dateline,'tel'=>$this->tel,'input_data'=>$this->input_data,'select_data'=>$this->select_data))){
            return true;
        }else{
            return false;
        }
    }

}