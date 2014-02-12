<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-1-4
 * Time: 上午12:34
 * To change this template use File | Settings | File Templates.
 */
class WxBaseMenuModel extends CActiveRecord{

    public $id;
    public $uid;
    public $site_id;
    public $menu_name;
    public $order;
    public $with_image;
    public $text;
    public $add_time;
    public $update_time;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{wx_base_menu}}';
    }

    public function relations(){
        return array(

        );
    }

    public function updateMenu(){

    }

    public function getMenu(){
        return self::model()->findAllByAttributes(array('uid'=>$this->uid));
    }

    public function getMenuById(){
        return self::model()->findByPk($this->id);
    }

    public function updateMenuById(){
        $data = array();
        $data['menu_name'] =  $this->menu_name;
        $data['text'] = $this->text;
        $data['update_time'] = time();
        if($this->with_image != ''){
            $data['with_image'] = $this->with_image;
        }
        if($this->updateByPk($this->id,$data)){
            return true;
        }else{
            return false;
        }
    }

    public function insertMenu(){
        $this->add_time=time();
        $this->update_time=time();
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }

    static public function getMenuByUid($uid){
        return self::model()->findAllByAttributes(array('uid'=>$uid));
    }

    static public function getMenuDetailById($id){
        return self::model()->findByPk(array('id'=>$id));
    }

}