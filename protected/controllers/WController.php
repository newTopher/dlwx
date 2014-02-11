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
            $slideData =WxSliderModel::getSlideBySiteId($webData->id);
            $this->render('index',array('webData'=>$webData,'slideData'=>$slideData));
        }else{
            echo '非法请求';
        }
    }

}