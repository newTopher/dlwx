<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-2-19
 * Time: 下午11:27
 * To change this template use File | Settings | File Templates.
 */
class Template16Model extends Ar{

    public $slider ='[{"id":"c_1","pic":"13939325175315b8e533763.jpg"},{"id":"c_1","pic":"13939325225315b8ea0364e.jpg"},{"id":"t_1","pic":"13939325255315b8edaf793.jpg"},{"id":"c_1","pic":"13939325295315b8f169835.jpg"},{"id":"t_1","pic":"13939325335315b8f500b58.jpg"}]';
    public $uid;
    public $site_id;
    public $p1 ='{"linkid":"t_1","title":"\u670d\u52a1","pic":"13939326125315b944994b5.png"}';
    public $p2 ='{"linkid":"t_1","title":"\u4f1a\u5458\u5361","pic":"13939330535315bafd1d851.png"}';
    public $p3 ='{"linkid":"c_1","title":"\u7533\u8bf7\u8bd5\u9a7e","pic":"13939331035315bb2fc8a1a.png"}';
    public $p4 ='{"linkid":"c_1","title":"\u4fdd\u517b\u670d\u52a1","pic":"13939331225315bb4287091.png"}';
    public $p5 ='{"linkid":"c_1","title":"\u552e\u524d\u8c03\u67e5","pic":"13939331475315bb5b89731.png"}';
    public $p6 ='{"linkid":"t_1","title":"\u529f\u80fd\u4ecb\u7ecd","pic":"13939331675315bb6f9777c.png"}';
    public $p7 ='{"linkid":"t_1","title":"\u5173\u4e8e\u6211\u4eec","pic":"13939331955315bb8b674b7.png"}';
    public $p8 ='{"linkid":"t_1","title":"\u5fae\u670d\u52a1","pic":"13939332225315bba6cbb02.png"}';
    public $p9 ='{"linkid":"t_1","title":"\u8054\u7cfb\u6211\u4eec","pic":"13939332435315bbbb8423a.png"}';

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{template_16}}';
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