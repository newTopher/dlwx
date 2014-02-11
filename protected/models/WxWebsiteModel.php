<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 13-12-29
 * Time: 下午4:17
 * To change this template use File | Settings | File Templates.
 */
class WxWebsiteModel extends CActiveRecord{

    public $id;
    public $uid;
    public $template_id;
    public $tel;
    public $address;
    public $replay_keywords;
    public $msg_title;
    public $msg_description;
    public $msg_image;
    public $index_image;
    public $status;
    public $add_time;
    public $update_time;
    public $webname_title;


    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{wx_website}}';
    }

    public function getWxWebById(){
        return self::model()->findByPk($this->id);
    }

    static public function getWxWebByUid($uid){
        return self::model()->findByAttributes(array('uid'=>$uid));
    }

    public function updateWxWebById(){
        $data=array(
            'uid'=>$this->uid,
            'template_id'=>$this->template_id,
            'tel'=>$this->tel,
            'address'=>$this->address,
            'replay_keywords'=>$this->replay_keywords,
            'msg_title'=>$this->msg_title,
            'msg_description'=>$this->msg_description,
            'webname_title'=>$this->webname_title,
            'update_time'=>time()
        );
        if(!empty($this->msg_image)){
            $data['msg_image']=$this->msg_image;
        }
        if(!empty($this->index_image)){
            $data['index_image']=$this->index_image;
        }
        if(self::model()->updateByPk($this->id,$data)){
            return true;
        }else{
            return false;
        }
    }

    public function addWxWeb(){
        $this->status=1;
        $this->add_time=time();
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }



}