<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-7
 * Time: 下午1:39
 * To change this template use File | Settings | File Templates.
 */
class MemberCardModel extends Ar{


    public $id;
    public $uid;
    public $cust_name;
    public $tel;
    public $address;
    public $index_image;
    public $index_title;
    public $description;
    public $position_x;
    public $position_y;
    public $vip_name;
    public $vip_logo;
    public $vip_style;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{member_card}}';
    }

    public function relations(){
        return array(

        );
    }

    public function getMemberCardByUid(){
        if(self::model()->findByAttributes(array('uid'=>$this->uid))){
            return true;
        }else{
            return false;
        }
    }

    public function getDataMemberCardByUid(){
        return self::model()->findByAttributes(array('uid'=>$this->uid));
    }

    public function insertMemberCard(){
        $this->add_time = time();
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }

    public function updateMemberCard(){
        if(self::model()->updateAll(array('cust_name'=>$this->cust_name,'tel'=>$this->tel,'address'=>$this->address,
            'index_image'=>$this->index_image,'index_title'=>$this->index_title,
            'description'=>$this->description,'position_x'=>$this->position_x,
            'position_y'=>$this->position_y),'uid=:uid',array('uid'=>$this->uid))){
            return true;
        }else{
            return false;
        }
    }

    public function updateVipMemberCard(){
        if(self::model()->updateAll(array('vip_name'=>$this->vip_name,'vip_logo'=>$this->vip_logo,'vip_style'=>$this->vip_style),'uid=:uid',array('uid'=>$this->uid))){
            return true;
        }else{
            return false;
        }
    }

    static public function getWeiMemberCardByUid($uid){
        return self::model()->findByAttributes(array('uid'=>$uid));
    }

    static public function getMemberCardById($id){
        return self::model()->findByPk(array('id'=>$id));
    }


}