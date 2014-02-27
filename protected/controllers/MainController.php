<?php

class MainController extends Controller{
    /**
     * Declares class-based actions.
     */
    public $layout='//layouts/column3';

    public function actions(){
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha'=>array(
                'class'=>'CCaptchaAction',
                'backColor'=>0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page'=>array(
                'class'=>'CViewAction',
            ),
        );
    }

    public function actionIndex(){
        $wxWebsiteModel = new WxWebsiteModel();
        $wxWebsiteModel->id = Yii::app()->session['user']->id;
        $webdata = $wxWebsiteModel->getWxWebById();
        $template = TemplateModel::getTemplateByTpid($webdata->template_id);
        Yii::app()->session['is_attr'] = $template->attr_setting_id;
        $this->render('index');
    }




}
