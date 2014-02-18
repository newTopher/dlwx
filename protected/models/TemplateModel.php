<?php
class TemplateModel extends Ar{

    public $template_name;
    public $status;
    public $path_url;
    public $trade_id;
    public $attr_setting_id;
    public $nail_url;
    public $id;
    public $money;
    public $template_image;
    public $china_name;

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

    public static function Select(){
        return self::model()->findAllByAttributes(array("status"=>1));
    }

    public function selectByAttr($attr,$key){
        return self::model()->findAllByPk(array($attr=>$key));
    }

    public function selectMoney($tid){
        return self::model()->findAllByAttributes(array("id"=>$tid));
    }

    public function SelectTemplate($trade_id){
        $temp=self::model()->findAllByAttributes(array("status"=>1,"trade_id"=>$trade_id));
        return $temp;
    }

    public function SelectTrade(){
        return  self::model()->findAllBySql("select  distinct trade_id from template_list");
    }

    public function InsertTemplate(){
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }

    public function DeleteTemplate(){
        if(self::model()->updateByPk($this->id,array('status'=>0))){
            return true;
        }else{
            return false;
        }
    }

    static public function getTemplateNameByTpid($id){
        return self::model()->findByPk($id)->template_name;
    }

    static public function getTemplateByTpid($id){
        return self::model()->findByPk($id);
    }
}