<?php
class PackageModel extends CActiveRecord{
    public $id;
    public $template_id;
    public $helper_id;
    public $attr_id;
    public $status;
    public $introduce;
    public $money;
    public $time;
    public $pid;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function relations(){
        return array(
        );
    }

    public function tableName(){
        return "{{package}}";
    }

    public function InsertPackage(){
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }

}



?>