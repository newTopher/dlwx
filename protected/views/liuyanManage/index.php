<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/msg.css" rel="stylesheet">

<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2>留言板设置</h2>
        </div>

        <div class="box-content" style="min-height: 550px;">
            <form class="form-horizontal" method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/LiuyanManage/Insertliuyan">
                <fieldset>
                    <input type="hidden" name="id" value="<?php if($liuyanlist != null){ echo $liuyanlist->id; }?>">
                    <div class="control-group">
                        <label class="control-label" >留言板名称</label>
                        <div class="controls">
                            <input type="text" name="name" value="<?php if($liuyanlist != null){ echo $liuyanlist->name; }?>" id="name">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">图文消息标题</label>
                        <div class="controls">
                            <input type="text" name="index_title" value="<?php if($liuyanlist != null){ echo $liuyanlist->index_title; }?>" id="index_title">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">图文消息封面</label>
                        <div class="btn btn-info" style="margin-left: 20px; width: 80px;height: 18px;">
                            选择图片
                            <input  class="filecss fileupload" type="file" name="sliderimage" >
                        </div>
                        <a class="btn uploadbtn" >上传</a>
                        <span class="help-inline">图片建议尺寸：640*360px!</span>
                        <div id="zhezhao">
                            <div id="loading" class="loading">

                            </div>
                        </div>
                        <div id="showimg" class="showimg" style="margin-left:160px;width:320px;margin-top: 10px;">
                            <?php if($liuyanlist!=null): ?>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/upload/slider/<?php echo $liuyanlist->index_image; ?>" />
                            <?php else : ?>
                                <i class="appmsg_thumb default">封面图片</i>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" >留言板简短描述</label>
                        <div class="controls">
                            <textarea name="description" style="height:120px;width: 320px" id="description"><?php if($liuyanlist != null){ echo $liuyanlist->description; }?></textarea>
                        </div>
                    </div>


                    <div class="control-group">
                        <div class="controls">
                            <input type="hidden" name="index_image" id="index_image" value="<?php if($liuyanlist != null){ echo $liuyanlist->index_image; }?>">
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

        <div class="box-header well">
            <h2>留言列表</h2>
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>序号</th>
                <th>用户昵称</th>
                <th>留言内容</th>
                <th>留言时间</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if($liulistdata): ?>
                <?php foreach($liulistdata as $k=>$v): ?>
                    <tr>
                        <td><?php echo $v['one']['id']; ?></td>
                        <td><?php echo $v['one']['name']; ?></td>
                        <td><?php echo $v['one']['content']; ?></td>
                        <td><?php echo date("Y-m-d H:i:s",$v['one']['add_time']); ?></td>
                        <td>
                            <a onclick="return confirm('确定要删除此条评论吗？')" href="<?php echo Yii::app()->request->baseUrl; ?>/AutoReplay/DelKeyword/id/<?php echo $v['one']['id']; ?>" class="btn btn-mini btn-danger">删除</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="alert alert-info" style="margin-top: 10px;">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>提示信息!</strong>您还没有添加任何关键词哦!.
                </div>
            <?php endif; ?>
            </tbody>
        </table>

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
                    $("#index_image").val(data.pic);
                    showimg.html("<img width='320px'  height='180px' src='"+img+"'><a onclick='delimage(this)' datadir='slider' style='margin-left:40px' data='"+data.pic+"' class='btn btn-mini btn-danger del_btn'>删除</a>");
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
            $("#index_image").val("");
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

    if($("#keywords").val().length == 0){
        notif({
            type: "warning",
            msg: '触发关键词不可为空',
            position: "center",
            width:"all",
            height:100,
            opacity: 1
        });
        return false;
    }
    if($("#index_title").val().length == 0){
        notif({
            type: "warning",
            msg: '图文信息标题不能为空',
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
    if($("#date01").val().length == 0){
        notif({
            type: "warning",
            msg: '请选择活动开始时间',
            position: "center",
            width:"all",
            height:100,
            opacity: 1
        });
        return false;
    }

    if($("#date02").val().length == 0){
        notif({
            type: "warning",
            msg: '请选择活动结束时间',
            position: "center",
            width:"all",
            height:100,
            opacity: 1
        });
        return false;
    }

    if($(".chance").val().length == 0 || $(".chance").val() < 0 || $(".chance").val() > 100){
        notif({
            type: "warning",
            msg: '中奖概率填写错误，为0~100的数字',
            position: "center",
            width:"all",
            height:100,
            opacity: 1
        });
        return false;
    }

    if($(".user_everyday_times").val().length == 0){
        notif({
            type: "warning",
            msg: '用户每天参数次数没填写，只能是数字',
            position: "center",
            width:"all",
            height:100,
            opacity: 1
        });
        return false;
    }

    if($("#one_name").val().length == 0){
        notif({
            type: "warning",
            msg: '一等奖奖品名称不能为空',
            position: "center",
            width:"all",
            height:100,
            opacity: 1
        });
        return false;
    }

    if($(".one_no").val().length == 0){
        notif({
            type: "warning",
            msg: '一等奖奖品数量不能为空，只能是数字',
            position: "center",
            width:"all",
            height:100,
            opacity: 1
        });
        return false;
    }

    if($("#two_name").val().length == 0){
        notif({
            type: "warning",
            msg: '二等奖奖品名称不能为空',
            position: "center",
            width:"all",
            height:100,
            opacity: 1
        });
        return false;
    }

    if($(".two_no").val().length == 0){
        notif({
            type: "warning",
            msg: '二等奖奖品数量不能为空，只能是数字',
            position: "center",
            width:"all",
            height:100,
            opacity: 1
        });
        return false;
    }

    if($("#three_name").val().length == 0){
        notif({
            type: "warning",
            msg: '三等奖奖品名称不能为空',
            position: "center",
            width:"all",
            height:100,
            opacity: 1
        });
        return false;
    }

    if($(".three_no").val().length == 0){
        notif({
            type: "warning",
            msg: '三等奖奖品数量不能为空，只能是数字',
            position: "center",
            width:"all",
            height:100,
            opacity: 1
        });
        return false;
    }



});


</script>
<script type="text/javascript">
    $(function(){
        $('.datepicker').datepicker({dateFormat: 'yy-mm-dd'});
    });
</script>