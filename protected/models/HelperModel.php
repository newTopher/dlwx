<?php

class HelperModel extends CActiveRecord{
    public $name;
    public $money;
    public $helper_image;
    public $nail_image;
    public $path_url;
    public $status;
    public $id;
    public $detail_text;
    public $china_name;

    public static  function model($className=__CLASS__){
        return parent::model($className);
    }


    public function tableName(){
        return "{{helper_list}}";
    }

    public function relations(){
        return array(

        );
    }

    public function selectMoney($tid){
        return self::model()->findAllByAttributes(array("id"=>$tid));
    }

    public function InsertHelper(){
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }

    public function selectByAttr($attr,$key){
        return self::model()->findAllByPk(array($attr=>$key));
    }

    public static  function SelectHelper(){
        return self::model()->findAll();
    }

    public static  function Select(){
        return self::model()->findAllByAttributes(array("status"=>1));
    }

    public static function issetFile($name){
        $dir="upload/".$name;
        if(!file_exists($dir)){
            mkdir($dir,0777);
            return $dir;
        }else{
            return false;
        }
    }

    public function changeStatus($status,$id){
        if($status==1){
            $status=0;
        }elseif($status==0){
            $status=1;
        }
        return self::model()->updateByPk($id,array('status'=>$status));
    }


}