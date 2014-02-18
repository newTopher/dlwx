<script type="text/javascript">
    function selectShopAddress(object){
        $('#myModal').modal('hide')
        $("#pox").val(object.x);
        $("#poy").val(object.y);
        $("#map_select").text("已标记好地理位置");
    }
</script>
<div id="myModal" style="width:800px;height: 550px;" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">选择地理位置</h3>
    </div>
    <div class="modal-body">
        <iframe frameborder=0 width="750" height="400" src="<?php echo Yii::app()->request->baseUrl;?>/map?callback=selectShopAddress"></iframe>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
    </div>
</div>
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 店铺设置</h2>

        </div>
        <div class="box-content">
            <div class="box-content">
                <form class="form-horizontal">
                    <input type="hidden" name="id" value="">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">店铺名称</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="name" type="text" value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">店铺电话</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="name" id="focusedInput" type="text" value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">地理位置</label>
                            <div class="controls">
                                <a href="#myModal" role="button" class="btn btn-small btn-warning" data-toggle="modal">选择地理位置</a>
                                <input class="input-xlarge focused" name="position_x" id="pox" type="hidden" value="">
                                <input class="input-xlarge focused" name="position_y" id="poy" type="hidden" value="">
                                <span class="help-inline" id="map_select">未标记地理位置</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">店铺地址</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="name" type="text" value="">
                            </div>
                        </div>
                        <input type="hidden" name="with_image" id="filename" />
                        <div class="control-group">
                            <label class="control-label">店铺封面图片</label>
                            <div class="controls">
                                <span id="upBtn"></span>
                                <a href="javascript:;" class="btn btn-primary" id="import_begin">上传</a>
                                <span id="showErrInfo" style="color: red"></span>
                                <?php if(isset($webdata->index_image)): ?>
                                    <div  style="margin-top: 10px;margin-left: 2px;">
                                        <img src="<?php echo Yii::app()->getBaseUrl().'/upload/wxwebsite/'.$webdata->index_image; ?>" class="img-rounded" style="width: 160px; height: 100px;">
                                    </div>
                                <?php endif; ?>
                                <p class="help-block"><span class="label label-info">建议</span>&nbsp;尺寸480*320像素</p>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">保存</button>
                            <button class="btn">取消</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        /*
         $("#upBtn").bind("click",function(){
         $.ajaxFileUpload({
         url:"php/uploadfile.php",
         loadPicUrl:"images/loading.gif",
         formElemIds:["username","userpwd","uploadFile1","uploadFile2"],
         dataType:"html",
         success:function(data){
         $("body").html(data);
         },
         error:function(data){
         alert(data);
         }
         });
         });
         */
        $.jUploader({
            button: 'upBtn', // 这里设置按钮id
            action: '<?php echo Yii::app()->request->baseUrl; ?>/wxfood/Upload/File', // 这里设置上传处理接口，这个加了参数test_cancel=1来测试取消
            eventType:2,//触发类型
            addeventbutton:'import_begin',// 要绑定事件的元素的id
            filenamed:'filename',//存放选择的文件路径的文本框的id
            onUpload: function (fileName) {
                $('#photo2').hide();
                $('#loading2').show();
            },
            onComplete: function (fileName, response) {
                // response是json对象，格式可以按自己的意愿来定义，例子为： { success: true, fileUrl:'' }
                if (response.success) {

                } else {

                }
            },
            onCancel: function (fileName) {
                $('#photo2').show();
                $('#loading2').hide();
            }
        });
    });
</script>
</div>
</div>