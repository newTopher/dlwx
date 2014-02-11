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
    public $appid;
    public $wx_appid;
    public $wx_appsecret;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{user}}';
    }

    public function relations(){
        return array(
            'agent_user'=>array(self::BELONGS_TO,'AgentUserModel','puid')
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

    public function getUserById(){
        return self::model()->findByPk($this->id);
    }

    public function updateUser(){
        if(self::model()->updateByPk($this->id,array('name'=>$this->name,
        'tel'=>$this->tel,'trade_id'=>$this->trade_id,'update_time'=>time()
        ))){
            return true;
        }else{
            return false;
        }
    }

    public function updateByToken(){
        if(self::model()->updateAll(array('open_weixin'=>1,'bind_wx_time'=>time()),'wx_token=:wx_token',array(':wx_token'=>$this->wx_token))){
            return true;
        }else{
            return false;
        }
    }

    public function updateUserPwd(){
        if(self::model()->updateByPk($this->id,array('password'=>$this->password,'update_time'=>time()))){
            return true;
        }else{
            return false;
        }
    }

    public function updateApp(){
        if(self::model()->updateByPk($this->id,array('wx_appid'=>$this->wx_appid,'wx_appsecret'=>$this->wx_appsecret,'update_time'=>time()))){
            return true;
        }else{
            return false;
        }
    }

    static public function findByToken($wx_token){
        if($res = self::model()->findByAttributes(array('wx_token'=>$wx_token,'open_weixin'=>1))){
            return $res;
        }else{
            return false;
        }
    }



}