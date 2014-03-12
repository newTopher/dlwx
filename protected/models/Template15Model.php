<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-2-19
 * Time: 下午11:27
 * To change this template use File | Settings | File Templates.
 */
class Template15Model extends Ar{

    public $slider ='[{"id":"c_1","pic":"139392460953159a0149983.jpg"},{"id":"c_1","pic":"139392461553159a072e5f7.jpg"},{"id":"t_1","pic":"139392462153159a0d9bfcb.jpg"},{"id":"c_1","pic":"139392462653159a126278d.jpg"},{"id":"t_1","pic":"139392463153159a174c5fc.jpg"}]';
    public $uid;
    public $site_id;
    public $p1 ='{"linkid":"c_1","title":"\u54c1\u724c\u670d\u52a1","pic":"139392477253159aa436f94.png"}';
    public $p2 ='{"linkid":"c_1","title":"\u4e1a\u52a1\u4ecb\u7ecd","pic":"139392521353159c5d48257.png"}';
    public $p3 ='{"linkid":"t_1","title":"\u5173\u4e8e\u6211\u4eec","pic":"139392551653159d8c4b95c.png"}';
    public $p4 ='{"linkid":"t_1","title":"\u4f53\u9a8c\u9884\u7ea6","pic":"139392555153159daf9cd0d.png"}';
    public $p5 ='{"linkid":"t_1","title":"\u4f53\u9a8c\u9884\u7ea6","pic":"139392561153159deb85184.png"}';
    public $p6 ='{"linkid":"t_1","title":"\u8054\u7cfb\u6211\u4eec","pic":"139392572753159e5f79dc6.png"}';

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{template_15}}';
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