<?php
/**
 * Created by IntelliJ IDEA.
 * User: db
 * Date: 13-12-12
 * Time: 下午2:32
 * To change this template use File | Settings | File Templates.
 */
class AgentUserModel extends CActiveRecord{

    public $id;
    public $email;
    public $password;
    public $agent_name;
    public $telephone;
    public $mobilephone;
    public $login_time;
    public $end_time;
    public $token_sub;
    public $member=1;
    public $update_time=1;
    public $level=2;
    public $status;
    public $money = 0;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{agent_user}}';
    }

    public function relations(){
        return array(

        );
    }
    public function rules(){
        return array(

        );
    }
    public function insertUser(){
        if(!empty($this->email) && !empty($this->password) && !empty($this->agent_name) && strpos($this->email,'@wapwei')){
            if($this->insert()){
                return true;

            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    public function selectUser(){

        $AgentUser=self::model()->findAll();
        return $AgentUser;

    }
    public function AgentUserClose($email){
        if(self::model()->updateAll(array('statues=0'),array('email'=>$email)))
        return true;
    }

}