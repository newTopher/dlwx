<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 13-12-26
 * Time: 下午11:24
 * To change this template use File | Settings | File Templates.
 */
class WeixinController extends Controller{

    public $layout='//layouts/column3';

    public function actionBase(){
        $wxWebsiteModel = new WxWebsiteModel();
        $wxWebsiteModel->id = Yii::app()->session['user']->id;
        $webdata = $wxWebsiteModel->getWxWebById();
        $this->render('base',array('webdata'=>$webdata));
    }

    public function actionAddweixin(){
        $wxWebsiteModel = new WxWebsiteModel();
        $wxWebsiteModel->id = Yii::app()->request->getParam('id','');
        $wxWebsiteModel->uid = Yii::app()->request->getParam('uid','');
        $wxWebsiteModel->webname_title = Yii::app()->request->getParam('webname_title','');
        $wxWebsiteModel->template_id = Yii::app()->request->getParam('template_id','');
        $wxWebsiteModel->tel = Yii::app()->request->getParam('tel','');
        $wxWebsiteModel->address = Yii::app()->request->getParam('address','');
        $wxWebsiteModel->replay_keywords = Yii::app()->request->getParam('replay_keywords','');
        $wxWebsiteModel->msg_title = Yii::app()->request->getParam('msg_title','');
        $wxWebsiteModel->msg_description = Yii::app()->request->getParam('msg_description','');
        if(isset($_FILES['msg_image'])){
            $msgImageUrl = '';
            $dir = 'wxwebsite';
            $name = $_FILES['msg_image']['name']; //上传图片原名
            $type = $_FILES['msg_image']['type']; //上传图片mime类型
            $tmp_name = $_FILES['msg_image']['tmp_name']; //上传图片临时存放位置
            $msgImageUrl = Upload::createImageLink($name, $type, $tmp_name,$dir);
            $wxWebsiteModel->msg_image = $msgImageUrl;
        }
        if(isset($_FILES['index_image'])){
            $indexImageUrl = '';
            $dir = 'wxwebsite';
            $name = $_FILES['index_image']['name']; //上传图片原名
            $type = $_FILES['index_image']['type']; //上传图片mime类型
            $tmp_name = $_FILES['index_image']['tmp_name']; //上传图片临时存放位置
            $indexImageUrl = Upload::createImageLink($name, $type, $tmp_name,$dir);
            $wxWebsiteModel->index_image = $indexImageUrl;
        }
        if(!empty($wxWebsiteModel->id)){
            if($wxWebsiteModel->getWxWebById()){
                if($wxWebsiteModel->updateWxWebById()){
                    $this->redirect(Yii::app()->getBaseUrl()."/Weixin/Base");
                }else{
                    $this->redirect(Yii::app()->getBaseUrl()."/Weixin/Base");
                }
            }else{

            }
        }else{
            if($wxWebsiteModel->addWxWeb()){
                $this->redirect(Yii::app()->getBaseUrl()."/Weixin/Base");
            }else{
                $this->redirect(Yii::app()->getBaseUrl()."/Weixin/Base");
            }
        }
    }



}