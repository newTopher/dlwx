<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/msg.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ckeditor/ckeditor.js"></script>

<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2>团购设置</h2>
        </div>

        <div class="box-content">
            <form class="form-horizontal" method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/TuanManage/Inserttuan">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" >团购名称</label>
                        <div class="controls">
                            <input type="text" name="name" value="" id="name">
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label">团购图片</label>
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
                        <div id="showimg" class="showimg" style="margin-left:160px;width:280px;margin-top: 10px;">
                                <i class="appmsg_thumb default">团购图片</i>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">团购单价</label>
                        <div class="controls">
                            <div class="input-append">
                                <input id="appendedInput" size="16" type="text" name="price" value="" class="user_everyday_times"><span class="add-on">元</span>

                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">团购原价</label>
                        <div class="controls">
                            <div class="input-append">
                                <input id="appendedInput" size="16" type="text" name="o_price" value="" class="user_everyday_times"><span class="add-on">元</span>

                                <span class="help-inline">团购的原价</span>
                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">团购数量</label>
                        <div class="controls">
                            <div class="input-append">
                                <input id="appendedInput" size="16" type="text" name="sum" value="" class="user_everyday_times"><span class="add-on">份</span>
                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">用户一次最多购买数量</label>
                        <div class="controls">
                            <div class="input-append">
                                <input id="appendedInput" size="16" type="text" name="every_limit" value="" class="user_everyday_times"><span class="add-on">份</span>

                                <span class="help-inline">每个用户最多可以购买的数量，0为不限制</span>
                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">默认参团人数</label>
                        <div class="controls">
                            <div class="input-append">
                                <input id="appendedInput" size="16" type="text" name="init_num" value="0" class="user_everyday_times"><span class="add-on">人</span>

                                <span class="help-inline">开始团购后初始的参团人数</span>
                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="date01">团购时间</label>
                        <div class="controls">
                            <input type="text" name="start_date" style="width:120px;"  data-date-format="dd-mm-yyyy" class="input-xlarge datepicker" id="date01" value=""> ~
                            <input type="text" name="end_date" style="width:120px;"  data-date-format="dd-mm-yyyy" class="input-xlarge datepicker" id="date02" value="">
                            <span class="help-inline">设置本次团购的起止时间!</span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" >团购简介</label>
                        <div class="controls">
                            <textarea name="description" style="height:120px;width: 320px" id="description"></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" >参团须知</label>
                        <div class="controls">
                            <textarea name="need_know" style="height:120px;width: 320px" id="description"></textarea>
                        </div>
                    </div>

                    <div class="control-group" id="text_box">
                        <label class="control-label" for="focusedInput">团购详细内容</label>
                        <div class="controls">
                            <textarea name="tuan_detail" id="text_content"></textarea>
                        </div>
                        <script type="text/javascript">
                            CKEDITOR.replace( 'tuan_detail' );
                        </script>
                    </div>





                    <div class="control-group">
                        <div class="controls">
                            <input type="hidden" name="index_image" id="index_image" value="">
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