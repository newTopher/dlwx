<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/msg.css" rel="stylesheet">

<style type="text/css">
    .bg_vip a img{
        padding:5px 5px;
    }
</style>
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="overflow-x: hidden;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">选择会员卡背景图片</h3>
    </div>
    <div class="modal-body">
        <table align="center" cellpadding="0" cellspacing="0" border="0">
            <tbody class="bg_vip">
            <tr>
                <td width="50%"><a href="#" value="1" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/1.png"></a></td>
                <td width="50%"><a href="#" value="2" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/2.png"></a></td>
            </tr><tr>                                    <td width="50%"><a href="#" value="3" class="cur"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/3.png"></a></td>
                <td width="50%"><a href="#" value="4" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/4.png"></a></td>
            </tr><tr>                                    <td width="50%"><a href="#" value="5" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/5.png"></a></td>
                <td width="50%"><a href="#" value="6" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/6.png"></a></td>
            </tr><tr>                                    <td width="50%"><a href="#" value="7" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/7.png"></a></td>
                <td width="50%"><a href="#" value="8" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/8.png"></a></td>
            </tr><tr>                                    <td width="50%"><a href="#" value="9" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/9.png"></a></td>
                <td width="50%"><a href="#" value="10" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/10.png"></a></td>
            </tr><tr>                                    <td width="50%"><a href="#" value="11" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/11.png"></a></td>
                <td width="50%"><a href="#" value="12" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/12.png"></a></td>
            </tr><tr>                                    <td width="50%"><a href="#" value="13" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/13.png"></a></td>
                <td width="50%"><a href="#" value="14" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/14.png"></a></td>
            </tr><tr>                                    <td width="50%"><a href="#" value="15" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/15.png"></a></td>
                <td width="50%"><a href="#" value="16" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/16.png"></a></td>
            </tr><tr>                                    <td width="50%"><a href="#" value="17" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/17.png"></a></td>
                <td width="50%"><a href="#" value="18" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/18.png"></a></td>
                <td width="50%"><a href="#" value="19" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/19.png"></a></td>
            </tr><tr>
                <td width="50%"><a href="#" value="20" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/20.png"></a></td>
                <td width="50%"><a href="#" value="21" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/21.png"></a></td>
            </tr><tr>
                <td width="50%"><a href="#" value="22" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/22.png"></a></td>
            </tr>
            <tr>
                <td width="50%"><a href="#" value="23" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/23.png"></a></td>
                <td width="50%"><a href="#" value="24" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/24.png"></a></td>
            </tr><tr>
                <td width="50%"><a href="#" value="25" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/25.png"></a></td>
                <td width="50%"><a href="#" value="26" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/26.png"></a></td>
            </tr><tr>
                <td width="50%"><a href="#" value="27" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/27.png"></a></td>
                <td width="50%"><a href="#" value="28" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/28.png"></a></td>
            </tr><tr>
                <td width="50%"><a href="#" value="29" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/29.png"></a></td>
                <td width="50%"><a href="#" value="30" class=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/30.png"></a></td>
            </tr>
            </tbody></table>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
    </div>
</div>
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2>会员卡信息设置</h2>
        </div>

        <div class="box-content">
            <form class="form-horizontal" method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/MemberManage/Updatecard">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" >会员卡名称</label>
                        <div class="controls">
                            <input type="text" name="vip_name" value="<?php if($data!=null){ echo $data->vip_name;} ?>" id="vip_name">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">会员卡Logo</label>
                        <div class="btn btn-info" style="margin-left: 20px; width: 80px;height: 18px;">
                            选择图片
                            <input  class="filecss fileupload" type="file" name="sliderimage" >
                        </div>
                        <a class="btn uploadbtn" >上传</a>
                        <span class="help-inline">（请上传png透明格式）大图尺寸建议：640*320px!</span>
                        <div id="zhezhao">
                            <div id="loading" class="loading">

                            </div>
                        </div>
                        <div id="showimg" class="showimg" style="margin-left:160px;width:60px;margin-top: 10px;">
                            <?php if($data->vip_logo!=null): ?>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/upload/slider/<?php echo $data->vip_logo; ?>" />
                            <?php else : ?>
                                <i class="appmsg_thumb default">图片区域</i>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" >会员卡自定义背景</label>
                        <div class="controls">
                            <div class="showimg" style="width:320px;cursor:pointer;" id="vip_index_image">
                                <?php if($data->vip_logo!=null): ?>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/vip/<?php echo $data->vip_style; ?>.png" >
                                    <?php else : ?>
                                    <img src='<?php echo Yii::app()->request->baseUrl; ?>/images/vip/12.png' >
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="vip_style" id="vip_style" value="<?php if($data->vip_style!=null){ echo $data->vip_style;}else{ echo '12'; } ?>">
                    <input type="hidden" name="vip_logo" id="vip_logo" value="<?php if($data->vip_logo!=null){ echo $data->vip_logo;} ?>">

                    <div class="form-actions">
                        <button type="submit" id="card_post_btn" class="btn btn-primary">确定</button>
                        <button class="btn">取消</button>
                    </div>
                </fieldset>
            </form>
        </div>

    </div>
