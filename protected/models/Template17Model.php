<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-2-19
 * Time: 下午11:27
 * To change this template use File | Settings | File Templates.
 */
class Template17Model extends Ar{

    public $slider ='[{"id":"c_1","pic":"13939463445315eee8f20de.jpg"},{"id":"c_1","pic":"13939463495315eeed790fe.jpg"},{"id":"t_1","pic":"13939463555315eef37fbed.jpg"},{"id":"c_1","pic":"13939463595315eef760276.jpg"},{"id":"t_1","pic":"13939463625315eefaf3e79.jpg"}]';
    public $uid;
    public $site_id;
    public $p1 ='{"linkid":"t_1","title":"\u670d\u52a1\u4ecb\u7ecd","pic":"13939464025315ef226f9fe.jpg"}';
    public $p2 ='{"linkid":"t_1","title":"\u6700\u65b0\u8d44\u8baf","pic":"13939464855315ef75982dc.jpg"}';
    public $p3 ='{"linkid":"t_1","title":"\u7533\u8bf7","pic":"13939464985315ef8260627.jpg"}';
    public $p4 ='{"linkid":"t_1","title":"\u4fdd\u517b","pic":"13939465095315ef8d8c4f8.jpg"}';
    public $p5 ='{"linkid":"t_1","title":"\u552e\u524d","pic":"13939465315315efa31ddb2.jpg"}';
    public $p6 ='{"linkid":"t_1","title":"\u529f\u80fd","pic":"13939465415315efadadbcb.jpg"}';
    public $p7 ='{"linkid":"c_1","title":"\u5173\u4e8e\u6211","pic":"13939465655315efc5d73ba.jpg"}';
    public $p8 ='{"linkid":"c_1","title":"\u670d\u52a1","pic":"13939465805315efd422aef.jpg"}';
    public $p9 ='{"linkid":"c_1","title":"\u8054\u7cfb","pic":"13939465935315efe11899a.jpg"}';

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{template_17}}';
    }

    public function findByUidSiteId(){
        return self::model()->findByAttributes(array('uid'=>$this->uid,'site_id'=>$this->site_id));
    }

    public function insertSlider(){
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }

    public function insertTemplate(){
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }

    public function updateSlider(){
        if(self::model()->updateAll(array('slider'=>$this->slider),'uid=:uid and site_id=:site_id',array('uid'=>$this->uid,'site_id'=>$this->site_id))){
            return true;
        }else{
            return false;
        }
    }

    public function insertNav(){
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }

    public function updateNav($position){
        if(self::model()->updateAll(array($position=>$this->$position),'uid=:uid and site_id=:site_id',array('uid'=>$this->uid,'site_id'=>$this->site_id))){
            return true;
        }else{
            return false;
        }
    }

    public function getTemplateDataBySiteIdAndUid($site_id,$uid){
        if($result = self::model()->findByAttributes(array('site_id'=>$site_id,'uid'=>$uid))){
            return $result;
        }else{
            return false;
        }
    }




}