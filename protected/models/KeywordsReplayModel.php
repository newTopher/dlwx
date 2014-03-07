<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-6
 * Time: 下午3:29
 * To change this template use File | Settings | File Templates.
 */
class KeywordsReplayModel extends Ar{

    public $id;
    public $uid;
    public $type;
    public $source_id;
    public $source_type;
    public $keywords;
    public $add_time;
    public $update_time;
    public $preg_type;
    public $text;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return '{{keywords_reply}}';
    }

    public function insertKeywords(){
        $this->add_time = time();
        $this->update_time = time();
        if($this->insert()){
            return false;
        }else{
            return true;
        }
    }

    public function getKeyWordsByUid(){
        return self::model()->findAllByAttributes(array('uid'=>$this->uid));
    }

    public function delKeyWordsById(){
        if(self::model()->deleteByPk($this->id)){
            return true;
        }else{
            return false;
        }
    }


}