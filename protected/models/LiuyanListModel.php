<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-24
 * Time: 下午3:58
 * To change this template use File | Settings | File Templates.
 */
class LiuyanListModel extends Ar{

    public $id;
    public $uid;
    public $openid;
    public $content;
    public $add_time;
    public $pid;
    public $name;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{liuyan_list}}';
    }

    public function addLiuyan(){
        $this->add_time = time();
        if(empty($this->pid)){
            $this->pid = 0;
        }
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }

    public function getAllLiuyanList(){
        $new = array();
        $oneData = self::model()->findAllByAttributes(array('uid'=>$this->uid,'pid'=>0));
        foreach($oneData as $k=>$v){
            $new[$k]['one'] = $v->attributes;
            $new[$k]['sub_data'] = $this->getSubliuyan($v['id']);
        }
        return $new;
    }

    public function getSubliuyan($pid){
        return self::model()->findAllByAttributes(array('uid'=>$this->uid,'pid'=>$pid));
    }



}