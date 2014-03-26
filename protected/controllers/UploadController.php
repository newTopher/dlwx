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
        if(isset($_FILES['sliderimage'])){
            $dir = 'slider';
            $name = $_FILES['sliderimage']['name']; //上传图片原名
            $type = $_FILES['sliderimage']['type']; //上传图片mime类型
            $picsize = $_FILES['sliderimage']['size'];
            $tmp_name = $_FILES['sliderimage']['tmp_name']; //上传图片临时存放位置
            $indexImageUrl = Upload::createImageLink($name, $type, $tmp_name,$dir);
            $size = round($picsize/1024,2);
            $arr = array(
                'name'=>$name,
                'pic'=>$indexImageUrl,
                'size'=>$size
            );
            echo CJSON::encode($arr);
        }
    }

    public function actionDelimage(){
        $name = Yii::app()->request->getParam('name');
        $path = Yii::getPathOfAlias('webroot').$name;
        if(file_exists($path)){
            if(unlink($path)){
                $result = array(
                    'code'=>0,
                    'msg'=>'成功'
                );
            }else{
                $result = array(
                    'code'=>-2,
                    'msg'=>'失败'
                );
            }
        }else{
            $result = array(
                'code'=>-1,
                'msg'=>'失败'
            );
        }
        echo CJSON::encode($result);
    }

}