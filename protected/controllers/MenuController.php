<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-1-13
 * Time: 下午10:08
 * To change this template use File | Settings | File Templates.
 */
class MenuController extends Controller{

    public $layout='//layouts/column3';

    public function actionBase(){
        $msg = Yii::app()->request->getParam('msg','');
        $userModel = new UserModel();
        $selfMenuModel = new SelfMenuModel();
        $selfMenuModel->uid = Yii::app()->session['user']->id;
        $userModel->id = Yii::app()->session['user']->id;
        Yii::app()->session['user'] = $userModel->getUserById();
        if(Yii::app()->session['user']->wx_appid != ''){
            $wx_appid = Yii::app()->session['user']->wx_appid;
        }else{
            $wx_appid ='';
        }
        $menuOneLevelData = $selfMenuModel->getMenuOneLevelByUidId();
        $menuData = $selfMenuModel->getMenu();
        if(Yii::app()->session['user']->wx_appid != ''){
            $wx_appsecret = Yii::app()->session['user']->wx_appsecret;
        }else{
            $wx_appsecret ='';
        }
        $this->render('base',array(
            'wx_appid'=>$wx_appid,
            'wx_appsecret'=>$wx_appsecret,
            'menuOneLevelData'=>$menuOneLevelData,
            'msg'=>$msg,
            'menuData'=>$menuData
            )
        );
    }

    public function actionAddMenu(){
        $selfMenuModel = new SelfMenuModel();
        $selfMenuModel->uid = Yii::app()->session['user']->id;
        $selfMenuModel->menu_type = Yii::app()->request->getParam('menu_type');
        $selfMenuModel->menu_name = Yii::app()->request->getParam('menu_name');
        $selfMenuModel->num = Yii::app()->request->getParam('num');
        if($selfMenuModel->menu_type == 1){
            $selfMenuModel->pid = 0;
        }else if($selfMenuModel->menu_type == 2){
            $selfMenuModel->pid = Yii::app()->request->getParam('pid');
        }
        $selfMenuModel->num = Yii::app()->request->getParam('num');
        $selfMenuModel->menu_event = Yii::app()->request->getParam('menu_event');
        if($selfMenuModel->menu_event == 1){
            $selfMenuModel->text = Yii::app()->request->getParam('text');
        }else if($selfMenuModel->menu_event == 2){
            $selfMenuModel->url_id = Yii::app()->request->getParam('url_id');
        }else if($selfMenuModel->menu_event == 3){
            $selfMenuModel->single_source_id = Yii::app()->request->getParam('single_source_id');
        }else{
            $selfMenuModel->mutil_source_id = Yii::app()->request->getParam('source_id');
        }

        if(empty($selfMenuModel->menu_name)){
            $this->redirect(Yii::app()->getBaseUrl()."/Menu/base/msg/".urlencode('菜单名称不能为空'));
        }

        if(!is_numeric($selfMenuModel->num)){
            $this->redirect(Yii::app()->getBaseUrl()."/Menu/base/msg/".urlencode('排序应该为一个整数'));
        }
        if($selfMenuModel->menu_type == 1){
            if($selfMenuModel->validMenu() < 3){
                if($selfMenuModel->addMenu()){
                    $this->redirect(Yii::app()->getBaseUrl()."/Menu/base/msg");
                }else{
                    $this->redirect(Yii::app()->getBaseUrl()."/Menu/base/msg/".urlencode('添加失败'));
                }
            }else{
                $this->redirect(Yii::app()->getBaseUrl()."/Menu/base/msg/".urlencode('一级菜单已超过3个'));
            }
        }else{
            if($selfMenuModel->addMenu()){
                $this->redirect(Yii::app()->getBaseUrl()."/Menu/base/msg");
            }else{
                $this->redirect(Yii::app()->getBaseUrl()."/Menu/base/msg/".urlencode('添加失败'));
            }
        }



    }

    public function actionSetApp(){
        $userModel = new UserModel();
        $userModel->id = Yii::app()->session['user']->id;
        $userModel->wx_appid = Yii::app()->request->getParam('wx_appid','');
        $userModel->wx_appsecret = Yii::app()->request->getParam('wx_appsecret','');
        if($userModel->updateApp()){
            $this->redirect(Yii::app()->getBaseUrl()."/Menu/base");
        }else{
            $this->redirect(Yii::app()->getBaseUrl()."/Menu/base");
        }
    }

}