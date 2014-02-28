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
    public $content;
    public $linkid;
    public $is_show_nav;
    public $add_time;
    public $show_type;
    public $is_show_son;

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


}