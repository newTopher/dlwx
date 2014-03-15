<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-1-15
 * Time: 下午10:40
 * To change this template use File | Settings | File Templates.
 */
class WeixinFansController extends Controller{

    public $layout='//layouts/column3';

    public function actionIndex(){
        $criteria = new CDbCriteria();
        $criteria->order = 'subscribe_time desc';
        $criteria->addCondition('uid='.Yii::app()->session['user']->id);
        $criteria->addCondition('status=1');
        $count = WxuserModel::model()->count($criteria);
        $pager = new CPagination($count);
        $pager->pageSize =10;
        $pager->applyLimit($criteria);
        $wxUserData = WxuserModel::model()->findAll($criteria);
        $this->render('index',array('wxUserData'=>$wxUserData,'pages'=>$pager));
    }

    public function actionView(){
        $openid = Yii::app()->request->getParam('openid');
        $wxUserModel = new WxuserModel();
        $wxUserModel->id = Yii::app()->request->getParam('id');
        $data = $this->getUserDetailInfo($openid);
        if($data){
            $data = CJSON::decode($data);
            $wxUserModel->nickname = $data['nickname'];
            $wxUserModel->sex = $data['sex'];
            $wxUserModel->language = $data['language'];
            $wxUserModel->city = $data['city'];
            $wxUserModel->province = $data['province'];
            $wxUserModel->country = $data['country'];
            $wxUserModel->headimgurl = $data['headimgurl'];
            $wxUserModel->subscribe_time = $data['subscribe_time'];
            $wxUserModel->updateWxuser();
        }
        $wxUserData = $wxUserModel->getWeixinUserById();
        $criteria = new CDbCriteria();
        $criteria->order = 'add_time asc';
        $criteria->addCondition('uid='.Yii::app()->session['user']->id);
        $criteria->addCondition("from_openid='{$openid}' or to_openid='{$openid}'");
        $count = MsgListModel::model()->count($criteria);
        $pager = new CPagination($count);
        $pager->pageSize =10;
        $pager->applyLimit($criteria);
        $msgData = MsgListModel::model()->findAll($criteria);
        if(!$msgData){
            $msgData = null;
        }
        $this->render('view',array('wxUserData'=>$wxUserData,'msgdata'=>$msgData,'pages'=>$pager,'openid'=>$openid));
    }

    public function actionSendMsgView(){
        $wxUserModel = new WxuserModel();
        $wxUserModel->id = Yii::app()->request->getParam('id');
        $wxUserData = $wxUserModel->getWeixinUserById();
        $this->render('sendmsgview',array('wxUserData'=>$wxUserData));
    }

    public function actionSendMsg(){
        $content = Yii::app()->request->getParam('content');
        $openid = Yii::app()->request->getParam('openid');
        $data = array("touser"=>$openid,"msgtype"=>'text',"text"=>array("content"=>$content));
        $result = $this->sendMsgToUser($this->encode($data));
        $result = CJSON::decode($result,true);
        if($result['errcode'] == 0){
            $msglistModel = new MsgListModel();
            $msglistModel->uid = Yii::app()->session['user']->id;
            $msglistModel->to_openid = $openid;
            $msglistModel->from_openid = Yii::app()->session['user']->wx_openid;
            $msglistModel->content = $content;
            $msglistModel->type = 'text';
            $msglistModel->insertMsg();
            echo CJSON::encode(array('code'=>0,'msg'=>'发送成功'));
        }else{
            echo CJSON::encode(array('code'=>-1,'msg'=>$result['errmsg']));
        }
    }



}