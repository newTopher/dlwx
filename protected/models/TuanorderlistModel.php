<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-11
 * Time: 上午10:12
 * To change this template use File | Settings | File Templates.
 */
class TuanorderlistModel extends Ar{

    public $id;
    public $uid;
    public $openid;
    public $phone;
    public $money;
    public $status;
    public $num;
    public $add_time;
    public $tid;
    public $mark;
    public $username;


    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{tuan_order_list}}';
    }

    public function insertTuanorder(){
        $this->add_time = time();
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }

    static public function getCountsUserByTid($tid,$uid){
        return self::model()->countByAttributes(array('tid'=>$tid,'uid'=>$uid));
    }

    static public function getUserTuanOrder($openid,$uid,$status){
        return self::model()->findAllByAttributes(array('openid'=>$openid,'uid'=>$uid,'status'=>$status));
    }

    static public function getOrder($id){
        return self::model()->findByPk(array('id'=>$id));
    }



}