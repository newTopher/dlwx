<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 14-1-8
 * Time: 下午11:57
 * To change this template use File | Settings | File Templates.
 */
class TemplateController extends Controller{
    public $layout='//layouts/column3';

    public function actionShow(){
        $TemplateModel=new TemplateModel();
        $list=$TemplateModel->SelectTemplate();
        $this->render('show',array('list'=>$list));
     }

    public function actionAdd(){
        $TemplateModel=new TemplateModel();
        if($_POST){
            $TemplateModel->template_name=Yii::app()->request->getParam('template_name','');
            $trade_name=Yii::app()->request->getParam('trade_name','');
            echo $trade_name;exit;
            switch ($trade_name){
                case "万普标准版": $trade_id=1 ; $img_url="";$nail_url="";break;
                case "万普微餐饮": $trade_id=2;break;
                case "万普微汽车": $trade_id=3;break;
                case "万普微房产": $trade_id=4;break;
                case "万普微婚纱": $trade_id=5;break;
            }
            $TemplateModel->$trade_id=$trade_id;
            $attr_name=Yii::app()->request->getParam('attr_name','');
            switch ($attr_name){
                case "大转盘": $attr_id=1;break;
                case "刮刮卡": $attr_id=2;break;
                case "小游戏": $attr_id=3;break;
                case "微订座": $attr_id=4;break;
            }

            $TemplateModel->attr_setting_id=$attr_id;
            $TemplateModel->money=Yii::app()->request->getParam('money','');
            $show_img=Yii::app()->request->getParam('show_img','');
            $TemplateModel->status=Yii::app()->request->getParam('status','');
            $TemplateModel->InsertTemplate();
            $this->render('add');
        }else{
        $this->render('add');
        }
    }
    // param $file is the POST file name;
    // param $file_name is the field name;
    public function upload($_file,$file_name){
        $model=new File;
        if(isset($_file)){
            $model->attribute=$_file;
            $upload_image = CUploadedFile::getInstance($model,$file_name);
            $upload_dir=dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR;


        }

    }
 }