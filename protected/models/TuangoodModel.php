<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-13
 * Time: 上午11:01
 * To change this template use File | Settings | File Templates.
 */
class TuangoodModel extends Ar{

    public $id;
    public $uid;
    public $name;
    public $start_date;
    public $end_date;
    public $price;
    public $o_price;
    public $sum;
    public $every_limit;
    public $init_sum;
    public $description;
    public $index_image;
    public $tuan_detail;
    public $need_know;
    public $add_time;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{tuan_good}}';
    }

    public function insertTuangood(){
        $this->add_time = time();
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }

    public function updateTuangood(){
        $tuandata = self::model()->findByPk(array('id'=>$this->id));
        $tuandata->name = $this->name;
        $tuandata->start_date = $this->start_date;
        $tuandata->end_date = $this->end_date;
        $tuandata->price = $this->price;
        $tuandata->o_price = $this->o_price;
        $tuandata->sum = $this->sum;
        $tuandata->every_limit = $this->every_limit;
        $tuandata->init_sum = $this->init_sum;
        $tuandata->sum = $this->sum;
        $tuandata->description = $this->description;
        $tuandata->index_image = $this->index_image;
        $tuandata->tuan_detail = $this->tuan_detail;
        $tuandata->need_know = $this->need_know;
        if($tuandata->save()){
            return true;
        }else{
            return false;
        }
    }

    public function getTuanlistById(){
        return self::model()->findAllByAttributes(array('uid'=>$this->uid));
    }

    static public function getDataTuanlistById($uid){
        return self::model()->findAllByAttributes(array('uid'=>$uid));
    }

    static public function getTuangoodById($id){
        return self::model()->findByPk(array('id'=>$id));
    }


}