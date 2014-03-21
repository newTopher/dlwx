<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-1-12
 * Time: 下午10:36
 * To change this template use File | Settings | File Templates.
 */
class SingleNewsMsgModel extends Ar{

    public $id;
    public $uid;
    public $title;
    public $description;
    public $index_image;
    public $url_id;
    public $add_time;
    public $update_time;
    public $text;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{single_news_msg}}';
    }

    public function addSingleNewsMsg(){
        $this->add_time=time();
        $this->update_time=time();
        if(!empty($this->title) && !empty($this->index_image)){
            if($this->insert()){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function getSingleNewsMsgById(){
        return self::model()->findByAttributes(array('id'=>$this->id,'uid'=>$this->uid));
    }

    static public function getSingleById($id){
        return self::model()->findByAttributes(array('id'=>$id));
    }


    public function getAllSingleNewsMsg(){
        return self::model()->findAll();
    }

    static public function getkeywordsdata($uid,$keywords){
        self::model()->findByAttributes(array('uid'=>$uid,'keywords'=>$keywords));
    }

    static public function getDataAllSingleNewsMsg(){
        return self::model()->findAll();
    }

    public function delsingle(){
        if(self::model()->deleteByPk(array('id'=>$this->id))){
            return true;
        }else{
            return false;
        }
    }
}