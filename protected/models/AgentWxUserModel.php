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
    public $mark;

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

    public function updateAgentUser(){
        if(!empty($this->wx_account) && !empty($this->wx_password)){
            $this->add_time=time();
            if(self::model()->updateByPk($this->id,array(
                'wx_account'=>$this->wx_account,
                'wx_password'=>$this->wx_password,
                'add_time'=>$this->add_time,
                'status'=>0
            ))){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function updateAgentUserByAdmin(){
        if(!empty($this->id)){
            $this->update_time=time();
            if(self::model()->updateByPk($this->id,array(
                'status'=>$this->status,
                'update_time'=>$this->add_time,
                'mark'=>$this->mark
            ))){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function delAgentUser(){
        if(self::model()->deleteByPk($this->id)){
            return true;
        }else{
            return false;
        }
    }

    public function getAgentWxUser($puid){
        $criteria =new CDbCriteria();
        $criteria->addCondition("puid=".$puid);
        $criteria->order = 'add_time DESC';
        return self::model()->findAll($criteria);
    }

    public function getAllAgentWxUser(){
        $criteria =new CDbCriteria();
        $criteria->order = 'add_time DESC';
        return self::model()->findAll($criteria);
    }

    public function getFailReason($id){
        return self::model()->findByPk($id);
    }

}
