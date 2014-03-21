<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-18
 * Time: 上午10:31
 * To change this template use File | Settings | File Templates.
 */
    class ClickdataModel extends Ar{

        public $id;
        public $uid;
        public $keyid;
        public $add_time;
        public $openid;

        public static function model($className=__CLASS__){
            return parent::model($className);
        }

        public function tableName(){
            return '{{click_data}}';
        }

        public function relations(){
            return array(

            );
        }

        public function insertKeydata(){
            $this->add_time = time();
            if($this->insert()){
                return true;
            }else{
                return false;
            }
        }

    }