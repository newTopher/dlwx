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



}