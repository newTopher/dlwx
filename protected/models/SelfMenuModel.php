<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-1-14
 * Time: 下午11:47
 * To change this template use File | Settings | File Templates.
 */
class SelfMenuModel extends Ar{

    public $id;
    public $uid;
    public $pid;
    public $menu_type;
    public $menu_name;
    public $menu_event;
    public $url_id;
    public $num;
    public $text;
    public $single_source_id;
    public $mutil_source_id;
    public $status=1;
    public $add_time;
    public $update_time;


    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{self_menu}}';
    }

    public function getMenuOneLevelByUidId(){
        $criteria =new CDbCriteria();
        $criteria->addCondition("uid=".$this->uid);
        $criteria->addCondition("pid = 0");
        $criteria->order = 'num DESC';
        return self::model()->findAll($criteria);
    }

    public function getMenu(){
        $data = $this->getMenuOneLevelByUidId();
        $_data=array();
        foreach($data as $k=>$v){
            $_data[$k]['oneLevel'] = $v->attributes;
            $_data[$k]['two_menu']=$this->getTwoLevelMenu($v->id);
        }
        return $_data;
    }

    public function getTwoLevelMenu($id){
        $criteria =new CDbCriteria();
        $criteria->addCondition("uid=".$this->uid);
        $criteria->addCondition("pid=".$id);
        return self::model()->findAll($criteria);
    }

    public function validMenu(){
        $criteria =new CDbCriteria();
        $criteria->addCondition("uid=".$this->uid);
        $criteria->addCondition("pid = 0");
        return self::model()->count($criteria);
    }

    public function addMenu(){
        $this->add_time = time();
        $this->update_time = time();
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }
}