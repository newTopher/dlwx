<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-1-10
 * Time: 上午12:21
 * To change this template use File | Settings | File Templates.
 */
class MsgController extends Controller{

    public $layout='//layouts/column3';

    public function actionIndex(){
        $to_openid = Yii::app()->session['user']->wx_openid;
        $to_openid = (string) $to_openid;
        $criteria = new CDbCriteria();
        $criteria->addCondition('uid='.Yii::app()->session['user']->id);
        $criteria->addCondition("to_openid='".$to_openid."'");
        $criteria->order = 'add_time desc';
        $count = MsgListModel::model()->count($criteria);
        $pager = new CPagination($count);
        $pager->pageSize =10;
        $pager->applyLimit($criteria);
        $msgData = MsgListModel::model()->findAll($criteria);

        $this->render('index',array('msgData'=>$msgData,'pages'=>$pager));
    }

}