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
        $webdata = WxWebsiteModel::getWxWebByUid(Yii::app()->session['user']->id);
        $template = TemplateModel::getTemplateByTpid($webdata->template_id);
        $this->render('base',array('webdata'=>$webdata,'template'=>$template));
    }

    public function actionAddweixin(){
        $wxWebsiteModel = new WxWebsiteModel();
        $wxWebsiteModel->id = Yii::app()->request->getParam('id','');
        $wxWebsiteModel->uid = Yii::app()->request->getParam('uid','');
        $wxWebsiteModel->webname_title = Yii::app()->request->getParam('webname_title','');
        $wxWebsiteModel->template_id = Yii::app()->request->getParam('template_id','');
        $wxWebsiteModel->tel = Yii::app()->request->getParam('tel','');
        $wxWebsiteModel->address = Yii::app()->request->getParam('address','');
        //$wxWebsiteModel->replay_keywords = Yii::app()->request->getParam('replay_keywords','');
        $wxWebsiteModel->msg_title = Yii::app()->request->getParam('msg_title','');
        $wxWebsiteModel->msg_description = Yii::app()->request->getParam('msg_description','');
        $wxWebsiteModel->msg_image = Yii::app()->request->getParam('msg_image','');

        if(!empty($wxWebsiteModel->id)){
            if($wxWebsiteModel->getWxWebById()){
                if($wxWebsiteModel->updateWxWebById()){
                    $this->redirect(Yii::app()->getBaseUrl()."/Weixin/Base");
                }else{
                    $this->redirect(Yii::app()->getBaseUrl()."/Weixin/Base");
                }
            }else{
                $this->redirect(Yii::app()->getBaseUrl()."/Weixin/Base");
            }
        }else{
            if($wxWebsiteModel->addWxWeb()){
                $this->redirect(Yii::app()->getBaseUrl()."/Weixin/Base");
            }else{
                $this->redirect(Yii::app()->getBaseUrl()."/Weixin/Base");
            }
        }
    }

    public function actionMenuset(){
        $wxBaseMenuModel = new WxBaseMenuModel();
        $wxSliderModel = new WxSliderModel();
        $wxBaseMenuModel->uid = Yii::app()->session['user']->id;
        $wxSliderModel->uid = Yii::app()->session['user']->id;
        $menuData = $wxBaseMenuModel->getMenu();
        $sliderData = $wxSliderModel->getSlider();
        $this->render('menuset',array('menuData'=>$menuData,'sliderData'=>$sliderData,'uid'=>$wxBaseMenuModel->uid));
    }

    public function actionSlideradd(){
        $wxWebsiteModel = new WxWebsiteModel();
        $wxWebsiteModel->id = Yii::app()->session['user']->id;
        $webdata = $wxWebsiteModel->getWxWebById();
        $this->render('slideradd',array('webdata'=>$webdata));
    }

    public function actionSlideredit(){
        $wxWebsiteModel = new WxWebsiteModel();
        $wxWebsiteModel->id = Yii::app()->session['user']->id;
        $webdata = $wxWebsiteModel->getWxWebById();
        $wxSliderModel = new WxSliderModel();
        $wxSliderModel->id = Yii::app()->request->getParam('id');
        $sliderData = $wxSliderModel->getSliderById();
        $this->render('slideredit',array('sliderData'=>$sliderData,'webdata'=>$webdata));
    }

    public function actionSliderinsert(){
        $wxWebsiteModel = new WxWebsiteModel();
        $wxSliderModel = new WxSliderModel();
        $wxWebsiteModel->id = Yii::app()->session['user']->id;
        $webdata = $wxWebsiteModel->getWxWebById();
        $wxSliderModel->site_id = $webdata->id;
        $wxSliderModel->uid = Yii::app()->session['user']->id;
        $wxSliderModel->is_index = Yii::app()->request->getParam('is_index',0);
        $wxSliderModel->title = Yii::app()->request->getParam('title','');
        $wxSliderModel->url = Yii::app()->request->getParam('url','');

        if(isset($_FILES['image'])){
            $msgImageUrl = '';
            $dir = 'wxwebsite';
            $name = $_FILES['image']['name']; //上传图片原名
            $type = $_FILES['image']['type']; //上传图片mime类型
            $tmp_name = $_FILES['image']['tmp_name']; //上传图片临时存放位置
            $msgImageUrl = Upload::createImageLink($name, $type, $tmp_name,$dir);
            $wxSliderModel->image = $msgImageUrl;
        }

        if($wxSliderModel->addSlider()){
            $this->redirect(Yii::app()->getBaseUrl()."/Weixin/Menuset");
        }else{
            $this->redirect(Yii::app()->getBaseUrl()."/Weixin/Slideradd");
        }


    }

    public function actionSliderdel(){
        $wxSliderModel = new WxSliderModel();
        $wxSliderModel->id = Yii::app()->request->getParam('id');
        $sliderData = $wxSliderModel->getSliderById();
        if($wxSliderModel->delSlider()){
            if(file_exists(Yii::getPathOfAlias('webroot').'/upload/wxwebsite/'.$sliderData->image)){
                unlink(Yii::getPathOfAlias('webroot').'/upload/wxwebsite/'.$sliderData->image);
            }
            $this->redirect(Yii::app()->getBaseUrl()."/Weixin/Menuset");
        }else{
            $this->redirect(Yii::app()->getBaseUrl()."/Weixin/Menuset");
        }
    }

    public function actionSliderupdate(){
        $wxSliderModel = new WxSliderModel();
        $wxSliderModel->is_index = Yii::app()->request->getParam('is_index',0);
        $wxSliderModel->title = Yii::app()->request->getParam('title','');
        $wxSliderModel->url = Yii::app()->request->getParam('url','');
        $wxSliderModel->id = Yii::app()->request->getParam('id','');

        if(isset($_FILES['image'])){
            $msgImageUrl = '';
            $dir = 'wxwebsite';
            $name = $_FILES['image']['name']; //上传图片原名
            $type = $_FILES['image']['type']; //上传图片mime类型
            $tmp_name = $_FILES['image']['tmp_name']; //上传图片临时存放位置
            $msgImageUrl = Upload::createImageLink($name, $type, $tmp_name,$dir);
            $wxSliderModel->image = $msgImageUrl;
        }

        if($wxSliderModel->updateSlider()){
            $this->redirect(Yii::app()->getBaseUrl()."/Weixin/Menuset");
        }else{
            $this->redirect(Yii::app()->getBaseUrl()."/Weixin/Slideredit/id/".$wxSliderModel->id);
        }


    }

    public function actionMenuedit(){
        $wxWebsiteModel = new WxWebsiteModel();
        $wxWebsiteModel->id = Yii::app()->session['user']->id;
        $webdata = $wxWebsiteModel->getWxWebById();
        $wxBaseMenuModel = new WxBaseMenuModel();
        $wxBaseMenuModel->id = Yii::app()->request->getParam('id');
        $data = $wxBaseMenuModel->getMenuById();
        $this->render('menuedit',array('menudata'=>$data,'webdata'=>$webdata));
    }

    public function actionMenuadd(){
        $this->render('menuadd',array('uid'=>Yii::app()->session['user']->id));
    }

    public function actionMenuinsert(){
        $wxBaseMenuModel = new WxBaseMenuModel();
        $wxBaseMenuModel->uid = Yii::app()->session['user']->id;
        $wxBaseMenuModel->site_id = WxWebsiteModel::getWxWebByUid(Yii::app()->session['user']->id)->id;
        $wxBaseMenuModel->menu_name = Yii::app()->request->getParam('menu_name');
        $wxBaseMenuModel->text = Yii::app()->request->getParam('text');
        if(isset($_FILES['with_image'])){
            $msgImageUrl = '';
            $dir = 'wxwebsite';
            $name = $_FILES['with_image']['name']; //上传图片原名
            $type = $_FILES['with_image']['type']; //上传图片mime类型
            $tmp_name = $_FILES['with_image']['tmp_name']; //上传图片临时存放位置
            $msgImageUrl = Upload::createImageLink($name, $type, $tmp_name,$dir);
            $wxBaseMenuModel->with_image = $msgImageUrl;
        }
        if($wxBaseMenuModel->insertMenu()){
            $this->redirect(Yii::app()->getBaseUrl()."/Weixin/Menuset");
        }else{
            $this->redirect(Yii::app()->getBaseUrl()."/Weixin/Menuadd");
        }
    }

    public function actionMenuupdate(){
        $wxBaseMenuModel = new WxBaseMenuModel();
        $wxBaseMenuModel->id = Yii::app()->request->getParam('id');
        $wxBaseMenuModel->menu_name = Yii::app()->request->getParam('menu_name');
        $wxBaseMenuModel->text = Yii::app()->request->getParam('text');
        if(isset($_FILES['with_image'])){
            $msgImageUrl = '';
            $dir = 'wxwebsite';
            $name = $_FILES['with_image']['name']; //上传图片原名
            $type = $_FILES['with_image']['type']; //上传图片mime类型
            $tmp_name = $_FILES['with_image']['tmp_name']; //上传图片临时存放位置
            $msgImageUrl = Upload::createImageLink($name, $type, $tmp_name,$dir);
            $wxBaseMenuModel->with_image = $msgImageUrl;
        }
        if($wxBaseMenuModel->updateMenuById()){
            $this->redirect(Yii::app()->getBaseUrl()."/Weixin/Menuset");
        }else{
            $this->redirect(Yii::app()->getBaseUrl()."/Weixin/Menuedit/id/".$wxBaseMenuModel->id);
        }
    }

    public function actionTemplateset(){
        $webData = WxWebsiteModel::getWxWebByUid(Yii::app()->session['user']->id);
        $template_name = TemplateModel::getTemplateNameByTpid($webData->template_id);
        $modelname ='Template'.$webData->template_id.'Model';
        $templateModel = new $modelname();
        $templateData = $templateModel->getTemplateDataBySiteIdAndUid($webData->id,Yii::app()->session['user']->id);
        if($templateData){
            $sliderdata = CJSON::decode($templateData->slider,false);
        }else{
            $sliderdata = null;
        }
        $selectdata = $this->getAllselect();
        $this->render('templateset'.$webData->template_id,array(
            'template_name'=>$template_name,
            'template_id'=>$webData->template_id,
            'site_id'=>$webData->id,
            'templateData'=>$templateData,
            'sliderdata'=>$sliderdata,
            'selectdata'=>$selectdata
        ));
    }

    public function actionTemplateslidersave(){
        $sliderdata = Yii::app()->request->getParam('sliderdata');
        $site_id = Yii::app()->request->getParam('site_id');
        $template_id = Yii::app()->request->getParam('template_id');
        if(!empty($site_id) && !empty($template_id)){
            $modelname ='Template'.$template_id.'Model';
            $templateModel = new $modelname();
            $templateModel->slider = CJSON::encode($sliderdata);
            $templateModel->uid = Yii::app()->session['user']->id;
            $templateModel->site_id = $site_id;
            if($templateModel->findByUidSiteId()){
                if($templateModel->updateSlider()){
                    $result = array('code'=>0,'msg'=>'更新成功');
                }else{
                    $result = array('code'=>-1,'msg'=>'更新失败');
                }
            }else{
                if($templateModel->insertSlider()){
                    $result = array('code'=>0,'msg'=>'新增成功');
                }else{
                    $result = array('code'=>-1,'msg'=>'新增失败');
                }
            }
        }else{
            $result = array('code'=>-1,'msg'=>'保存失败');
        }
        echo CJSON::encode($result);

    }

    public function actionNavsave(){
        $navdata = Yii::app()->request->getParam('navdata');
        $site_id = Yii::app()->request->getParam('site_id');
        $position = Yii::app()->request->getParam('position');
        $template_id = Yii::app()->request->getParam('template_id');
        if(!empty($site_id) && !empty($template_id) && !empty($position)){
            $modelname ='Template'.$template_id.'Model';
            $templateModel = new $modelname();
            $templateModel->$position = CJSON::encode($navdata);
            $templateModel->uid = Yii::app()->session['user']->id;
            $templateModel->site_id = $site_id;
            if($templateModel->findByUidSiteId()){
                if($templateModel->updateNav($position)){
                    $result = array('code'=>0,'msg'=>'更新成功');
                }else{
                    $result = array('code'=>-1,'msg'=>'更新失败');
                }
            }else{
                if($templateModel->insertNav()){
                    $result = array('code'=>0,'msg'=>'新增成功');
                }else{
                    $result = array('code'=>-1,'msg'=>'新增失败');
                }
            }
            echo CJSON::encode($result);
        }
    }

    public function actionTemplateselect(){
        $trade_id=Yii::app()->request->getParam("trade_id",'0');
        $TemplateModel=new TemplateModel();
        $list=$TemplateModel->getTemplate($trade_id);
        $webdata = WxWebsiteModel::getWxWebByUid(Yii::app()->session['user']->id);
        $this->render('templateselect',array('list'=>$list,'trade_id'=>$trade_id,'webdata'=>$webdata));
    }

    public function actionChangeTemplate(){
        $uid = Yii::app()->request->getParam('uid');
        $template_id = Yii::app()->request->getParam('template_id');
        if(!empty($uid) && !empty($template_id)){
            $webData = WxWebsiteModel::getWxWebByUid(Yii::app()->session['user']->id);
            $modelname ='Template'.$template_id.'Model';
            $templateModel = new $modelname();
            $templateModel->uid = Yii::app()->session['user']->id;
            $templateModel->site_id = $webData->id;
            if(!$templateModel->getTemplateDataBySiteIdAndUid($templateModel->site_id,$templateModel->uid)){
                $templateModel->insertTemplate();
            }
            $webSiteModel = new WxWebsiteModel();
            $webSiteModel->uid = $uid;
            $webSiteModel->template_id = $template_id;
            if($webSiteModel->updateTemplateIdByUid()){
                $template = TemplateModel::getTemplateByTpid($template_id);
                Yii::app()->session['is_attr'] = $template->attr_setting_id;
                $result = array('code'=>0,'msg'=>'模板选择成功,请到模板设置中心设置');
            }else{
                $result = array('code'=>-1,'msg'=>'模板选择失败');
            }
        }else{
            $result = array('code'=>-1,'msg'=>'操作失败');
        }
        echo CJSON::encode($result);
    }

    public function actionLbsset(){

    }

    public function actionCloseweixin(){
        $userModel = new UserModel();
        $userModel->id = Yii::app()->session['user']->id;
        if($userModel->closeWeixin()){
            $this->redirect(Yii::app()->getBaseUrl()."/User/Home");
        }else{
            $this->redirect(Yii::app()->getBaseUrl()."/User/Home");
        }
    }

    public function actionAutobind(){
        Yii::import("application.weixin.*");
        $username = Yii::app()->request->getParam('username');
        $pwd = Yii::app()->request->getParam('pwd');
        $ro = new WX_Remote_Opera();
        $token=$ro->test_login($username,$pwd);
        if(!$token){
            echo CJSON::encode(array('code'=>'-1','msg'=>'用户名或者密码错误请重试'));
            return false;
        }else{
            $userModel = new UserModel();
            $userModel->id = Yii::app()->session['user']->id;
            $userdata = $userModel->getUserById();
            if($token!=''){
                $ro->init($username,$pwd);
                //Array ( [wx_account] => diaobaojiecao [fakeid] => 3083415613 [nickname] => 屌爆段子 [ghid] => gh_8da4455c132d )
                $info=$ro->get_account_info();
                if(!$info){
                    echo CJSON::encode(array('code'=>'-1','msg'=>'绑定失败请重试'));
                    return false;
                }else{
                    $ro->getheadimg($info['fakeid']);
                    $ro->getqrcode($info['fakeid']);
                    $userModel->fakeid = $info['fakeid'];
                    $userModel->wx_appid = $info['ghid'];
                    $userModel->wx_p = $pwd;
                    $userModel->wx_account = $info['wx_account'];
                    $userModel->name = $info['nickname'];
                    $userModel->updateUserAlldata();
                    $res = $ro->quick_set_api(TOKEN,'http://weixin.wapwei.com/api/bind/t/'.$userdata->wx_token);
                    if($res['ret'] == 0){
                        echo CJSON::encode(array('code'=>'0','msg'=>'绑定成功'));
                        return true;
                    }else{
                        echo CJSON::encode(array('code'=>'-1','msg'=>'绑定失败请重试'));
                        return false;
                    }
                }
            }
        }

    }




}