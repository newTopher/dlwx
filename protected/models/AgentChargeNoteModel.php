<?php
class AgentChargeNoteModel extends Ar{
    public $id;
    public $email;
    public $pay_way;
    public $pay_num;
    public $uid;
    public $agent_name;
    public $time;
    public $status;
    public $money;
    public $mobilephone;

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

    public function NoteInsert(){

        if($this->insert()){
             return true;
        }else{
             return false;
        }
    }

    public function NoteSelect(){
       return $this->findAll();
    }

    public function NoteSelectById(){
        return $this->findByPk($this->id);
    }

    public function NoteUpdate(){
        if($this->updateByPk($this->id,array('status'=>$this->status))){
            return true;
        }else{
            return false;
        }
    }


}