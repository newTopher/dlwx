<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-1-15
 * Time: 下午11:30
 * To change this template use File | Settings | File Templates.
 */
class WxuserModel extends Ar{

    public $id;
    public $uid;
    public $openid;
    public $nickname;
    public $sex;
    public $language;
    public $city;
    public $province;
    public $country;
    public $headimgurl;
    public $subscribe_time;
    public $last_say_time;
    public $add_time;
    public $update_time;
    public $status;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{wxuser}}';
    }

    public function getWeixinUser(){
        return self::model()->findAllByAttributes(array('uid'=>$this->uid));
    }

    public function getWeixinUserById(){
        return self::model()->findByPk($this->id);
    }

    public function addUser(){
        $this->subscribe_time = time();
        $this->add_time = time();
        $this->status = 1;
        $this->update_time = time();
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }

    public function getUserByUidAndOpenId(){
        if(self::model()->findByAttributes(array('uid'=>$this->uid,'openid'=>$this->openid))){
            return true;
        }else{
            return false;
        }
    }





}