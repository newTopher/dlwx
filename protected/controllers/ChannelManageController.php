<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-2-27
 * Time: 下午11:19
 * To change this template use File | Settings | File Templates.
 */
class ChannelManageController extends Controller{

    public $layout='//layouts/column3';

    public function actionIndex(){
        $msg = Yii::app()->request->getParam('msg','');
        $channelModel = new ChannelModel();
        $channelModel->uid =  Yii::app()->session['user']->id;
        $channel_data = $channelModel->getChannelByUid();
        $this->render('index',array('msg'=>$msg,'channel_data'=>$channel_data,'msg'=>Yii::app()->session['msg']));
        Yii::app()->session['msg']='';
    }

    public function actionAddChannel(){
        $pid = Yii::app()->request->getParam('pid',0);
        $url = Yii::app()->request->getParam('url',0);
        $name = Yii::app()->request->getParam('name');
        $linkid = Yii::app()->request->getParam('linkid');
        $is_sub_show = Yii::app()->request->getParam('is_sub_show',0);
        $is_show = Yii::app()->request->getParam('is_show',0);
        $text = Yii::app()->request->getParam('text');
        $uid = Yii::app()->session['user']->id;
        $webData = WxWebsiteModel::getWxWebByUid($uid);
        if(!empty($name)){
            $channelModel = new ChannelModel();
            $channelModel->site_id = $webData->id;
            $channelModel->pid = $pid;
            $channelModel->uid = $uid;
            $channelModel->name = $name;
            $channelModel->is_show = $is_show;
            $channelModel->is_sub_show = $is_sub_show;
            $channelModel->name = $name;
            $channelModel->order = 1;
            if(!empty($url)){
                $channelModel->linkid = $linkid;
            }else{
                $channelModel->text = $text;
            }
            if($channelModel->addChannel()){
                Yii::app()->session['msg'] = '添加成功';
                $this->redirect(Yii::app()->request->baseUrl.'/ChannelManage/Index');
            }else{
                Yii::app()->session['msg'] = '添加失败';
                $this->render('addchannelview',array('msg'=>'添加失败'));
            }
        }else{
            Yii::app()->session['msg'] = '栏目名称不能为空';
            $this->render('addchannelview',array('msg'=>'栏目名称不能为空'));
        }
    }

    public function actionAddChannelview(){
        $pid = Yii::app()->request->getParam('pid',0);
        $selectdata = $this->getAllselect();
        $this->render('addchannelview',array('pid'=>$pid,'selectdata'=>$selectdata));
    }

    public function actionChanneledit(){
        $id =  Yii::app()->request->getParam('id');
        $channelModel = new ChannelModel();
        $channelModel->id = $id;
        $channelData = $channelModel->getChannelById();
        $selectdata = $this->getAllselect();
        $this->render('editchannelview',array('channelData'=>$channelData,'id'=>$id,'selectdata'=>$selectdata));
    }

    public function actionChannelupdate(){
        $id = Yii::app()->request->getParam('id');
        $url = Yii::app()->request->getParam('url',0);
        $name = Yii::app()->request->getParam('name');
        $linkid = Yii::app()->request->getParam('linkid');
        $is_sub_show = Yii::app()->request->getParam('is_sub_show',0);
        $is_show = Yii::app()->request->getParam('is_show',0);
        $text = Yii::app()->request->getParam('text');
        if(!empty($name) && !empty($id)){
            $channelModel = new ChannelModel();
            $channelModel->id = $id;
            $channelModel->name = $name;
            $channelModel->is_show = $is_show;
            $channelModel->is_sub_show = $is_sub_show;
            if(!empty($url)){
                $channelModel->linkid = $linkid;
                $channelModel->text = '';
            }else{
                $channelModel->text = $text;
                $channelModel->linkid = null;
            }
            if($channelModel->updateChannel()){
                Yii::app()->session['msg'] = '修改成功';
                $this->redirect(Yii::app()->request->baseUrl.'/ChannelManage/Index');
            }else{
                $this->render('addchannelview',array('msg'=>'修改失败'));
            }
        }else{
            $this->render('addchannelview',array('msg'=>'操作失败'));
        }
    }

    public function actionChanneldel(){
        $id = Yii::app()->request->getParam('id');
        if(!empty($id)){
            $channelModel = new ChannelModel();
            $channelModel->id = $id;
            $channelModel->uid = Yii::app()->session['user']->id;
            if($channelModel->delChannel()){
                Yii::app()->session['msg'] = '删除成功';
                $this->redirect(Yii::app()->request->baseUrl.'/ChannelManage/Inde');
            }else{
                Yii::app()->session['msg'] = '删除失败';
                $this->redirect(Yii::app()->request->baseUrl.'/ChannelManage/Index');
            }
        }else{
            Yii::app()->session['msg'] = '操作失败';
            $this->redirect(Yii::app()->request->baseUrl.'/ChannelManage/Index');
        }
    }

    public function actionChannelsubdel(){
        $id = Yii::app()->request->getParam('id');
        if(!empty($id)){
            $channelModel = new ChannelModel();
            $channelModel->id = $id;
            $channelModel->uid = Yii::app()->session['user']->id;
            if($channelModel->delsubChannel()){
                Yii::app()->session['msg'] = '删除成功';
                $this->redirect(Yii::app()->request->baseUrl.'/ChannelManage/Index');
            }else{
                Yii::app()->session['msg'] = '删除失败';
                $this->redirect(Yii::app()->request->baseUrl.'/ChannelManage/Index');
            }
        }else{
            Yii::app()->session['msg'] = '操作失败';
            $this->redirect(Yii::app()->request->baseUrl.'/ChannelManage/Index');
        }
    }

}