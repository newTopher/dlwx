<?php
/**
 * Created by IntelliJ IDEA.
 * User: db
 * Date: 13-12-12
 * Time: 下午2:32
 * To change this template use File | Settings | File Templates.
 */
class UserModel extends CActiveRecord{

    public $id;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{user}}';
    }

    public function relations(){
        return array(

        );
    }

}