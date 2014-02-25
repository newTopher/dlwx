<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-2-19
 * Time: 下午11:27
 * To change this template use File | Settings | File Templates.
 */
class Template21Model extends Ar{

    public $slider;
    public $uid;
    public $site_id;
    public $p1;
    public $p2;
    public $p3;
    public $p4;
    public $p5;
    public $p6;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{template_21}}';
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

    public function updateSlider(){
        $criteria =new CDbCriteria();
        $criteria->addCondition("site_id=".$this->site_id);
        $criteria->addCondition("uid=".$this->uid);
        if(self::model()->update(array('slider'=>$this->slider))){
            return true;
        }else{
            return false;
        }
    }




}