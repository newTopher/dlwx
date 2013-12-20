<?php
/**
 * Created by IntelliJ IDEA.
 * User: db
 * Date: 13-12-12
 * Time: 下午2:32
 * To change this template use File | Settings | File Templates.
 */
class AgentWxUserModel extends CActiveRecord{

    public $id;
    public $wx_account;
    public $wx_password;
    public $token;
    public $puid;
    public $add_time;
    public $update_time;
    public $status=0;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{agent_wx_user}}';
    }

    public function relations(){
        return array(

        );
    }

    public function insertWxAccount(){
        if(!empty($this->wx_account) && !empty($this->wx_password)){
            $this->add_time=time();
            $this->update_time=time();
            if($this->insert()){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function getAgentWxUser(){
        return self::model()->findAll();
    }

}