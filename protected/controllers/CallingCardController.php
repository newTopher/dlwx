<?php
class CallingCardController extends Controller{

    public $layout='//layouts/column4';

    public function actionIndex(){
        $uid=Yii::app()->request->getParam('sid');
        $f=Yii::app()->request->getParam('f');
        $c=Yii::app()->request->getParam('c');
        $callingcard=new CallingcardManageModel();
        $list=$callingcard->getCallingCardByid($c);
        $this->render('card',array('list'=>$list));
    }



}
?>