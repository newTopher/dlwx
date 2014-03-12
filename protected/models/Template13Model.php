<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-2-19
 * Time: 下午11:27
 * To change this template use File | Settings | File Templates.
 */
class Template13Model extends Ar{

    public $slider = '[{"id":"c_1","pic":"13939190395315843fa8a18.jpg"},{"id":"t_1","pic":"139391666153157af511b82.jpg"},{"id":"t_1","pic":"139391666853157afcea783.jpg"},{"id":"t_1","pic":"139391667653157b04c4145.jpg"},{"id":"c_1","pic":"139391668253157b0acd620.jpg"}]';
    public $uid;
    public $site_id;
    public $p1 = '{"linkid":"c_1","title":"\u7ca4\u83dc\u83dc\u5f0f","pic":"139391674653157b4a96006.png"}';
    public $p2 = '{"linkid":"c_1","title":"\u65e5\u672c\u83dc\u5f0f","pic":"139391678953157b7525a6c.png"}';
    public $p3 = '{"linkid":"c_1","title":"\u6e58\u83dc\u83dc\u5f0f","pic":"139391680853157b88ced08.png"}';
    public $p4 = '{"linkid":"c_1","title":"\u610f\u5f0f\u83dc\u5f0f","pic":"139391684653157bae9691e.png"}';
    public $p5 = '{"linkid":"c_1","title":"\u897f\u5f0f\u83dc\u5f0f","pic":"139391689553157bdf80bb4.png"}';
    public $p6 = '{"linkid":"c_1","title":"\u751c\u54c1\u96ea\u7cd5","pic":"139391691653157bf4cbaed.png"}';
    public $p7 = '{"linkid":"t_1","title":"\u97e9\u5f0f\u83dc\u5f0f","pic":"139391697053157c2a8f64a.png"}';
    public $p8 = '{"linkid":"c_1","title":"\u6cd5\u5f0f\u83dc\u5f0f","pic":"139391699253157c407e822.png"}';
    public $p9 = '{"linkid":"t_1","title":"\u9ebb\u8fa3\u98ce\u5473","pic":"139391700753157c4f5a455.png"}';

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{template_13}}';
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