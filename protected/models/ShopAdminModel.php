<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-20
 * Time: 下午10:19
 * To change this template use File | Settings | File Templates.
 */
class ShopAdminModel extends Ar{

    public $dbname  = 'weixinshop';

    public $id;
    public $username;
    public $password;
    public $role_id;
    public $last_ip;
    public $last_time;
    public $email;
    public $status;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{weixin_admin}}';
    }

    static public function findById($uid){
        return self::model()->findByPk(array('id'=>$uid));
    }

    public function insertAdmin(){
        $this->last_time = time();
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }


}