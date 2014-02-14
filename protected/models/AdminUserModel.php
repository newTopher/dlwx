<?php
/**
 * Created by IntelliJ IDEA.
 * User: db
 * Date: 13-12-12
 * Time: 下午2:32
 * To change this template use File | Settings | File Templates.
 */
class AdminUserModel extends Ar{

    public $id;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{admin_user}}';
    }

    public function relations(){
        return array(

        );
    }

}