<?php
class PackageController extends CController{

    public $layout="//layouts/column3";

    public function actionAdd(){
        if($_POST){
            $package=new PackageModel();
            $template=new TemplateModel();
            $helper=new HelperModel();
            $template_id=Yii::app()->request->getParam("template_id");
            $helper_id=Yii::app()->request->getParam("helper_id");
            if(empty($template_id)||empty($helper_id)){
                $msg="还没有选择模版或者助手哦!";
            }else{
                $package->template_id=implode("-",$template_id);
                $package->helper_id=implode("-",$helper_id);
                $tid=$this->exchange($template_id);
                $hid=$this->exchange($helper_id);
                $tMoney=$template->selectMoney($tid);
                $hMoney=$helper->selectMoney($hid);
                $sum1=0;
                $sum2=0;
                foreach($tMoney as $k){
                    $sum1=$sum1+$k->money;
                    foreach($hMoney as $key){
                        $sum2=$sum2+$key->money;
                    }
                }
                $sum=$sum1+$sum2;
                $package->money=$sum;
                echo Yii::app()->request->getParam('status');exit;
                if(Yii::app()->request->getParam('status')==1){
                    $package->status=Yii::app()->request->getParam('status');
                }else{
                    $package->status=0;
                }
                $package->InsertPackage();
                $msg="套餐设置成功";
            }
        }else{
            $msg="请选择您要的套餐再提交";
        }
        $T_list=TemplateModel::Select();
        $H_list=HelperModel::Select();
        $this->render('add',array('H_list'=>$H_list,'T_list'=>$T_list,'msg'=>$msg));
    }


    public function exchange($template_id){
        if(isset($template_id)){
            $tid=implode("-",$template_id);
            $template_id = preg_replace( '/[^\d-]/', '',$tid);
            $tid=explode("-",$template_id);
            return $tid;
        }else{
            return false;
        }

    }



}


?>