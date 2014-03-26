<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-9
 * Time: 下午11:47
 * To change this template use File | Settings | File Templates.
 */
class PhotolistModel extends Ar{

    public $id;
    public $uid;
    public $name;
    public $desciption;
    public $index_image;
    public $add_time;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{photo_list}}';
    }

    public function relations(){
        return array(

        );
    }

    public function insertPhotolist(){
        $this->add_time = time();
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }

    public function updateSale(){
        $saledata = self::model()->findByPk($this->id);
        $saledata->name = $this->name;
        $saledata->chance = $this->chance;
        $saledata->index_image = $this->index_image;
        $saledata->index_title = $this->index_title;
        $saledata->description = $this->description;
        $saledata->start_date = $this->start_date;
        $saledata->end_date = $this->end_date;
        $saledata->prizetext = $this->prizetext;
        $saledata->user_everyday_times = $this->user_everyday_times;
        $saledata->keywords = $this->keywords;
        if($saledata->save()){
            return true;
        }else{
            return false;
        }
    }

    public function getPhotolistByUid(){
        if($list = self::model()->findAllByAttributes(array('uid'=>$this->uid))){
            return $list;
        }else{
            return false;
        }
    }

    static public function getDataSalelistByUid($uid){
        if($list = self::model()->findAllByAttributes(array('uid'=>$uid))){
            return $list;
        }else{
            return false;
        }
    }

    static public function getSaleCardByUid($uid,$keywords){
        return self::model()->findByAttributes(array('uid'=>$uid,'keywords'=>$keywords));
    }

    static public function getSaleCardById($id){
        return self::model()->findByPk(array('id'=>$id));
    }



}