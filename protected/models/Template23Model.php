<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-2-19
 * Time: 下午11:27
 * To change this template use File | Settings | File Templates.
 */
class Template23Model extends Ar{

    public $slider ='[{"id":"t_1","pic":"1393922296531590f8567ee.jpg"},{"id":"t_1","pic":"1393922302531590feeb010.jpg"},{"id":"t_1","pic":"139392230953159105145f6.jpg"},{"id":"c_1","pic":"13939223155315910b25b6c.jpg"},{"id":"c_1","pic":"139392232053159110535f8.jpg"}]';
    public $uid;
    public $site_id;
    public $p1 ='{"linkid":"t_1","title":"\u5173\u4e8e\u6211\u4eec","pic":"139392322353159497ab94a.png"}';
    public $p2 ='{"linkid":"c_1","title":"\u666f\u70b9\u4ecb\u7ecd","pic":"1393923273531594c900034.png"}';
    public $p3 ='{"linkid":"t_1","title":"\u8054\u7cfb\u6211\u4eec","pic":"139392333553159507a0eff.png"}';
    public $p4 ='{"linkid":"c_1","title":"\u6700\u65b0\u6d88\u606f","pic":"1393923303531594e7c0bb7.png"}';
    public $p5 ='{"linkid":"t_1","title":"\u5173\u4e8e\u6211\u4eec","pic":"1393427237530e0325d636c.jpg"}';
    public $p6 ='{"linkid":"t_1","title":"\u9644\u8fd1\u95e8\u5e97","pic":"1393427264530e03403cb00.jpg"}';

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{template_23}}';
    }

    public function findByUidSiteId(){
        return self::model()->findByAttributes(array('uid'=>$this->uid,'site_id'=>$this->site_id));
    }

    public function insertSlider(){
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }

    public function insertTemplate(){
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }

    public function updateSlider(){
        if(self::model()->updateAll(array('slider'=>$this->slider),'uid=:uid and site_id=:site_id',array('uid'=>$this->uid,'site_id'=>$this->site_id))){
            return true;
        }else{
            return false;
        }
    }

    public function insertNav(){
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }

    public function updateNav($position){
        if(self::model()->updateAll(array($position=>$this->$position),'uid=:uid and site_id=:site_id',array('uid'=>$this->uid,'site_id'=>$this->site_id))){
            return true;
        }else{
            return false;
        }
    }

    public function getTemplateDataBySiteIdAndUid($site_id,$uid){
        if($result = self::model()->findByAttributes(array('site_id'=>$site_id,'uid'=>$uid))){
            return $result;
        }else{
            return false;
        }
    }




}