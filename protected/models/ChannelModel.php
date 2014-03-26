<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-1-4
 * Time: 上午12:34
 * To change this template use File | Settings | File Templates.
 */
class ChannelModel extends Ar{

    public $id;
    public $uid;
    public $site_id;
    public $pid;
    public $order;
    public $name;
    public $text;
    public $linkid;
    public $is_show;
    public $add_time;
    public $is_sub_show;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{channel}}';
    }

    public function relations(){
        return array(

        );
    }

    public function addChannel(){
        $this->add_time = time();
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }

    public function getChannelByUid(){
        $new = array();
        $oneData = self::model()->findAllByAttributes(array('uid'=>$this->uid,'pid'=>0));
        foreach($oneData as $k=>$v){
            $new[$k]['one'] = $v->attributes;
            $new[$k]['sub_data'] = $this->getSubChannel($v['id']);
        }
        return $new;
    }

    public function getSubChannel($pid){
        return self::model()->findAllByAttributes(array('uid'=>$this->uid,'pid'=>$pid));
    }


    public function delChannel(){
        if(!empty($this->id) && !empty($this->uid)){
            if(self::model()->deleteByPk(array('id'=>$this->id)) &&
            self::model()->deleteAllByAttributes(array('pid'=>$this->id))){
                return true;
            }
        }else{
            return false;
        }
    }

    public function delsubChannel(){
        if(!empty($this->id) && !empty($this->uid)){
            if(self::model()->deleteByPk(array('id'=>$this->id))){
                return true;
            }
        }else{
            return false;
        }
    }

    public function getChannelById(){
        return self::model()->findByPk($this->id);
    }

    public function updateChannel(){
        if(self::model()->updateByPk(array('id'=>$this->id),array('name'=>$this->name,'is_show'=>$this->is_show,
        'is_sub_show'=>$this->is_sub_show,'linkid'=>$this->linkid,'text'=>$this->text))){
            return true;
        }else{
            return false;
        }
    }

    static public function getChannel($id){
        return self::model()->findByPk(array('id'=>$id));
    }

    static public function getPidChannel($pid){
        $cdb = new CDbCriteria();
        $cdb->addCondition('pid='.$pid);
        $cdb->order='add_time desc';
        if($data = self::model()->findAll($cdb)){
            return $data;
        }else{
            return false;
        }
    }



}