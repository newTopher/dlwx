<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-3-20
 * Time: 上午9:17
 * To change this template use File | Settings | File Templates.
 */
class TradeController extends Controller{

    public $layout='//layouts/column3';

    public function actionVshop(){
        if(ShopAdminModel::findById(Yii::app()->session['user']->id)){
            $this->redirect('http://vshop.wapwei.com/index.php?g=admin&m=index&a=login&username='.Yii::app()->session['user']->email.'&password='.Yii::app()->session['user']->password);
        }else{
            $adminModel = new ShopAdminModel();
            $adminModel->id = Yii::app()->session['user']->id;
            $adminModel->role_id = 1;
            $adminModel->username = Yii::app()->session['user']->email;
            $adminModel->password = Yii::app()->session['user']->password;
            $adminModel->status = 1;
            if($adminModel->insertAdmin()){
                $this->redirect('http://vshop.wapwei.com/index.php?g=admin&m=index&a=login&username='.$adminModel->username.'&password='.$adminModel->password);
            }else{
                $this->redirect(Yii::app()->request->baseUrl.'/User/Home');
            }
        }
    }

}