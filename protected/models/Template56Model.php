<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-2-19
 * Time: 下午11:27
 * To change this template use File | Settings | File Templates.
 */
class Template56Model extends Ar{

    public $slider='[{"id":"w_1","pic":"\/static\/13\/image\/20140325\/20140325152503_52692.png"},{"id":"w_1","pic":"\/static\/13\/image\/20140325\/20140325152503_52692.png"},{"id":"w_1","pic":"\/static\/13\/image\/20140325\/20140325152503_52692.png"},{"id":"w_1","pic":"\/static\/13\/image\/20140325\/20140325152503_52692.png"},{"id":"w_1","pic":"\/static\/13\/image\/20140325\/20140325152503_52692.png"}]';
    public $uid;
    public $site_id;
    public $p1 = '{"linkid":"w_1","title":"\u6210\u8003","pic":"icon-user"}';
    public $p2 = '{"linkid":"w_1","title":"\u81ea\u8003","pic":"icon-list-alt"}';
    public $p3 = '{"linkid":"w_1","title":"\u7814\u7a76\u751f","pic":"icon-rocket"}';
    public $p4 = '{"linkid":"w_1","title":"\u804c\u79f0","pic":"icon-file-text"}';
    public $p5 = '{"linkid":"w_1","title":"\u4f1a\u8ba1\u8003\u8bc1","pic":"icon-female"}';
    public $p6 = '{"linkid":"w_1","title":"\u5efa\u9020\u5e08","pic":"icon-legal"}';
    public $p7 = '{"linkid":"w_1","title":"\u516c\u8003\u57f9\u8bad","pic":"icon-edit-sign"}';
    public $p8 = '{"linkid":"w_1","title":"\u8865\u4e60\u73ed","pic":"icon-desktop"}';
    public $p9 = '{"linkid":"w_1","title":"\u7f51\u7edc\u8bfe\u5802","pic":"icon-globe"}';

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{template_56}}';
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