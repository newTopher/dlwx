<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-1-8
 * Time: 下午10:36
 * To change this template use File | Settings | File Templates.
 */
class WxSliderModel extends Ar{

    public $id;
    public $uid;
    public $site_id;
    public $title;
    public $is_index = 0;
    public $image;
    public $url;
    public $url_id;
    public $add_time;
    public $update_time;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{wx_slider_list}}';
    }

    public function getSlider(){
        return self::model()->findAllByAttributes(array('uid'=>$this->uid));
    }

    public function getSliderById(){
        return self::model()->findByPk($this->id);
    }

    public function updateSlider(){
        $data = array('title'=>$this->title,'url'=>$this->url,'update_time'=>time());
        if(!empty($this->image)){
            $data['image']=$this->image;
        }
        if($this->updateByPk($this->id,$data)){
            return true;
        }else{
            return false;
        }
    }

    public function addSlider(){
        $this->add_time = time();
        $this->update_time = time();
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }

    public function delSlider(){
        if($this->deleteByPk($this->id)){
            return true;
        }else{
            return false;
        }
    }

    static public function getSlideBySiteId($siteid){
        return self::model()->findAllByAttributes(array('site_id'=>$siteid));
    }


}