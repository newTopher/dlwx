<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/msg.css" rel="stylesheet">
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2>添加照片</h2>
        </div>


        <div class="box-content">

            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>提示信息!</strong>  您可以在创建的相册里面添加照片.
            </div>

            <input type="button" class="btn btn-info" id="upload_image" value="添加照片">

            <form class="form-horizontal" method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/PhotoManage/Insertphotolist">

            </form>
            <div id="pw">
                <div class="photo-li" style="width: 240px; height: 133.33333333333334px;">
                    <div class="li-img">
                        <img alt="Large_3f5a486a35e20521097adff32d3f1f17" src="/uploads/album_photo/pic/large_3f5a486a35e20521097adff32d3f1f17.jpg">
                    </div>
                    <div class="li-btn">
                        <div class="li-p">
                            <span class="fl" id="title_span17047" style="width: 80%;">13050659_161523187388_2.jpg</span>
                          <span class="fr" style="display: block;">
                            <a class="btn-edit" data-url="/albums/1706/album_photos/17047" data-id="17047"></a>
                            <a class="btn-detele" onclick="removePhoto(17047)" data-url="/albums/1706/album_photos/17047" id="delete17047"></a>
                          </span>
                        </div>
                        <div class="li-bg"></div>
                    </div>
                </div>


            </div>
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
        K('#upload_image').click(function() {
            editor.loadPlugin('multiimage', function() {
                editor.plugin.multiImageDialog({
                    clickFn : function(urlList) {
                        var div = K('#pw');
                        div.html('');
                        K.each(urlList, function(i, data) {
                            div.append('<div class="img" id="img"><img src="' + data.url + '" border="0" /></div>');
                        });
                        editor.hideDialog();
                    }
                });
            });
        });
    });


</script>
