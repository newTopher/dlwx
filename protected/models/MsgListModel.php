<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-1-17
 * Time: 上午12:06
 * To change this template use File | Settings | File Templates.
 */
class MsgListModel extends Ar{

    public $id;
    public $uid;
    public $to_openid;
    public $from_openid;
    public $content;
    public $send_times;
    public $add_time;
    public $type;
    public $source_id;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{msg_list}}';
    }

    public function relations(){
        return array(

        );
    }

    public function getNumByDate($uid,$num){
        $criteria= new CDbCriteria();
        $criteria->addCondition('uid',$uid);
        $start_time=time()-$num*24*3600;
        $end_time=time()-($num-1)*24*3600;
        $criteria->addBetweenCondition('add_time',$start_time,$end_time);
        return count(self::model()->findAll($criteria)) ;

    }

    public function getNoUseNumByDate($uid,$num){  //$num 为天数，返回第几天前的没有命中数;
        $criteria= new CDbCriteria();
        $criteria->addCondition('uid',$uid);
        $start_time=time()-$num*24*3600;
        $end_time=time()-($num-1)*24*3600;
        $criteria->addCondition("type='nouse'");
        $criteria->addBetweenCondition('add_time',$start_time,$end_time);
        return count(self::model()->findAll($criteria)) ;
    }
    
    public function insertMsg(){
        $this->add_time = time();
        $this->send_times = 0;
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }


}