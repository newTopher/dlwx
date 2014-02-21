<?php
class AgentChargeNoteModel extends Ar{

    public $id;
    public $email;
    public $pay_way;
    public $uid;
    public $agent_name;
    public $time;
    public $status;
    public $money;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{agent_charge_note}}';
    }

    public function relations(){
        return array(
        );
    }

    public function rules(){
        return array(
        );
    }



}