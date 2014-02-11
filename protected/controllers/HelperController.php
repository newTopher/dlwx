<?php
    class HelperController extends CController{

        public $layout="//layouts/column3";

        public function actionAdd(){
            if($_POST && $_FILES ){
                $HelperModel=new HelperModel();
                $H_name=Yii::app()->request->getParam('name');
                $HelperModel->china_name=Yii::app()->request->getParam('ChinaName');
                $HelperModel->money=Yii::app()->request->getParam('money');
                $HelperModel->detail_text=Yii::app()->request->getParam('detail_text');
                $HelperModel->path_url="upload/".$H_name."/";
                $status=Yii::app()->request->getParam('status');
                switch ($status){
                   case "开启": $status=1;break;
                   case "关闭": $status=0;break;
                }
                $HelperModel->status=$status;   //status
                if($H_name==null){
                    $msg="模版名称不能为空，请重新填写";
                    $this->redirect(Yii::app()->getBaseUrl()."/Helper/Add?msg=".$msg);
                }else{
                    if(!($dir=HelperModel::issetFile($H_name))){
                        $msg="模版文件名已存在，请重新填写";
                        $this->redirect(Yii::app()->getBaseUrl()."/Helper/Add?msg=".$msg);
                    }
                    $HelperModel->name=$H_name;        //name
                }
                if(!empty($_FILES['show_img']['type'])){
                    $name=$_FILES['show_img']['name'];
                    $type=$_FILES['show_img']['type'];
                    $tmp_name = $_FILES['show_img']['tmp_name'];
                    $ImageUrl = Upload::createImageLink($name, $type, $tmp_name,$H_name);
                    $HelperModel->helper_image=$ImageUrl;           //image;
                }else{
                    $msg="添加展示图不成功，请重新添加";
                    $this->redirect(Yii::app()->getBaseUrl()."/Helper/Add?msg=".$msg);
                }
                if($_FILES['nail_img']['type']){
                    $name=$_FILES['nail_img']['name'];
                    $type=$_FILES['nail_img']['type'];
                    $tmp_name = $_FILES['nail_img']['tmp_name'];
                    $NailUrl = Upload::createImageLink($name, $type, $tmp_name,$H_name);
                    $HelperModel->nail_image=$NailUrl;  //nail_url;
                }else{
                    $msg="添加展示缩略图不成功，请重新添加";
                    $this->redirect(Yii::app()->getBaseUrl()."/Helper/Add?msg=".$msg);
                }
                if($HelperModel->InsertHelper()){
                    $msg="添加成功";
                    $this->redirect(Yii::app()->getBaseUrl()."/Helper/Add?msg=".$msg);
                }else{
                    $msg="添加错误，请重新尝试";
                    $this->redirect(Yii::app()->getBaseUrl()."/Helper/Add?msg=".$msg);
                }
            }else{
                $this->render('add');
            }
        }

        public function actionList(){
            $HelperModel=new HelperModel();
            $status=Yii::app()->request->getParam('status');
            $id=Yii::app()->request->getParam('id');
            if(!empty($id)){
                $HelperModel->changeStatus($status,$id);
            }
                $list=$HelperModel->SelectHelper();
                $this->render('list',array('list'=>$list));
        }

    }



?>