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
        $trade_id=Yii::app()->request->getParam("trade_id");
        $TemplateModel=new TemplateModel();
        $list=$TemplateModel->SelectTemplate($trade_id);
        $this->render('show',array('list'=>$list,'trade_id'=>$trade_id));
     }

    public function actionAdd(){
        if($_POST && $_FILES ){
            $TemplateModel=new TemplateModel();
            $TemplateModel->china_name=Yii::app()->request->getParam('china_name');
            $trade_name=Yii::app()->request->getParam('trade_name','');
            switch ($trade_name){
                case "万普标准版": $trade_id=1;break;
                case "万普微餐饮": $trade_id=2;break;
                case "万普微汽车": $trade_id=3;break;
                case "万普微房产": $trade_id=4;break;
                case "万普微婚纱": $trade_id=5;break;
            }
            $TemplateModel->trade_id=$trade_id;
            $template_name=Yii::app()->request->getParam('template_name','');
            if($template_name==null){
                $msg="模版名称不能为空，请重新填写";
                $this->redirect(Yii::app()->getBaseUrl()."/Template/Add?msg=".$msg);
            }else{
                if(!($dir=HelperModel::issetFile($template_name))){
                    $msg="模版文件名已存在，请重新填写";
                    $this->redirect(Yii::app()->getBaseUrl()."/Template/Add?msg=".$msg);
                }
                $TemplateModel->template_name=$template_name;        //template_name
            }
            if(!empty($_FILES['show_img']['type'])){
                $name=$_FILES['show_img']['name'];
                $type=$_FILES['show_img']['type'];
                $tmp_name = $_FILES['show_img']['tmp_name'];
                echo $name."<br>".$type."<br>".$tmp_name."<br>".$template_name;
                $ImageUrl = Upload::createImageLink($name, $type, $tmp_name,$template_name);
                $TemplateModel->template_image=$ImageUrl;           //template_image;
            }else{
                $msg="添加展示图不成功，请重新添加";
                $this->redirect(Yii::app()->getBaseUrl()."/Template/Add?msg=".$msg);
            }
            if($_FILES['nail_img']['type']){
                $name=$_FILES['nail_img']['name'];
                $type=$_FILES['nail_img']['type'];
                $tmp_name = $_FILES['nail_img']['tmp_name'];
                $NailUrl = Upload::createImageLink($name, $type, $tmp_name,$template_name);
                $TemplateModel->nail_url=$NailUrl;  //nail_url;
            }else{
                $msg="添加展示缩略图不成功，请重新添加";
                $this->redirect(Yii::app()->getBaseUrl()."/Template/Add?msg=".$msg);
            }
            $TemplateModel->money=Yii::app()->request->getParam('money','');  //money;
            $status=Yii::app()->request->getParam('status','');
            switch ($status){
                case "开启": $status=1;break;
                case "关闭": $status=0;break;
            }
            $TemplateModel->status=$status;// status;
            $TemplateModel->path_url=$dir."/";       //path_url
            if($TemplateModel->InsertTemplate()){
                $msg="模版创建成功";
                $this->redirect(Yii::app()->getBaseUrl()."/Template/Add?msg=".$msg);
            }else{
                $msg="创建失败";
                $this->redirect(Yii::app()->getBaseUrl()."/Template/Add?msg=".$msg);
            }
        }else{
            $this->render('add');
        }
    }

    public function ActionDelete(){
            $id=Yii::app()->request->getParam("id");
            $trade_id=Yii::app()->request->getParam("trade_id");
        if(!empty($id )&& !empty($trade_id)){
            $TemplateModel=new TemplateModel();
            $TemplateModel->id=$id;
            $TemplateModel->DeleteTemplate();
            $this->redirect(Yii::app()->getBaseUrl()."/Template/show?trade_id=".$trade_id);
        }else{
            $this->redirect(Yii::app()->getBaseUrl()."/Template/show?trade_id=".$trade_id);
        }
    }

    public function ActionTemplateList(){
        $TemplateModel=new TemplateModel();
        $trade=$TemplateModel->SelectTrade();
        $Templatelist=array();
        foreach($trade as $val){
            $Templatelist[$val->attributes['trade_id']]=$this->exchangeName($val->attributes['trade_id']);
        }
       //print_r($Templatelist);exit;
        $this->render('templatelist',array('list'=>$Templatelist));
    }

    public function exchangeName($trade_id){
        $trade_name=array();
        switch($trade_id){
            case 1:$trade_name="万普标准版";return $trade_name;break;
            case 2:$trade_name="万普微餐饮";return $trade_name;break;
            case 3:$trade_name="万普微汽车";return $trade_name;break;
            case 4:$trade_name="万普微房产";return $trade_name;break;
            case 5:$trade_name="万普微婚纱";return $trade_name;break;
        }
    }

 }