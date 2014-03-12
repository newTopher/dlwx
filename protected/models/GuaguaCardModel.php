<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-9
 * Time: 下午11:47
 * To change this template use File | Settings | File Templates.
 */
class GuaguaCardModel extends Ar{

    public $id;
    public $uid;
    public $name;
    public $chance;
    public $index_image;
    public $index_title;
    public $description;
    public $start_date;
    public $end_date;
    public $prizetext;
    public $user_everyday_times;
    public $add_time;
    public $keywords;
    public $keywords_id;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{guaguacard}}';
    }

    public function relations(){
        return array(

        );
    }

    public function insertGuagua(){
        $this->add_time = time();
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }

    public function updateGuagua(){
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

    public function getGuagualistByUid(){
        if($list = self::model()->findAllByAttributes(array('uid'=>$this->uid))){
            return $list;
        }else{
            return false;
        }
    }

    static public function getGuaguaCardByUid($uid,$keywords){
        return self::model()->findByAttributes(array('uid'=>$uid,'keywords'=>$keywords));
    }

    static public function getGuaguaCardById($id){
        return self::model()->findByPk(array('id'=>$id));
    }



}