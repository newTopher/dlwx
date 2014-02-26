<?php
/**
 * Created by IntelliJ IDEA.
 * User: db
 * Date: 14-2-10
 * Time: 下午3:14
 * To change this template use File | Settings | File Templates.
 */
class Wcontroller extends Controller {

    public $layout='//layouts/column4';

    public function actionI(){
        $uid = Yii::app()->request->getParam('sid');
        if(!empty($uid)){
            $webData = WxWebsiteModel::getWxWebByUid($uid);
            $template_name = TemplateModel::getTemplateNameByTpid($webData->template_id);
            Yii::app()->setTheme($template_name);
            //$slideData =WxSliderModel::getSlideBySiteId($webData->id);
            $modelname ='Template'.$webData->template_id.'Model';
            $templateModel = new $modelname();
            $templateData = $templateModel->getTemplateDataBySiteIdAndUid($webData->id,$uid);
            $sliderdata = CJSON::decode($templateData->slider,false);
            $webNavData = $templateModel->getTemplateDataBySiteIdAndUid($webData->id,$uid);
            $new_sliderdata=array();
            foreach($sliderdata as $k=>$v){
                if($v->id != 'null'){
                    $parr = explode('_',$v->id);
                    if($parr[0] == 't'){
                        $new_sliderdata[$k]['link'] = Yii::app()->request->baseUrl.'/W/I/sid/'.$uid;
                    }else{
                        $new_sliderdata[$k]['link'] = Yii::app()->request->baseUrl.'/'.strtoupper($parr[0]).'/I/'.strtoupper($parr[1]).'/sid/'.$uid;
                    }
                    $new_sliderdata[$k]['pic'] = $v->pic;
                }
            }
            $menuData =WxBaseMenuModel::getMenuByUid($uid);
            $this->render('index',array('webData'=>$webData,'sliderdata'=>$new_sliderdata,'menuData'=>$menuData,'webNavData'=>$webNavData));
        }else{
            echo '非法请求';
        }
    }

    public function actionSite(){
        $uid = Yii::app()->request->getParam('sid');
        $mid = Yii::app()->request->getParam('mid');
        if(!empty($uid)){
            $webData = WxWebsiteModel::getWxWebByUid($uid);
            $template_name = TemplateModel::getTemplateNameByTpid($webData->template_id);
            Yii::app()->setTheme($template_name);
            $menuData =WxBaseMenuModel::getMenuDetailById($mid);
            $this->render('channel',array('webData'=>$webData,'menuData'=>$menuData));
        }else{
            echo '非法请求';
        }
    }

}