<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/msg.css" rel="stylesheet">

<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2>优惠券活动设置</h2>
        </div>

        <div class="box-content">
            <form class="form-horizontal" method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/MemberManage/Cusset">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" >活动名称</label>
                        <div class="controls">
                            <input type="text" name="name" value="<?php if($data!=null){ echo $data->name;} ?>" id="name">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">触发关键词</label>
                        <div class="controls">
                            <input type="text" name="keywords" value="" id="keywords">
                            <span class="help-inline">如果有多个关键词请用空格隔开每个关键词!</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">图文消息标题</label>
                        <div class="controls">
                            <input type="text" name="index_title" value="<?php if($data!=null){ echo $data->index_title;} ?>" id="index_title">
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
                            <?php if($data!=null): ?>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/upload/slider/<?php echo $data->index_image; ?>" />
                            <?php else : ?>
                                <i class="appmsg_thumb default">封面图片</i>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" >简短描述</label>
                        <div class="controls">
                            <textarea name="description" style="height:120px;width: 320px" id="description"><?php if($data!=null){ echo $data->description;} ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="date01">活动时间</label>
                        <div class="controls">
                            <input type="text" name="start_date" style="width:120px;"  data-date-format="dd-mm-yyyy" class="input-xlarge datepicker" id="date01" value="<?php if($data!=null){ echo $data->start_date;} ?>"> ~
                            <input type="text" name="end_date" style="width:120px;"  data-date-format="dd-mm-yyyy" class="input-xlarge datepicker" id="date02" value="<?php if($data!=null){ echo $data->end_date;} ?>">
                            <span class="help-inline">设置本次活动的起止时间!</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">活动中奖概率</label>
                        <div class="controls">
                            <div class="input-append">
                                <input id="appendedInput" size="16" type="text" id="chance" name="chance" value="<?php if($data!=null){ echo $data->chance;} ?>"><span class="add-on">%</span>

                                <span class="help-inline">设置本次活动的中奖概率范围为0~100!</span>
                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">奖品设置</label>
                        <div class="controls">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>奖项名称</th>
                                    <th>奖品名称</th>
                                    <th>奖品数量</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>一等奖</td>
                                    <td><input type="text" name="one_name" style="width:120px;"  class="input-xlarge" value=""></td>
                                    <td>
                                        <div class="input-append">
                                            <input id="appendedInput" name="one_no" size="16" type="text"><span class="add-on">个</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>二等奖</td>
                                    <td><input type="text" name="two_name" style="width:120px;"  class="input-xlarge" value=""></td>
                                    <td>
                                        <div class="input-append">
                                            <input id="appendedInput" name="two_no" size="16" type="text"><span class="add-on">个</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>三等奖</td>
                                    <td><input type="text" name="three_name" style="width:120px;"  class="input-xlarge" value=""></td>
                                    <td>
                                        <div class="input-append">
                                            <input id="appendedInput" name="three_no" size="16" type="text"><span class="add-on">个</span>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>


                            </table>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <input type="hidden" name="index_image" id="index_image" value="<?php if($data!=null){ echo $data->index_image;} ?>">
                        </div>

                    </div>

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
        if($("#cust_name").val().length == 0){
            notif({
                type: "warning",
                msg: '商家名称不能为空',
                position: "center",
                width:"all",
                height:100,
                opacity: 1
            });
            return false;
        }
        if($("#tel").val().length == 0){
            notif({
                type: "warning",
                msg: '商家电话不能为空',
                position: "center",
                width:"all",
                height:100,
                opacity: 1
            });
            return false;
        }
        if($("#address").val().length == 0){
            notif({
                type: "warning",
                msg: '商家详细地址不能为空',
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
                msg: '图文信息不能为空',
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
<script type="text/javascript">
    $(function(){
        $('.datepicker').datepicker({dateFormat: 'yy-mm-dd'});
    });
</script>