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
    public $wx_uid;
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


}