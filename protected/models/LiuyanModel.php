<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-18
 * Time: 下午10:29
 * To change this template use File | Settings | File Templates.
 */
    class LiuyanModel extends Ar{

        public $id;
        public $uid;
        public $name;
        public $index_title;
        public $index_image;
        public $add_time;
        public $description;

        public static function model($className=__CLASS__){
            return parent::model($className);
        }

        public function tableName(){
            return '{{liuyan}}';
        }

        public function relations(){
            return array(

            );
        }

        public function insertLiuyan(){
            $this->add_time = time();
            if($this->insert()){
                return true;
            }else{
                return false;
            }
        }

        public function updateLiuyan(){
            $liuyan = self::model()->findByPk(array('id'=>$this->id));
            $liuyan->name = $this->name;
            $liuyan->index_title = $this->index_title;
            $liuyan->index_image = $this->index_image;
            $liuyan->description = $this->description;
            if($liuyan->save()){
                return true;
            }else{
                return false;
            }
        }

        static public function getLiuyanByUid($uid){
            return self::model()->findByAttributes(array('uid'=>$uid));
        }


    }