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
    public $token_sub;
    public $level=2;
    public $status=1;
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
            array("email,agent_name","required"),
            array("","")
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

}