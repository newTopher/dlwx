<?php
class TemplateModel extends CActiveRecord{

    public $template_name;
    public $status;
    public $path_url;
    public $trade_id;
    public $attr_setting_id;
    public $id;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{template_list}}';
    }

    public function relations(){
        return array(

        );
    }

    public function SelectTemplate(){
        $temp=self::model()->findall();
        return $temp;
    }

    public function InsertTemplate(){
        if($temp=self::model()->insert()){
            return $temp;
        }else{
            return false;
        }
    }

    static public function getTemplateNameByTpid($id){
        return self::model()->findByPk($id);
    }

}