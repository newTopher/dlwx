<?php
class PackageModel extends Ar{
    public $id;
    public $template_id;
    public $helper_id;
    public $attr_id;
    public $status;
    public $introduce;
    public $money;
    public $time;
    public $pid;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function relations(){
        return array(
        );
    }

    public function tableName(){
        return "{{package}}";
    }

    public function InsertPackage(){
        if($this->insert()){
            return true;
        }else{
            return false;
        }
    }

    public function SelectPackage(){
        return self::model()->findAll();
    }

    public function unExchange($template_id){
        if(isset($template_id)){
            $template_id = preg_replace( '/[^\d-]/', '',$template_id);
            $tid=explode("-",$template_id);
            return $tid;
        }else{
            return false;
        }
    }

    public function idExchage($list,$id){
        if($id=="template_id"){
            $template=new TemplateModel();
        }elseif($id=="helper_id"){
            $template=new HelperModel();
        }
        $Tid=array();
        $template_name=array();
        foreach($list as $val){
            $tid=$val->$id; //h3-h7
            $t_id=$this->unExchange($tid);   //array(0array(0=>3,1=>7))
            foreach($t_id as $v){
                $china_name=array();
                $name=$template->selectByAttr('id',$v);
                foreach($name as $k){
                    $china_name = $k->china_name;
                }
                $china[$val->id][$v]=$china_name;
            }
            $Tid=$china;
        }
        return $Tid;
    }
}



?>