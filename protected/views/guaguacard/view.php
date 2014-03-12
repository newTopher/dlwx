<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/msg.css" rel="stylesheet">

<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2>刮刮卡活动设置</h2>
        </div>

        <div class="box-content">
            <form class="form-horizontal" method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/Guaguacard/Updateguagua">
                <fieldset>
                    <input type="hidden" name="k_id" value="<?php echo $guaguadata->keywords_id; ?>">
                    <input type="hidden" name="id" value="<?php echo $guaguadata->id; ?>">
                    <div class="control-group">
                        <label class="control-label" >活动名称</label>
                        <div class="controls">
                            <input type="text" name="name" value="<?php echo $guaguadata->name; ?>" id="name">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">触发关键词</label>
                        <div class="controls">
                            <input type="text" name="keywords" value="<?php echo $guaguadata->keywords; ?>" id="keywords">
                            <span class="help-inline">如果有多个关键词请用空格隔开每个关键词!</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">图文消息标题</label>
                        <div class="controls">
                            <input type="text" name="index_title" value="<?php echo $guaguadata->index_title; ?>" id="index_title">
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
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/upload/slider/<?php echo $guaguadata->index_image; ?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" >活动简短描述</label>
                        <div class="controls">
                            <textarea name="description" style="height:120px;width: 320px" id="description"><?php echo $guaguadata->description; ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="date01">活动时间</label>
                        <div class="controls">
                            <input type="text" name="start_date" style="width:120px;"  data-date-format="dd-mm-yyyy" class="input-xlarge datepicker" id="date01" value="<?php echo $guaguadata->start_date; ?>"> ~
                            <input type="text" name="end_date" style="width:120px;"  data-date-format="dd-mm-yyyy" class="input-xlarge datepicker" id="date02" value="<?php echo $guaguadata->end_date; ?>">
                            <span class="help-inline">设置本次活动的起止时间!</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">活动中奖概率</label>
                        <div class="controls">
                            <div class="input-append">
                                <input id="appendedInput" size="16" type="text" name="chance" value="<?php echo $guaguadata->chance; ?>" class="chance"><span class="add-on">%</span>

                                <span class="help-inline">设置本次活动的中奖概率范围为0~100!</span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">用户每天参与次数</label>
                        <div class="controls">
                            <div class="input-append">
                                <input id="appendedInput" size="16" type="text" name="user_everyday_times" value="<?php echo $guaguadata->user_everyday_times; ?>" class="user_everyday_times"><span class="add-on">次</span>

                                <span class="help-inline">每个用户每天可以参与次数</span>
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
                                <?php $prize = CJSON::decode($guaguadata->prizetext) ;?>
                                <tr>
                                    <td>一等奖</td>
                                    <td><input type="text" name="one_name" id="one_name" style="width:120px;"  class="input-xlarge" value="<?php echo $prize['one']['one_name']; ?>"></td>
                                    <td>
                                        <div class="input-append">
                                            <input id="appendedInput" name="one_no" class="one_no" size="16" value="<?php echo $prize['one']['one_nu']; ?>" type="text"><span class="add-on">个</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>二等奖</td>
                                    <td><input type="text" name="two_name" id="two_name" style="width:120px;"  class="input-xlarge" value="<?php echo $prize['two']['two_name']; ?>"></td>
                                    <td>
                                        <div class="input-append">
                                            <input id="appendedInput" name="two_no" class="two_no" size="16" type="text" value="<?php echo $prize['two']['two_nu']; ?>"><span class="add-on">个</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>三等奖</td>
                                    <td><input type="text" name="three_name" id="three_name" style="width:120px;"  class="input-xlarge" value="<?php echo $prize['three']['three_name']; ?>"></td>
                                    <td>
                                        <div class="input-append">
                                            <input id="appendedInput" name="three_no" class="three_no" size="16" type="text" value="<?php echo $prize['three']['three_nu']; ?>"><span class="add-on">个</span>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>


                            </table>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <input type="hidden" name="index_image" id="index_image" value="<?php echo $guaguadata->index_image; ?>">
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