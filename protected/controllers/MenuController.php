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
        $selectdata = $this->getAllselect();
        if(Yii::app()->session['user']->wx_appid != ''){
            $wx_appsecret = Yii::app()->session['user']->wx_appsecret;
        }else{
            $wx_appsecret ='';
        }
        $this->render('base',array(
            'wx_appid'=>$wx_appid,
            'wx_appsecret'=>$wx_appsecret,
            'menuOneLevelData'=>$menuOneLevelData,
            'msg'=>Yii::app()->session['msg'],
            'menuData'=>$menuData,
            'selectdata'=>$selectdata
            )
        );
        Yii::app()->session['msg'] = '';
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
            $selfMenuModel->url = Yii::app()->request->getParam('url');
        }else if($selfMenuModel->menu_event == 3){
            $selfMenuModel->single_source_id = Yii::app()->request->getParam('single_source_id');
        }else{
            $selfMenuModel->mutil_source_id = Yii::app()->request->getParam('source_id');
        }

        if(empty($selfMenuModel->menu_name)){
            Yii::app()->session['msg'] = '菜单名称不能为空';
            $this->redirect(Yii::app()->getBaseUrl()."/Menu/base/msg");
        }

        if(!is_numeric($selfMenuModel->num)){
            Yii::app()->session['msg'] = '排序应该为一个整数';
            $this->redirect(Yii::app()->getBaseUrl()."/Menu/base/msg");
        }
        if($selfMenuModel->menu_type == 1){
            if($selfMenuModel->validMenu() < 3){
                if($selfMenuModel->addMenu()){
                    $this->redirect(Yii::app()->getBaseUrl()."/Menu/base/msg");
                }else{
                    Yii::app()->session['msg'] = '添加失败';
                    $this->redirect(Yii::app()->getBaseUrl()."/Menu/base/msg");
                }
            }else{
                Yii::app()->session['msg'] = '添加失败一级菜单不能超过3个';
                $this->redirect(Yii::app()->getBaseUrl()."/Menu/base/msg");
            }
        }else{
            if($selfMenuModel->addMenu()){
                $this->redirect(Yii::app()->getBaseUrl()."/Menu/base/msg");
            }else{
                Yii::app()->session['msg'] = '添加菜单失败';
                $this->redirect(Yii::app()->getBaseUrl()."/Menu/base/msg");
            }
        }



    }

    public function actionDelpmenu(){
        $id = Yii::app()->request->getParam('id');
        $selfMenuModel = new SelfMenuModel();
        $selfMenuModel->uid = Yii::app()->session['user']->id;
        $selfMenuModel->id = $id;
        if($selfMenuModel->delpmenu()){
            Yii::app()->session['msg'] = '删除一级菜单菜单成功';
            $this->redirect(Yii::app()->getBaseUrl()."/Menu/base/msg");
        }else{
            Yii::app()->session['msg'] = '删除一级菜单菜单失败';
            $this->redirect(Yii::app()->getBaseUrl()."/Menu/base/msg");
        }
    }

    public function actionDelsmenu(){
        $id = Yii::app()->request->getParam('id');
        $selfMenuModel = new SelfMenuModel();
        $selfMenuModel->uid = Yii::app()->session['user']->id;
        $selfMenuModel->id = $id;
        if($selfMenuModel->delsmenu()){
            Yii::app()->session['msg'] = '删除二级菜单菜单成功';
            $this->redirect(Yii::app()->getBaseUrl()."/Menu/base/msg");
        }else{
            Yii::app()->session['msg'] = '删除二级菜单菜单失败';
            $this->redirect(Yii::app()->getBaseUrl()."/Menu/base/msg");
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

    public function actionCreateMenu(){
        $selfMenuModel = new SelfMenuModel();
        $selfMenuModel->uid = Yii::app()->session['user']->id;
        $menuData = $selfMenuModel->getMenu();
        $menu = array();
        foreach($menuData as $k=>$v){
            if(count($v['two_menu']) == 0){
                $one =array();
                if($v['oneLevel']['menu_event'] == 1 || $v['oneLevel']['menu_event'] == 3){
                    $one['type'] = 'click';
                    $one['key'] = 'wapwei_'.$v['oneLevel']['id'];
                }else if($v['oneLevel']['menu_event'] == 2){
                    $one['type'] = 'view';
                    $one['url'] = $v['oneLevel']['url'];
                }
                $one['name'] = $v['oneLevel']['menu_name'];

            }else{
                $one=array();
                $one['name'] = $v['oneLevel']['menu_name'];
                $two = array();
                foreach($v['two_menu'] as $ks=>$vs){
                    $temp=array();
                    if($vs->menu_event == 1  || $vs->menu_event == 3){
                        $temp['type'] = 'click';
                        $temp['name'] = $vs->menu_name;
                        $temp['key'] = 'wapwei_'.$vs->id;
                    }else if($vs->menu_event == 2){
                        $temp['type'] = 'view';
                        $temp['name'] = $vs->menu_name;
                        $temp['url'] = $vs->url;
                    }
                    $two[] = $temp;
                }
                $one['sub_button'] = $two;

            }
            $menu['button'][] = $one;
        }
        $req = $this->createMenu($this->encode($menu));
        $req = CJSON::decode($req,true);
        if($req['errcode'] == 0){
            Yii::app()->session['msg'] = '创建微信菜单成功';
            $this->redirect(Yii::app()->getBaseUrl()."/Menu/base");
        }else{
            Yii::app()->session['msg'] = '创建微信菜单失败';
            $this->redirect(Yii::app()->getBaseUrl()."/Menu/base");
        }
    }

    public function actionDelMenu(){
        $req = $this->delMenu();
        $req = CJSON::decode($req,true);
        if($req['errcode'] == 0){
            Yii::app()->session['msg'] = '删除微信菜单成功';
            $this->redirect(Yii::app()->getBaseUrl()."/Menu/base");
        }else{
            Yii::app()->session['msg'] = '删除微信菜单失败';
            $this->redirect(Yii::app()->getBaseUrl()."/Menu/base");
        }
    }

}