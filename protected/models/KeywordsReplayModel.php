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
            return $this->id;
        }else{
            return false;
        }
    }

    public function updateKeywords(){
        $keywordsdata = self::model()->findByPk($this->id);
        $keywordsdata->keywords = $this->keywords;
        $keywordsdata->update_time = time();
        if($keywordsdata->save()){
            return true;

        }else{
            return false;
        }
    }
    public function getKeyWordsByUid(){
        return self::model()->findAllByAttributes(array('uid'=>$this->uid));
    }

    public function getKeyWordById(){
        return self::model()->findByPk($this->id);
    }

    public function delKeyWordsById(){
        if(self::model()->deleteByPk($this->id)){
            return true;
        }else{
            return false;
        }
    }

    public function getKeyWordsByUidAndMember(){
        $CDbCriteria = new CDbCriteria();
        $CDbCriteria->addCondition('uid='.$this->uid);
        $CDbCriteria->addCondition("type='{$this->type}'");
        if(self::model()->find($CDbCriteria)){
            return true;
        }else{
            return false;
        }
    }

    public function getDataKeyWordsByUidAndMember(){
        $CDbCriteria = new CDbCriteria();
        $CDbCriteria->addCondition('uid='.$this->uid);
        $CDbCriteria->addCondition("type='{$this->type}'");
        return self::model()->find($CDbCriteria);
    }

    public function getDataKeyWordsByUidAndSale(){
        $CDbCriteria = new CDbCriteria();
        $CDbCriteria->addCondition('uid='.$this->uid);
        $CDbCriteria->addCondition("type='{$this->type}'");
        $CDbCriteria->addCondition("keywords='{$this->keywords}'");
        return self::model()->find($CDbCriteria);
    }

    public function updateKeyWordsByUidAndMember(){
        if(self::model()->updateAll(array('keywords'=>$this->keywords),'uid=:uid and type=:type',array(':uid'=>$this->uid,':type'=>$this->type)
        )){
            return true;
        }else{
            return false;
        }
    }

    static public function getKeyWordsDataByUid($uid){
        return self::model()->findAllByAttributes(array('uid'=>$uid));
    }

    static public function getByKeywordsAndUid($uid,$keywords){
        return self::model()->findByAttributes(array('uid'=>$uid,'keywords'=>$keywords)) ;
    }


}