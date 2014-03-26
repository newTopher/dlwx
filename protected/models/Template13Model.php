<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-2-19
 * Time: 下午11:27
 * To change this template use File | Settings | File Templates.
 */
class Template13Model extends Ar{

    public $slider = '[{"id":"c_23","pic":"\/static\/2\/image\/20140324\/20140324154720_65043.jpg"},{"id":"w_1","pic":"\/static\/2\/image\/20140324\/20140324154720_65043.jpg"},{"id":"y_37","pic":"\/static\/2\/image\/20140324\/20140324154720_65043.jpg"},{"id":"t_1","pic":"\/static\/2\/image\/20140324\/20140324154720_65043.jpg"},{"id":"c_22","pic":"\/static\/2\/image\/20140324\/20140324154720_65043.jpg"}]';
    public $uid;
    public $site_id;
    public $p1 = '{"linkid":"c_14","title":"\u7ca4\u83dc\u83dc\u5f0f","pic":"\/static\/2\/image\/20140324\/20140324160200_22286.png"}';
    public $p2 = '{"linkid":"c_21","title":"\u65e5\u672c\u83dc\u5f0f","pic":"\/static\/2\/image\/20140324\/20140324161039_11892.png"}';
    public $p3 = '{"linkid":"s_2","title":"\u6e58\u83dc\u83dc\u5f0f","pic":"\/static\/2\/image\/20140324\/20140324161052_30130.png"}';
    public $p4 = '{"linkid":"g_1","title":"\u610f\u5f0f\u83dc\u5f0f","pic":"\/static\/2\/image\/20140324\/20140324161103_43336.png"}';
    public $p5 = '{"linkid":"z_1","title":"\u897f\u5f0f\u83dc\u5f0f","pic":"\/static\/2\/image\/20140324\/20140324161120_52467.png"}';
    public $p6 = '{"linkid":"y_41","title":"\u751c\u54c1\u96ea\u7cd5","pic":"\/static\/2\/image\/20140324\/20140324161133_49894.png"}';
    public $p7 = '{"linkid":"n_9","title":"\u97e9\u5f0f\u83dc\u5f0f","pic":"\/static\/2\/image\/20140324\/20140324161146_60907.png"}';
    public $p8 = '{"linkid":"t_2","title":"\u6cd5\u5f0f\u83dc\u5f0f","pic":"\/static\/2\/image\/20140324\/20140324161156_52895.png"}';
    public $p9 = '{"linkid":"c_24","title":"\u9ebb\u8fa3\u98ce\u5473","pic":"\/static\/2\/image\/20140324\/20140324161205_62013.png"}';

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{template_13}}';
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