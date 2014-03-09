<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-8
 * Time: 下午3:01
 * To change this template use File | Settings | File Templates.
 */
class ViplistModel extends Ar{

    public $id;
    public $uid;
    public $openid;
    public $username;
    public $sex;
    public $phone;
    public $password;
    public $status;
    public $score;
    public $area;
    public $address;
    public $birthday;
    public $add_time;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{vip_list}}';
    }

    public function insertVip(){
        $this->add_time = time();
        $this->status = 1;
        $this->score = 0;
        if($this->insert()){
            return $this->id;
        }else{
            return false;
        }
    }

    public function updateVip(){
        if(self::model()->updateByPk(array('id'=>$this->id),array('username'=>$this->username,
        'phone'=>$this->phone,'sex'=>$this->sex,'address'=>$this->address,'birthday'=>$this->birthday))){
            return true;
        }else{
            return false;
        }
    }

    public function getVipListByUid(){
        if($res = self::model()->findAllByAttributes(array('uid'=>$this->uid))){
            return $res;
        }else{
            return false;
        }
    }

    static public function getVipByUidAndOpenid($uid,$openid){
        if($data = self::model()->findByAttributes(array('uid'=>$uid,'openid'=>$openid))){
            return $data;
        }else{
            return false;
        }
    }

    public function getVipById(){
        return self::model()->findByPk(array('id'=>$this->id));
    }





}