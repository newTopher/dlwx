<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-6
 * Time: 下午3:29
 * To change this template use File | Settings | File Templates.
 */
class NouseReplayModel extends Ar{

    public $id;
    public $uid;
    public $type;
    public $source_id;
    public $add_time;
    public $update_time;
    public $text;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{nouse_replay}}';
    }

    public function addFirstReplay(){
        $this->add_time = time();
        $this->update_time = time();
        if($this->insert()){
            return $this->id;
        }else{
            return false;
        }
    }

    public function updateFirstReplay(){
        if(self::model()->updateByPk(array('id'=>$this->id),array('source_id'=>$this->source_id,
        'text'=>$this->text,'type'=>$this->type,'update_time'=>time()))){
            return true;
        }else{
            return false;
        }
    }

    public function getFristByUid(){
        return self::model()->findByAttributes(array('uid'=>$this->uid));
    }


}