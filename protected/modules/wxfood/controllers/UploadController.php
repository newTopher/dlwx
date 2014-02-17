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
        // 上传文件1
        $upFile01Name = $_FILES['with_image']['name'];
        $upFile01Size = $_FILES['with_image']['size'];
        $upFile01TmpNm = $_FILES['with_image']['tmp_name'];
        $upFile01Type = $_FILES['with_image']['type'];
        $upFile01Err = $_FILES['with_image']['error'];
        if ($upFile01Name == ''){
            $this->setOperateFlag('false',"请上传文件!");
            //echo "<script>alert('请上传文件!');</script>";
        }else{
            if ($upFile01Err > 0){
                //$upFile01Err > 0 ? parseFileErr($upFile01Name, $upFile01Err) : "";
                //$upFile02Err > 0 ? parseFileErr($upFile02Name, $upFile02Err) : "";
                $this->setOperateFlag('false',"上传失败!");
            }else{
                if (!$this->checkFileTypeAndSize($upFile01Type, $upFile01Size)){
                    $this->setOperateFlag('false','上传的文件过大!');
                    //echo "<script>alert('上传的文件过大!');</script>";
                }else{
                    $this->setOperateFlag('true',"成功");
                    move_uploaded_file($upFile01TmpNm, $this->checkFileExists($upFile01Name));
                    $this->resultDataFtn();// 结果数据处理
                }
            }
        }
    }

    private function setOperateFlag($flag,$tipInfo){
        echo "<input type='hidden' id='errFlag' name='errFlag' value='" . $flag . "' />";
        echo "<input type='hidden' id='errInfo' name='errInfo' value='" . $tipInfo . "' />";
    }

    private function resultDataFtn(){
        $reqUserNm = $_REQUEST["username"];
        $reqUserPwd = $_REQUEST["userpwd"];
        $reqDataTp = $_REQUEST["dataTp"];
        echo "<div id='resultData'>";
        if ($reqDataTp == 'html'){
            echo "<h1 style='color:red'>PHP Ajax 多文件上传成功</h1>";
        }elseif ($reqDataTp == 'json'){
            $jsonArr = array("username"=> $reqUserNm,
                "userpwd" => $reqUserPwd,
                "dataType" => $reqDataTp,
                "retTipInfo" => "PHP Ajax 多文件上传 成功");
            echo json_encode($jsonArr);
        }
        echo "</div>";
    }

    private function checkFileTypeAndSize($upFileTp,$upFileSize){
        if ($upFileSize < 28480){
            return true;
        }else{
            return false;
        }
    }

    private function checkFileExists($upFileNm){
        if (file_exists($upFileNm)){
            return "tp0_" . $upFileNm;// 已存在文件改名字保存
        }else{
            return $upFileNm;
        }
    }

}