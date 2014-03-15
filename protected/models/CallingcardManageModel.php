<?php
class CallingcardManageModel extends Ar{
    public $id;
    public $name;
    public $job;
    public $company;
    public $mobilephone;
    public $tel1;
    public $tel2;
    public $qq;
    public $website;
    public $email;
    public $address;
    public $nav_data;
    public $head_image_path;
    public $background_path;
    public $keywords;
    public $image_path;
    public $introduce;
    public $title;
    public $qrcode;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{callingcardmanage}}';
    }

    public function settingInsert(){
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }

    static public function getAllOrderByUid($uid){
        return self::model()->findAllByAttributes(array('uid'=>$uid));
    }

    static public function getCallingCardByUid($uid,$keywords){
        return self::model()->findByAttributes(array('uid'=>$uid,'keywords'=>$keywords));
    }

    static public function getCallingCardByid($id){
        return self::model()->findByPk($id);
    }

    public function deleteCards(){
        if(self::model()->deleteByPk($this->id)){
            return true;
        }else{
            return false;
        }
    }

    public function settingUpdate($id){
        $arr=array(
            'uid'=>$this->uid,
            'keywords'=>$this->keywords,
            'image_path'=>$this->image_path,
            'title'=>$this->title,
            'job'=>$this->job,
            'company'=>$this->company,
            'name'=>$this->name,
            'introduce'=>$this->introduce,
            'head_image_path'=>$this->head_image_path,
            'mobilephone'=>$this->mobilephone,
            'tel1'=>$this->tel1,
            'tel2'=>$this->tel2,
            'qrcode'=>$this->qrcode,
            'email'=>$this->email,
            'qrcode'=>$this->qrcode,
            'qq'=>$this->qq,
            'website'=>$this->website,
            'address'=>$this->address,
            'background_path'=>$this->background_path,
            'nav_data'=>$this->nav_data
        );
        if(self::model()->updateByPk($id,$arr)){
            return true;
        }else{
            return false;
        }
    }

}