<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-2-19
 * Time: 下午11:27
 * To change this template use File | Settings | File Templates.
 */
class Template14Model extends Ar{

    public $slider = '[{"id":"c_1","pic":"13939190395315843fa8a18.jpg"},{"id":"t_1","pic":"139391666153157af511b82.jpg"},{"id":"t_1","pic":"139391666853157afcea783.jpg"},{"id":"t_1","pic":"139391667653157b04c4145.jpg"},{"id":"c_1","pic":"139391668253157b0acd620.jpg"}]';
    public $uid;
    public $site_id;
    public $p1 = '{"linkid":"c_1","title":"\u670d\u52a1\u9152\u5e97","pic":"1393432649530e1849c3544.jpg"}';
    public $p2 = '{"linkid":"t_1","title":"\u6838\u5fc3\u4e1a\u52a1","pic":"1393424453530df8454984a.png"}';
    public $p3 = '{"linkid":"c_1","title":"\u7f51\u4e0a\u62a5\u540d","pic":"1393424963530dfa43bbcfd.jpg"}';
    public $p4 = '{"linkid":"t_1","title":"\u62db\u8058\u4e1a\u52a1","pic":"1393426439530e00071aacb.jpg"}';

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