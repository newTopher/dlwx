<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-17
 * Time: 下午10:48
 * To change this template use File | Settings | File Templates.
 */
class UrllistModel extends Ar{

    public $id;
    public $uid;
    public $url;
    public $content;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{url_list}}';
    }

    public function relations(){
        return array(

        );
    }

    public function insertUrl(){
        $this->add_time = time();
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }

    public function delurl(){
        if(self::model()->deleteByPk(array('id'=>$this->id))){
            return true;
        }else{
            return false;
        }
    }

    static public function getUrldataByUid($uid){
        return self::model()->findAllByAttributes(array('uid'=>$uid));
    }




}