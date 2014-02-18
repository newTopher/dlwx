<?php
/**
 * Created by IntelliJ IDEA.
 * User: Topher
 * Date: 14-2-16
 * Time: 下午10:52
 * To change this template use File | Settings | File Templates.
 */
class UploadController extends Controller{

    public function actionFile(){
        print_r($_FILES['jUploaderFile']);exit;
    }

}