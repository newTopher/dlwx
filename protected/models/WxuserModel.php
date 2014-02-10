<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-1-15
 * Time: 下午11:30
 * To change this template use File | Settings | File Templates.
 */
class WxuserModel extends CActiveRecord{

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




}