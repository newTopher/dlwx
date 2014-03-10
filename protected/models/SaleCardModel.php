<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-9
 * Time: 下午11:47
 * To change this template use File | Settings | File Templates.
 */
class SaleCardModel extends Ar{

    public $id;
    public $uid;
    public $name;
    public $index_image;
    public $index_title;
    public $description;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{sale_card}}';
    }

    public function relations(){
        return array(

        );
    }

    public function insertSale(){

    }

}