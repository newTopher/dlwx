<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/msg.css" rel="stylesheet">
<style type="text/css">
    .mapContainer{width:80% !important;float:left;border-right:2px solid #bcbcbc;}
    .mapSearchResult{width:20% !important;float:left;}
    .reverve_field_table td {
        border-left: 1px solid #ddd;
        border-top: 1px dotted #ddd;
        padding: 8px 5px;
    }
    .reverve_field_table {
        border: 1px solid #ddd;
        background: #fff;
        border-left: none;
        width: 90%;
    }
</style>

<ul class="breadcrumb">
    <li>
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/CallingcardManage/Index">名片管理</a> <span class="divider">/</span>
    </li>
    <li>
        <a href="">添加管理</a>
    </li>
</ul>
<div class="row-fluid">
<div class="box span12">
<div class="box-header well">
    <h2><i class="icon-info-sign"></i> 名片设置</h2>
</div>
<div class="box-content">
<form class="form-horizontal" action="<?php echo Yii::app()->request->baseUrl;?>/CallingcardManage/Add" method="post">
    <fieldset>
        <div class="control-group">
            <label class="control-label">触发关键词</label>
            <div class="controls">
                <input type="text" name="keywords" class="notallow1">
                <span class="help-inline"></span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" >图文消息标题</label>
            <div class="controls">
                <input type="text" id="inputSuccess" name="title" class="notallow2">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" >图文消息封面</label>
            <div class="btn btn-info" style="margin-left: 20px; width: 80px;height: 18px;">选择图片
                <input  class="filecss fileupload" type="file" name="sliderimage" >
                <input id="image_path_input" type="hidden" name="image_path" value="" class="notallow3">
            </div>
            <a class="btn uploadbtn" >上传</a>
            <span class="help-inline">图片建议尺寸：640*360px!</span>
            <div id="zhezhao">
                <div id="loading" class="loading">
                </div>
            </div>
            <div id="showimg" class="showimg" style="margin-left:160px;width:320px;margin-top: 10px;">
                <i class="appmsg_thumb default">封面图片</i>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" >简短介绍</label>
            <div class="controls">
                <textarea  style="height:120px;width: 320px" name="introduce" class="notallow4"></textarea>
                <span class="help-inline">设置触发信息的简短介绍</span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" >名片头像</label>
            <div class="btn btn-info" style="margin-left: 20px; width: 80px;height: 18px;">选择头像
                <input  class="filecss fileupload1" type="file" name="sliderimage"  >
                <input id="image_path_input1" type="hidden" name="head_image_path" value="" class="notallow7">
            </div>
            <a class="btn uploadbtn1" >上传</a>
            <span class="help-inline">图片建议尺寸：320*320px!</span>
            <div id="zhezhao1">
                <div id="loading1" class="loading"></div>
            </div>
            <div id="showimg1" class="showimg" style="margin-left:160px;width:250px;margin-top: 10px;">
                <i class="appmsg_thumb default" style="line-height:250px">头像</i>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" >姓名</label>
            <div class="controls">
                <input type="text" name="username">
                <span class="help-inline"></span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" >职位</label>
            <div class="controls">
                <input type="text" name="job">
                <span class="help-inline"></span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" >公司名称</label>
            <div class="controls">
                <input type="text" name="company">
                <span class="help-inline"></span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" >手机</label>
            <div class="controls">
                <input type="text" name="mobilephone">
                <span class="help-inline">设置您常用的手机</span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" >联系电话</label>
            <div class="controls">
                <input type="text" name="tel1">
                <span class="help-inline">设置您的工作电话</span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" >传真</label>
            <div class="controls">
                <input type="text" name="tel2">
                <span class="help-inline">设置您的传真号码</span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" >二维码</label>
            <div class="btn btn-info" style="margin-left: 20px; width: 80px;height: 18px;">选择二维码
                <input  class="filecss fileupload2" type="file" name="sliderimage"  >
                <input id="image_path_input2" type="hidden" name="qrcode" value="" class="notallow7">
            </div>
            <a class="btn uploadbtn2" >上传</a>
            <span class="help-inline">图片建议尺寸：250*250px!</span>
            <div id="zhezhao2">
                <div id="loading2" class="loading"></div>
            </div>
            <div id="showimg2" class="showimg" style="margin-left:180px;width:180px;height:180px;margin-top: 10px;">
                <i class="appmsg_thumb default" style="line-height:180px;">二维码</i>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" >邮箱</label>
            <div class="controls">
                <input type="text" name="email">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" >Q Q</label>
            <div class="controls">
                <input type="text" name="qq">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" >网址</label>
            <div class="controls">
                <input type="text" name="website">
                <span class="help-inline">设置您公司或个人的网址</span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" >联系地址</label>
            <div class="controls">
                <input type="text" name="address">
                <span class="help-inline">设置您的联系地址</span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" >名片背景</label>
            <div class="btn btn-info" style="margin-left: 20px; width: 80px;height: 18px;">选择名片背景
                <input  class="filecss fileupload3" type="file" name="sliderimage"  >
                <input id="image_path_input3" type="hidden" name="background_path" value="" class="notallow7">
            </div>
            <a class="btn uploadbtn3" >上传</a>
            <span class="help-inline">图片建议尺寸：320*640px!</span>
            <div id="zhezhao3">
                <div id="loading3" class="loading"></div>
            </div>
            <div id="showimg3" class="showimg" style="margin-left:160px;width:320px;margin-top: 10px;">
                <i class="appmsg_thumb default" style="line-height:640px">背景图片</i>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" >微名片导航设置</label>

            <div class="controls">
                <table border="0" cellpadding="5" cellspacing="0" class="reverve_field_table">
                    <thead>
                    <tr>
                        <td width="16%">字段类型</td>
                        <td width="32%">默认导航</td>
                        <td width="32%">自设导航</td>
                        <td width="20%">操作</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>官网：</td>
                        <td><input type="text" class="form_input" value="进入微官网" name="" disabled="disabled"></td>
                        <td><input type="text" class="form_input" placeholder="请设置您的导航名" name="nav_data[]"></td>
                        <td><input type="checkbox" name="DisplayName" value="1" checked="">是否显示</td>
                    </tr>
                    <tr>
                        <td>分享：</td>
                        <td><input type="text" class="form_input" value="分享给朋友" name="" disabled="disabled"></td>
                        <td><input type="text" class="form_input" placeholder="请设置您的导航名" name="nav_data[]" ></td>
                        <td><input type="checkbox" name="DisplayReserveDate" value="1" checked="">是否显示</td>
                    </tr>
                    <tr>
                        <td>招商加盟：</td>
                        <td><input type="text" class="form_input" value="招商加盟" name="" disabled="disabled"></td>
                        <td><input type="text" class="form_input" placeholder="请设置您的导航名" name="nav_data[]"></td>
                        <td><input type="checkbox" name="DisplayReserveTime" value="1" checked="">是否显示</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <button class="btn btn-large btn-primary" type="submit" id="table_submit">提交保存</button>
                <a class="btn btn-large" href="<?php echo  Yii::app()->request->baseUrl.'/OrderManage/Index';?>">返回</a>
            </div>
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
            $(this).wrap("<form id='myupload' action='/Upload/File' method='post' enctype='multipart/form-data'></form>");
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
                var img = "/upload/slider/"+data.pic;
                $("#image_path_input").val(data.pic)
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

$(".fileupload1").each(function(){
    $(this).click(function(){
        var zhezhao = $("#zhezhao1");
        zhezhao.hide();
        if($("#myupload1").attr('action') == undefined){
            $(this).wrap("<form id='myupload1' action='/Upload/File' method='post' enctype='multipart/form-data'></form>");
        }
    });
});

$(".uploadbtn1").each(function(){
    $(this).click(function(){
        var percent = $('.percent');
        var showimg = $('#showimg1');
        var zhezhao = $("#zhezhao1");
        var btn = $(".btn span");
        $("#myupload1").ajaxSubmit({
            dataType:  'json',
            beforeSend: function(){
                showimg.empty();
                zhezhao.show();
                var percentVal = '0%';
                percent.html(percentVal);
            },
            uploadProgress: function(event, position, total, percentComplete) {
                $("#zhezhao1").attr("class","mask opacity");
                $("#zhezhao1").css('width',$(window).width());
                $("#zhezhao1").css('height',$(window).height());
                var percentVal = percentComplete + '%';
                percent.html(percentVal);
                $("#loading1").css('margin-left',$(window).width()/2-50);
                $("#loading1").css('margin-top',$(window).height()/2-10);
            },
            success: function(data) {
                $("#image_path_input1").val(data.pic);
                var img = "/upload/slider/"+data.pic;
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

                    showimg.html("<img width='250px'  height='250px' src='"+img+"'>" +
                        "<a onclick='delimage(this)' datadir='slider' style = 'margin-left:40px' data='"+data.pic+"' class='btn btn-mini btn-danger del_btn'>删除</a>");
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

$(".fileupload2").each(function(){
    $(this).click(function(){
        var zhezhao = $("#zhezhao2");
        zhezhao.hide();
        if($("#myupload2").attr('action') == undefined){
            $(this).wrap("<form id='myupload2' action='/Upload/File' method='post' enctype='multipart/form-data'></form>");
        }
    });
});

$(".uploadbtn2").each(function(){
    $(this).click(function(){
        var percent = $('.percent');
        var showimg = $('#showimg2');
        var zhezhao = $("#zhezhao2");
        var btn = $(".btn span");
        $("#myupload2").ajaxSubmit({
            dataType:  'json',
            beforeSend: function(){
                showimg.empty();
                zhezhao.show();
                var percentVal = '0%';
                percent.html(percentVal);
            },
            uploadProgress: function(event, position, total, percentComplete) {
                $("#zhezhao2").attr("class","mask opacity");
                $("#zhezhao2").css('width',$(window).width());
                $("#zhezhao2").css('height',$(window).height());
                var percentVal = percentComplete + '%';
                percent.html(percentVal);
                $("#loading2").css('margin-left',$(window).width()/2-50);
                $("#loading2").css('margin-top',$(window).height()/2-10);
            },
            success: function(data) {
                $("#image_path_input2").val(data.pic);
                var img = "/upload/slider/"+data.pic;
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

                    showimg.html("<img width='180px'  height='180px' src='"+img+"'>" +
                        "<a onclick='delimage(this)' datadir='slider' style = 'margin-left:40px' data='"+data.pic+"' class='btn btn-mini btn-danger del_btn'>删除</a>");
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

$(".fileupload3").each(function(){
    $(this).click(function(){
        var zhezhao = $("#zhezhao3");
        zhezhao.hide();
        if($("#myupload3").attr('action') == undefined){
            $(this).wrap("<form id='myupload3' action='/Upload/File' method='post' enctype='multipart/form-data'></form>");
        }
    });
});

$(".uploadbtn3").each(function(){
    $(this).click(function(){
        var percent = $('.percent');
        var showimg = $('#showimg3');
        var zhezhao = $("#zhezhao3");
        var btn = $(".btn span");
        $("#myupload3").ajaxSubmit({
            dataType:  'json',
            beforeSend: function(){
                showimg.empty();
                zhezhao.show();
                var percentVal = '0%';
                percent.html(percentVal);
            },
            uploadProgress: function(event, position, total, percentComplete) {
                $("#zhezhao3").attr("class","mask opacity");
                $("#zhezhao3").css('width',$(window).width());
                $("#zhezhao3").css('height',$(window).height());
                var percentVal = percentComplete + '%';
                percent.html(percentVal);
                $("#loading3").css('margin-left',$(window).width()/2-50);
                $("#loading3").css('margin-top',$(window).height()/2-10);
            },
            success: function(data) {
                $("#image_path_input3").val(data.pic);
                var img = "/upload/slider/"+data.pic;
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

                    showimg.html("<img width='320px'  height='640px' src='"+img+"'>" +
                        "<a onclick='delimage(this)' datadir='slider' style = 'margin-left:40px' data='"+data.pic+"' class='btn btn-mini btn-danger del_btn'>删除</a>");
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
    $.post("/Upload/Delimage", { dir: dir, name: name },function(json){
        if(json.code == 0){
            $(obj).parent().html("");
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

$('.reverve_field_table .input_add').click(function(){
    $('.reverve_field_table tr[FieldType=text]:hidden').eq(0).show();
    if(!$('.reverve_field_table tr[FieldType=text]:hidden').size()){
        $(this).hide();
    }
});
$('.reverve_field_table .input_del').click(function(){
    $('.reverve_field_table .input_add').show();
    $(this).parent().parent().hide().find('input').val('');
});
$('.reverve_field_table .select_add').click(function(){
    $('.reverve_field_table tr[FieldType=select]:hidden').eq(0).show();
    if(!$('.reverve_field_table tr[FieldType=select]:hidden').size()){
        $(this).hide();
    }
});
$('.reverve_field_table .select_del').click(function(){
    $('.reverve_field_table .select_add').show();
    $(this).parent().parent().hide().find('input').val('');
});

$("#table_submit").click(function(){
    if($(".notallow1").val().length==0){
        notif({
            type: "error",
            msg: '关键词不能为空',
            position: "center",
            width:"all",
            height:100,
            opacity: 1
        });
        return false;
    }
    if($(".notallow2").val().length==0){
        notif({
            type: "error",
            msg: '图文消息标题不能为空',
            position: "center",
            width:"all",
            height:100,
            opacity: 1
        });
        return false;
    }
    if($(".notallow3").val().length==0){
        notif({
            type: "error",
            msg: '还没选择图文消息封面',
            position: "center",
            width:"all",
            height:100,
            opacity: 1
        });
        return false;
    }
    if($(".notallow4").val().length==0){
        notif({
            type: "error",
            msg: '简短介绍不能为空',
            position: "center",
            width:"all",
            height:100,
            opacity: 1
        });
        return false;
    }
    if($(".searchLocation").val().length==0){
        notif({
            type: "error",
            msg: '请选择你一个约定地址',
            position: "center",
            width:"all",
            height:100,
            opacity: 1
        });
        return false;
    }
    if($(".notallow5").val().length==0){
        notif({
            type: "error",
            msg: '预约地址不正确',
            position: "center",
            width:"all",
            height:100,
            opacity: 1
        });
        return false;
    }
    if($(".notallow6").val().length==0){
        notif({
            type: "error",
            msg: '预约地址不正确',
            position: "center",
            width:"all",
            height:100,
            opacity: 1
        });
        return false;
    }
    if($(".notallow7").val().length==0){
        notif({
            type: "error",
            msg: '还没选择预约界面的顶部图片',
            position: "center",
            width:"all",
            height:100,
            opacity: 1
        });
        return false;
    }
    if($(".notallow8").val().length==0){
        notif({
            type: "error",
            msg: '请输入你的联系方式',
            position: "center",
            width:"all",
            height:100,
            opacity: 1
        });
        return false;
    }
    if($(".notallow9").val().length==0){
        notif({
            type: "error",
            msg: '预约说明不能为空',
            position: "center",
            width:"all",
            height:100,
            opacity: 1
        });
        return false;
    }
});
</script>