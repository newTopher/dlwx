<?php
class CallingcardManageController extends Controller{

    public $layout='//layouts/column3';

    public  function actionIndex(){
        $callingcard = new CallingcardManageModel();
        $list=$callingcard->getAllOrderByUid(Yii::app()->session['user']->id);
        $this->render('index',array('list'=>$list));
    }

    public function actionAdd(){
        $callingcard= new CallingcardManageModel();
        if($_POST){
            $KeywordsReplay=new KeywordsReplayModel();
            $KeywordsReplay->keywords = Yii::app()->request->getParam('keywords','');
            $KeywordsReplay->source_id=0;
            $KeywordsReplay->source_type=0;
            $KeywordsReplay->type='CallingCard';
            $KeywordsReplay->preg_type=1;
            $KeywordsReplay->uid=Yii::app()->session['user']->id;
            $callingcard->uid=Yii::app()->session['user']->id;
            $callingcard->kid=$KeywordsReplay->insertKeywords();
            $callingcard->keywords =  Yii::app()->request->getParam('keywords');
            $callingcard->title =  Yii::app()->request->getParam('title');
            $callingcard->image_path =  Yii::app()->request->getParam('image_path');
            $callingcard->job =  Yii::app()->request->getParam('job');
            $callingcard->company =  Yii::app()->request->getParam('company');
            $callingcard->name =  Yii::app()->request->getParam('username');
            $callingcard->introduce =  Yii::app()->request->getParam('introduce');
            $callingcard->head_image_path =  Yii::app()->request->getParam('head_image_path');
            $callingcard->mobilephone =  Yii::app()->request->getParam('mobilephone');
            $callingcard->tel1 =  Yii::app()->request->getParam('tel1');
            $callingcard->tel2 =  Yii::app()->request->getParam('tel2');
            $callingcard->qrcode =  Yii::app()->request->getParam('qrcode');
            $callingcard->email =  Yii::app()->request->getParam('email');
            $callingcard->qq =  Yii::app()->request->getParam('qq');
            $callingcard->website =  Yii::app()->request->getParam('website');
            $callingcard->address =  Yii::app()->request->getParam('address');
            $callingcard->background_path =  Yii::app()->request->getParam('background_path');
            $callingcard->nav_data = json_encode(Yii::app()->request->getParam('nav_data')) ;
            if($callingcard->settingInsert()){
               $this->redirect(Yii::app()->request->baseUrl.'/CallingcardManage/Index');
            }else{

            }
        }
            $this->render('add');
    }

    public function actionDelete(){
        if(Yii::app()->request->getParam('id')){
            $CallingcardManage=new CallingcardManageModel();
            $KeyWords=new KeywordsReplayModel();
            $CallingcardManage->id=Yii::app()->request->getParam('id');
            $KeyWords->id=Yii::app()->request->getParam('kid');
            if($CallingcardManage->deleteCards() && $KeyWords->delKeyWordsById()){
                $this->redirect(Yii::app()->request->baseUrl.'/CallingcardManage/Index');
            }else{

            }
        }
    }

    public function actionCallingupdate(){
        if(Yii::app()->request->getParam('id')){
            $CallingcardManage=new CallingcardManageModel();
            $card = $CallingcardManage->getCallingCardByid(Yii::app()->request->getParam('id'));
            $KeyWords=new KeywordsReplayModel();
            $KeyWords->id=Yii::app()->request->getParam('kid');
            $keys=$KeyWords->getKeyWordById();
        }
        $this->render('update',array('card'=>$card,'key'=>$keys));
    }

    public function actionUpdate(){
        $callingcard= new CallingcardManageModel();

            $KeywordsReplay=new KeywordsReplayModel();
            $KeywordsReplay->keywords = Yii::app()->request->getParam('keywords','');
            $KeywordsReplay->id = Yii::app()->request->getParam('kid','');
            $KeywordsReplay->updateKeywords();
            $callingcard->uid=Yii::app()->session['user']->id;
            $callingcard->keywords =  Yii::app()->request->getParam('keywords','');
            $callingcard->title =  Yii::app()->request->getParam('title','');
            $callingcard->image_path =  Yii::app()->request->getParam('image_path','');
            $callingcard->job =  Yii::app()->request->getParam('job','');
            $callingcard->company =  Yii::app()->request->getParam('company','');
            $callingcard->name =  Yii::app()->request->getParam('username','');
            $callingcard->introduce =  Yii::app()->request->getParam('introduce','');
            $callingcard->head_image_path =  Yii::app()->request->getParam('head_image_path','');
            $callingcard->mobilephone =  Yii::app()->request->getParam('mobilephone','');
            $callingcard->tel1 =  Yii::app()->request->getParam('tel1','');
            $callingcard->tel2 =  Yii::app()->request->getParam('tel2','');
            $callingcard->qrcode =  Yii::app()->request->getParam('qrcode','');
            $callingcard->email =  Yii::app()->request->getParam('email','');
            $callingcard->qq =  Yii::app()->request->getParam('qq','');
            $callingcard->website =  Yii::app()->request->getParam('website','');
            $callingcard->address =  Yii::app()->request->getParam('address','');
            $callingcard->background_path =  Yii::app()->request->getParam('background_path','');
            $callingcard->nav_data = json_encode(Yii::app()->request->getParam('nav_data','')) ;
            if($callingcard->settingUpdate(Yii::app()->request->getParam('id'))){
                $this->redirect(Yii::app()->request->baseUrl.'/CallingcardManage/Index');
            }else{
                $this->redirect(Yii::app()->request->baseUrl.'/CallingcardManage/Index');
            }



    }
}