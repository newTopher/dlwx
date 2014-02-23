<?php
/**
 * Created by IntelliJ IDEA.
 * User: db
 * Date: 13-12-12
 * Time: 下午2:32
 * To change this template use File | Settings | File Templates.
 */
class AgentUserModel extends Ar{

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
    public $type;
    public $rate;

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

    public function updateUser(){
        if(!empty($this->id) && !empty($this->money) && !empty($this->rate)){
            if(self::model()->updateByPk($this->id,array('money'=>$this->money,'end_time'=>$this->end_time,'rate'=>$this->rate,'update_time'=>$this->rate))){
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

    public function selectDeadLine($id){
        return self::model()->findByAttributes(array('id'=>$id));
    }

    public function AgentUserClose(){
        if(self::model()->updateByPk($this->id,array('status'=>0,'update_time'=>time()))){
            return true;
        }else{
            return false;
        }
    }

    public function AgentUserOpen(){
        if($this->type==1||$this->type==0){
            $status=1;
        }elseif($this->type==2){
            $status=2;
        }
        if(self::model()->updateByPk($this->id,array('status'=>$status,'update_time'=>time()))){
            return true;
        }else{
            return false;
        }
    }

    public function AgentUserView(){
        if($AgentUser=self::model()->findByPk($this->id)){
            return $AgentUser;
        }else{
            return false;
        }
    }

    public function changePassword(){
        if(self::model()->updateByPk($this->id,array('password'=>$this->password,'update_time'=>time()))){
            return true;
        }
    }

    public function findByTokenSub(){
        return self::model()->findByAttributes(array('token_sub'=>$this->token_sub));
    }

}