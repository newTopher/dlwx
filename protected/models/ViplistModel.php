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
    public $brithday;
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





}