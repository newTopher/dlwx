<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-18
 * Time: 下午12:16
 * To change this template use File | Settings | File Templates.
 */
class ReaddataModel extends Ar{

    public $id;
    public $sid;
    public $type;
    public $share_type;
    public $add_time;
    public $from_openid;
    public $uid;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{read_data}}';
    }

    public function relations(){
        return array(

        );
    }

    public function insertReaddata(){
        $this->add_time = time();
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }


}