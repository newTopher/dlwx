<?php
class OrdermanageModel extends Ar{
    public $uid;
    public $keywords;
    public $title;
    public $image_path;
    public $introduce;
    public $position_x;
    public $position_y;
    public $header_image_path;
    public $order_tel;
    public $setname_tel;
    public $order_introduce;
    public $setname_introduce;
    public $feedback_info;
    public $displayname;
    public $displaytelephone;
    public $displayreservedate;
    public $displayreservetime;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{ordermanage}}';
    }

    public function settingInsert(){
        if($this->Insert()){
            return true;
        }else{
            return false;
        }
    }

    static public function getOrderCardByUid($uid){
        return self::model()->findByAttributes(array('uid'=>$uid));
    }






}