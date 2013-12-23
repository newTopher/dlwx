<?php
/**
 * Created by IntelliJ IDEA.
 * User: db
 * Date: 13-12-12
 * Time: 下午2:32
 * To change this template use File | Settings | File Templates.
 */
class UserModel extends CActiveRecord{

    public $id;
    public $email;
    public $password;
    public $name;
    public $wxusers;
    public $wtusers;
    public $company_name;
    public $tel;
    public $open_weixin;
    public $open_weitao;
    public $wx_account;
    public $wx_token;
    public $wt_account;
    public $wt_token;
    public $trade_id;
    public $msg_status;
    public $wx_code_url;
    public $wt_code_url;
    public $puid;
    public $level=3;
    public $add_time;
    public $last_login_time;
    public $update_time;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{user}}';
    }

    public function relations(){
        return array(

        );
    }

    public function addUser(){
        $this->add_time=time();
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }



}