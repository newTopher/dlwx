<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/msg.css" rel="stylesheet">

<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2>相册设置</h2>
        </div>

        <div class="box-content">
            <form class="form-horizontal" method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/PhotoManage/Insertphotolist">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" >相册名称</label>
                        <div class="controls">
                            <input type="text" name="name" value="" id="name">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">相册封面</label>
                        <div class="controls">
                        <input class="input-file uniform_on" name="index_image" id="index_image" type="hidden" size="19" value="">
                        <input type="button" class="btn btn-info" id="image1" value="选择图片" />
                        <span class="help-inline">图片建议尺寸：640*360px!</span>
                        </div>
                        <div id="zhezhao">
                            <div id="loading" class="loading">

                            </div>
                        </div>
                        <div id="showimg" class="showimg" style="margin-left:160px;width:320px;margin-top: 10px;">
                                <i class="appmsg_thumb default">封面图片</i>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" >相册简短描述</label>
                        <div class="controls">
                            <textarea name="description" style="height:120px;width: 320px" id="description"></textarea>
                        </div>
                    </div>


                    <div class="form-actions">
                        <button type="submit" id="card_post_btn" class="btn btn-primary">确定</button>
                        <button class="btn">取消</button>
                    </div>
                </fieldset>
            </form>
        </div>

        <?php if(!empty($msg)):?>
            <div class="msg_fade" id="ui_notifIt" class="info" style="background: deepskyblue; height: 60px; width: 100%; top: 0px; left: 0px;">
                <p style="line-height: 60px;">
                    <b><?php echo $msg;?></b>
                </p>
            </div>
        <?php endif;?>

    </div>
</div>

</div>
</div>

<script>

    KindEditor.ready(function(K) {
        var editor = K.editor({
            allowFileManager : true ,
            fileManagerJson : '<?php echo Yii::app()->request->baseUrl;?>/js/kind/php/file_manager_json.php?dir=image&s=<?php echo Yii::app()->session['user']->id;?>',
            uploadJson : '<?php echo Yii::app()->request->baseUrl;?>/js/kind/php/upload_json.php?dir=image&s=<?php echo Yii::app()->session['user']->id;?>'
        });
        K('#image1').click(function() {
            var showimg = $('#showimg');
            editor.loadPlugin('image', function() {
                editor.plugin.imageDialog({
                    clickFn : function(url, title, width, height, border, align) {
                        K('#index_image').val(url);
                        showimg.html("<img width='320px'  height='180px' src='"+url+"'>");
                        editor.hideDialog();
                    }
                });
            });
        });
    });


    $("#card_post_btn").click(function(){
        if($("#name").val().length == 0){
            notif({
                type: "warning",
                msg: '活动名称不能为空',
                position: "center",
                width:"all",
                height:100,
                opacity: 1
            });
            return false;
        }

        if($("#index_image").val().length == 0){
            notif({
                type: "warning",
                msg: '请上传消息封面图',
                position: "center",
                width:"all",
                height:100,
                opacity: 1
            });
            return false;
        }


    });


</script>