</div>

</div>
</div>

<script>
    $(".fileupload").each(function(){
        $(this).click(function(){
            var zhezhao = $("#zhezhao");
            zhezhao.hide();
            if($("#myupload").attr('action') == undefined){
                $(this).wrap("<form id='myupload' action='<?php Yii::app()->request->baseUrl; ?>/Upload/File' method='post' enctype='multipart/form-data'></form>");
            }
        });
    });

    $(".uploadbtn").each(function(){
        $(this).click(function(){
            var percent = $('.percent');
            var showimg = $('#showimg');
            var zhezhao = $("#zhezhao");
            var btn = $(".btn span");
            $("#myupload").ajaxSubmit({
                dataType:  'json',
                beforeSend: function() {
                    showimg.empty();
                    zhezhao.show();
                    var percentVal = '0%';
                    percent.html(percentVal);
                },
                uploadProgress: function(event, position, total, percentComplete) {
                    $("#zhezhao").attr("class","mask opacity");
                    $("#zhezhao").css('width',$(window).width());
                    $("#zhezhao").css('height',$(window).height());
                    var percentVal = percentComplete + '%';
                    percent.html(percentVal);
                    $("#loading").css('margin-left',$(window).width()/2-50);
                    $("#loading").css('margin-top',$(window).height()/2-10);
                },
                success: function(data) {
                    var img = "<?php echo Yii::app()->request->baseUrl;?>/upload/slider/"+data.pic;
                    zhezhao.hide();
                    if(data.pic==false){
                        notif({
                            type: "error",
                            msg: '上传失败，图片尺寸过大',
                            position: "center",
                            width:"all",
                            height:100,
                            opacity: 1
                        });
                        return false;
                    }else{
                        $("#vip_logo").val(data.pic);
                        showimg.html("<img width='220px'  height='180px' src='"+img+"'><a onclick='delimage(this)' datadir='slider' style='margin-left:40px' data='"+data.pic+"' class='btn btn-mini btn-danger del_btn'>删除</a>");
                    }

                },
                error:function(xhr){
                    notif({
                        type: "error",
                        msg: '上传失败，图片尺寸过大',
                        position: "center",
                        width:"all",
                        height:100,
                        opacity: 1
                    });
                    return false;
                }
            });
        });
    });

    function delimage(obj){
        var dir = $(obj).attr('datadir');
        var name = $(obj).attr('data');
        var i =  parseInt($(obj).attr('edit'));
        $.post("<?php Yii::app()->request->baseUrl; ?>/Upload/Delimage", { dir: dir, name: name },function(json){
            if(json.code == 0){
                $(obj).parent().html("");
                $("#vip_logo").val("");
                notif({
                    type: "success",
                    msg: "删除成功",
                    position: "center",
                    width:"all",
                    height:100,
                    opacity: 1
                });
            }else{
                notif({
                    type: "error",
                    msg: json.msg,
                    position: "center",
                    width:"all",
                    height:100,
                    opacity: 1
                });
                return false;
            }
        },'json');
    }

    $("#card_post_btn").click(function(){
        if($("#vip_name").val().length == 0){
            notif({
                type: "warning",
                msg: '会员卡名称不能为空',
                position: "center",
                width:"all",
                height:100,
                opacity: 1
            });
            return false;
        }

    });

    $("#vip_index_image").click(function(){
        $("#myModal").modal();
    });
    $(".bg_vip a").each(function(){
        $(this).click(function(){
            var html ="<img src='<?php echo Yii::app()->request->baseUrl; ?>/images/vip/"+$(this).attr('value')+".png' >";
            $("#vip_index_image").html("");
            $("#vip_index_image").html(html);
            $("#vip_style").val($(this).attr('value'));
            $("#myModal").modal('hide');
        });
    });
</script>