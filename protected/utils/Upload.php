<?php
/**
 * @desc 对后台上传的图片进行简单处理<br> * @author Debm!
 * @param $name 原图片名称
 * @param $type 判断mime值
 * @param $tmp_name 临时位置,转换目录使用
 * @param $width 新图宽
 * @param $height 新图高
 * @return string path 存放路径
 */
class Upload{
    public static function createImageLink($name, $type, $tmp_name,$dir='images'){
        $imageMime = array(
            'image/gif',
            'image/jpeg',
            'image/jpg',
            'image/bmp',
            //需要时添加...
        );
        if(!in_array($type, $imageMime)){
            return false;
        }else{
            //获取图片后缀
            $ar = explode('.', $name);
            $imageExt = end($ar);
            //以当前时间命名此图片，避免重复
            $name = time().uniqid().'.'.$imageExt;
            //创建存放路径
            $path = Yii::getPathOfAlias('webroot').'/upload/'.$dir.'/'.$name;
            //图片处理
            $image = Yii::app()->image->load($tmp_name);
            //$image->resize($width, $height)->rotate(0)->quality(100)->sharpen(20);
            $image->save($path);
            // move_uploaded_file($tmp_name,$path);
            return $name;
        }
    }
}
