<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-17
 * Time: 下午4:41
 * To change this template use File | Settings | File Templates.
 */
class MwapweiController extends CController{

    public $layout='//layouts/column4';

    public function actionI(){
        $id = Yii::app()->request->getParam('id');
        $openid = Yii::app()->request->getParam('f');
        if(!empty($id)){
            $uid = MemberCardModel::getMemberCardById($id)->uid;
            $this->redirect(Yii::app()->request->baseUrl.'/Member/I/sid/'.$uid.'/f/'.$openid);
        }else{
            echo '非法请求';
        }
    }



}