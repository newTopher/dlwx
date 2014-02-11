<?php
/**
 * Created by IntelliJ IDEA.
 * User: db
 * Date: 14-2-10
 * Time: 下午3:14
 * To change this template use File | Settings | File Templates.
 */
class Wcontroller extends Controller {

    public function actionI(){
        $uid = Yii::app()->request->getParam('sid');
        if(!empty($uid)){
            $webData = WxWebsiteModel::getWxWebByUid($uid);
            Yii::app()->setTheme(TemplateModel::getTemplateNameByTpid($webData->template_id));
            $this->render('index',array('webData'=>$webData));
        }else{
            echo '非法请求';
        }
    }

}