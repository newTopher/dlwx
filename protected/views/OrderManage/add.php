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
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/OrderManage/Index">预约管理</a> <span class="divider">/</span>
    </li>
    <li>
        <a href="">添加管理</a>
    </li>
</ul>
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 触发关键词设置</h2>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo Yii::app()->request->baseUrl;?>/OrderManage/Add" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label">触发关键词</label>
                        <div class="controls">
                            <input type="text" name="keywords" class="notallow1">
                            <span class="help-inline">如果有多个关键词请用空格隔开每个关键词!</span>
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
                        <div class="btn btn-info" style="margin-left: 20px; width: 80px;height: 18px;">
                            选择图片
                            <input  class="filecss fileupload" type="file" name="sliderimage" >
                            <input id="image_path_input1" type="hidden" name="image_path" value="" class="notallow3">
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
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="appendedInputButton">预约地址</label>
                        <div class="controls">
                            <div class="input-append">
                                <input id="appendedInputButton" name="address" size="16" type="text" placeholder="深圳" class="searchLocation">
                                <button class="btn" type="button" onclick='searchLocation()'>选定位置</button>
                                <span  class="help-inline"> <a id="map-chosed" style="display:none">已经选择成功!</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                        <div style="width: 600px;height:300px;" id="mapContainer"></div>
                            <input type="hidden" name="position_x" id="shopLongitude" value="" class="notallow5">
                            <input type="hidden" name="position_y" id="shopLatitude" value="" class="notallow6">
                        </div>

                    </div>
                    <div class="control-group">
                        <label class="control-label" >预订页面头部图片</label>
                        <div class="btn btn-info" style="margin-left: 20px; width: 80px;height: 18px;">
                            选择图片
                            <input  class="filecss fileupload1" type="file" name="sliderimage"  >
                            <input id="image_path_input2" type="hidden" name="header_image_path" value="" class="notallow7">
                        </div>
                        <a class="btn uploadbtn1" >上传</a>
                        <span class="help-inline">图片建议尺寸：640*360px!</span>
                        <div id="zhezhao1">
                            <div id="loading1" class="loading"></div>
                        </div>
                        <div id="showimg1" class="showimg" style="margin-left:160px;width:320px;margin-top: 10px;">
                            <i class="appmsg_thumb default">封面图片</i>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" >预约电话</label>
                        <div class="controls">
                            <textarea name="order_tel" style="height:120px;width: 320px" class="notallow8"></textarea>
                            <span class="help-inline">每行填写一个</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" >设置命名（电话）</label>
                        <div class="controls">
                            <input type="text" name="setname_tel">
                            <span class="help-inline">修改用户手机中“预约电话”栏目的名称，您可以将其修改成诸如“下单电话”、“试驾电话”等</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">预约说明</label>
                        <div class="controls">
                            <textarea name="description" style="height:120px;width: 320px" class="notallow9"></textarea>
                            <span class="help-inline">每行填写一个</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" >设置命名（预约）</label>
                        <div class="controls">
                            <input type="text" name="setname_desc">
                            <span class="help-inline">修改用户手机中“预约说明”栏目的名称，您可以将其修改成诸如“下单说明”、“试驾说明”等</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" >粉丝反馈信息设置</label>
                        <div class="controls">
                            <span class="help-inline">填写你要收集的内容，预约默认选项不可以修改删除！</span>
                        </div>
                        <div class="controls">
                            <table border="0" cellpadding="5" cellspacing="0" class="reverve_field_table">
                            <thead>
                            <tr>
                                <td width="16%">字段类型</td>
                                <td width="32%">字段名称</td>
                                <td width="32%">初始内容</td>
                                <td width="20%">操作</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>文本框：</td>
                                <td><input type="text" class="form_input" value="联系人" name="" disabled="disabled"></td>
                                <td><input type="text" class="form_input" value="请输入您的姓名" name="" disabled="disabled"></td>
                                <td><input type="checkbox" name="DisplayName" value="1" checked="">是否显示</td>
                            </tr>
                            <tr>
                                <td>文本框：</td>
                                <td><input type="text" class="form_input" value="联系电话" name="" disabled="disabled"></td>
                                <td><input type="text" class="form_input" value="请输入您的电话" name="" disabled="disabled"></td>
                                <td><input type="checkbox" name="DisplayTelephone" value="1" checked="">是否显示</td>
                            </tr>
                            <tr>
                                <td>日期选择：</td>
                                <td><input type="text" class="form_input" value="预约日期" name="" disabled="disabled"></td>
                                <td><input type="text" class="form_input" value="请输入预约日期" name="" disabled="disabled"></td>
                                <td><input type="checkbox" name="DisplayReserveDate" value="1" checked="">是否显示</td>
                            </tr>
                            <tr>
                                <td>时间选择：</td>
                                <td><input type="text" class="form_input" value="预约时间" name="" disabled="disabled"></td>
                                <td><input type="text" class="form_input" value="请输入预约时间" name="" disabled="disabled"></td>
                                <td><input type="checkbox" name="DisplayReserveTime" value="1" checked="">是否显示</td>
                            </tr>
                            <tr style="display:;" fieldtype="text">
                                <td>新增文本框1：</td>
                                <td><input type="text" class="form_input" value="" name="InputName[]"></td>
                                <td><input type="text" class="form_input" value="" name="InputValue[]"></td>
                                <td><a href="javascript:void(0);" class="input_add"><img src="<?php echo Yii::app()->request->baseUrl.'/images/add.gif'?>"></a></td>
                            </tr>
                            <tr style="display:none;" fieldtype="text">
                                <td>新增文本框2：</td>
                                <td><input type="text" class="form_input" value="" name="InputName[]"></td>
                                <td><input type="text" class="form_input" value="" name="InputValue[]"></td>
                                <td><a href="javascript:void(0);" class="input_del"><img src="<?php echo Yii::app()->request->baseUrl.'/images/del.gif'?>"></a></td>
                            </tr>
                            <tr style="display:none;" fieldtype="text">
                                <td>新增文本框3：</td>
                                <td><input type="text" class="form_input" value="" name="InputName[]"></td>
                                <td><input type="text" class="form_input" value="" name="InputValue[]"></td>
                                <td><a href="javascript:void(0);" class="input_del"><img src="<?php echo Yii::app()->request->baseUrl.'/images/del.gif'?>"></a></td>
                            </tr>
                            <tr style="display:none;" fieldtype="text">
                                <td>新增文本框4：</td>
                                <td><input type="text" class="form_input" value="" name="InputName[]"></td>
                                <td><input type="text" class="form_input" value="" name="InputValue[]"></td>
                                <td><a href="javascript:void(0);" class="input_del"><img src="<?php echo Yii::app()->request->baseUrl.'/images/del.gif'?>"></a></td>
                            </tr>
                            <tr style="display:none;" fieldtype="text">
                                <td>新增文本框5：</td>
                                <td><input type="text" class="form_input" value="" name="InputName[]"></td>
                                <td><input type="text" class="form_input" value="" name="InputValue[]"></td>
                                <td><a href="javascript:void(0);" class="input_del"><img src="<?php echo Yii::app()->request->baseUrl.'/images/del.gif'?>"></a></td>
                            </tr>
                            <tr style="display:none;" fieldtype="text">
                                <td>新增文本框6：</td>
                                <td><input type="text" class="form_input" value="" name="InputName[]"></td>
                                <td><input type="text" class="form_input" value="" name="InputValue[]"></td>
                                <td><a href="javascript:void(0);" class="input_del"><img src="<?php echo Yii::app()->request->baseUrl.'/images/del.gif'?>"></a></td>
                            </tr>
                            <tr style="display:none;" fieldtype="text">
                                <td>新增文本框7：</td>
                                <td><input type="text" class="form_input" value="" name="InputName[]"></td>
                                <td><input type="text" class="form_input" value="" name="InputValue[]"></td>
                                <td><a href="javascript:void(0);" class="input_del"><img src="<?php echo Yii::app()->request->baseUrl.'/images/del.gif'?>"></a></td>
                            </tr>
                            <tr style="display:none;" fieldtype="text">
                                <td>新增文本框8：</td>
                                <td><input type="text" class="form_input" value="" name="InputName[]"></td>
                                <td><input type="text" class="form_input" value="" name="InputValue[]"></td>
                                <td><a href="javascript:void(0);" class="input_del"><img src="<?php echo Yii::app()->request->baseUrl.'/images/del.gif'?>"></a></td>
                            </tr>
                            <tr style="display:none;" fieldtype="text">
                                <td>新增文本框9：</td>
                                <td><input type="text" class="form_input" value="" name="InputName[]"></td>
                                <td><input type="text" class="form_input" value="" name="InputValue[]"></td>
                                <td><a href="javascript:void(0);" class="input_del"><img src="<?php echo Yii::app()->request->baseUrl.'/images/del.gif'?>"></a></td>
                            </tr>
                            <tr style="display:none;" fieldtype="text">
                                <td>新增文本框10：</td>
                                <td><input type="text" class="form_input" value="" name="InputName[]"></td>
                                <td><input type="text" class="form_input" value="" name="InputValue[]"></td>
                                <td><a href="javascript:void(0);" class="input_del"><img src="<?php echo Yii::app()->request->baseUrl.'/images/del.gif'?>"></a></td>
                            </tr>
                            <tr style="display:;" fieldtype="select">
                                <td>新增下拉框1：</td>
                                <td><input type="text" class="form_input" value="" name="SelectName[]"></td>
                                <td><input type="text" class="form_input" value="" name="SelectValue[]" placeholder="每个选项之间以“|”分割"></td>
                                <td><a href="javascript:void(0);" class="select_add"><img src="<?php echo Yii::app()->request->baseUrl.'/images/add.gif'?>"></a></td>
                            </tr>
                            <tr style="display:none;" fieldtype="select">
                                <td>新增下拉框2：</td>
                                <td><input type="text" class="form_input" value="" name="SelectName[]"></td>
                                <td><input type="text" class="form_input" value="" name="SelectValue[]" placeholder="每个选项之间以“|”分割"></td>
                                <td><a href="javascript:void(0);" class="select_del"><img src="<?php echo Yii::app()->request->baseUrl.'/images/del.gif'?>"></a></td>
                            </tr>
                            <tr style="display:none;" fieldtype="select">
                                <td>新增下拉框3：</td>
                                <td><input type="text" class="form_input" value="" name="SelectName[]"></td>
                                <td><input type="text" class="form_input" value="" name="SelectValue[]" placeholder="每个选项之间以“|”分割"></td>
                                <td><a href="javascript:void(0);" class="select_del"><img src="<?php echo Yii::app()->request->baseUrl.'/images/del.gif'?>"></a></td>
                            </tr>
                            <tr style="display:none;" fieldtype="select">
                                <td>新增下拉框4：</td>
                                <td><input type="text" class="form_input" value="" name="SelectName[]"></td>
                                <td><input type="text" class="form_input" value="" name="SelectValue[]" placeholder="每个选项之间以“|”分割"></td>
                                <td><a href="javascript:void(0);" class="select_del"><img src="<?php echo Yii::app()->request->baseUrl.'/images/del.gif'?>"></a></td>
                            </tr>
                            <tr style="display:none;" fieldtype="select">
                                <td>新增下拉框5：</td>
                                <td><input type="text" class="form_input" value="" name="SelectName[]"></td>
                                <td><input type="text" class="form_input" value="" name="SelectValue[]" placeholder="每个选项之间以“|”分割"></td>
                                <td><a href="javascript:void(0);" class="select_del"><img src="<?php echo Yii::app()->request->baseUrl.'/images/del.gif'?>"></a></td>
                            </tr>
                            <tr style="display:none;" fieldtype="select">
                                <td>新增下拉框6：</td>
                                <td><input type="text" class="form_input" value="" name="SelectName[]"></td>
                                <td><input type="text" class="form_input" value="" name="SelectValue[]" placeholder="每个选项之间以“|”分割"></td>
                                <td><a href="javascript:void(0);" class="select_del"><img src="<?php echo Yii::app()->request->baseUrl.'/images/del.gif'?>"></a></td>
                            </tr>
                            <tr style="display:none;" fieldtype="select">
                                <td>新增下拉框7：</td>
                                <td><input type="text" class="form_input" value="" name="SelectName[]"></td>
                                <td><input type="text" class="form_input" value="" name="SelectValue[]" placeholder="每个选项之间以“|”分割"></td>
                                <td><a href="javascript:void(0);" class="select_del"><img src="<?php echo Yii::app()->request->baseUrl.'/images/del.gif'?>"></a></td>
                            </tr>
                            <tr style="display:none;" fieldtype="select">
                                <td>新增下拉框8：</td>
                                <td><input type="text" class="form_input" value="" name="SelectName[]"></td>
                                <td><input type="text" class="form_input" value="" name="SelectValue[]" placeholder="每个选项之间以“|”分割"></td>
                                <td><a href="javascript:void(0);" class="select_del"><img src="<?php echo Yii::app()->request->baseUrl.'/images/del.gif'?>"></a></td>
                            </tr>
                            <tr style="display:none;" fieldtype="select">
                                <td>新增下拉框9：</td>
                                <td><input type="text" class="form_input" value="" name="SelectName[]"></td>
                                <td><input type="text" class="form_input" value="" name="SelectValue[]" placeholder="每个选项之间以“|”分割"></td>
                                <td><a href="javascript:void(0);" class="select_del"><img src="<?php echo Yii::app()->request->baseUrl.'/images/del.gif'?>"></a></td>
                            </tr>
                            <tr style="display:none;" fieldtype="select">
                                <td>新增下拉框10：</td>
                                <td><input type="text" class="form_input" value="" name="SelectName[]"></td>
                                <td><input type="text" class="form_input" value="" name="SelectValue[]" placeholder="每个选项之间以“|”分割"></td>
                                <td><a href="javascript:void(0);" class="select_del">
                                        <img src="<?php echo Yii::app()->request->baseUrl.'/images/del.gif'?>"></a></td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" id="table_submit" class="btn btn-primary">确定</button>
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
                    $("#image_path_input1").val(data.pic)
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

    function delimage(obj){
        var dir = $(obj).attr('datadir');
        var name = $(obj).attr('data');
        var i =  parseInt($(obj).attr('edit'));
        $.post("<?php Yii::app()->request->baseUrl; ?>/Upload/Delimage", { dir: dir, name: name },function(json){
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
</script>
<script>
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


    $(".fileupload1").each(function(){
        $(this).click(function(){
            var zhezhao = $("#zhezhao1");
            zhezhao.hide();
            if($("#myupload1").attr('action') == undefined){
                $(this).wrap("<form id='myupload1' action='<?php Yii::app()->request->baseUrl; ?>/Upload/File' method='post' enctype='multipart/form-data'></form>");
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
                    $("#image_path_input2").val(data.pic);
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

                        showimg.html("<img width='320px'  height='180px' src='"+img+"'>" +
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
        $.post("<?php Yii::app()->request->baseUrl; ?>/Upload/Delimage", { dir: dir, name: name },function(json){
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
</script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=29853e5332078c0e4f650aaac72c5172"></script>
<script type="text/javascript" src="http://api.map.baidu.com/getscript?v=2.0&ak=29853e5332078c0e4f650aaac72c5172&services=&t=20140127144714"></script>
<script type="text/javascript">
    var map = new BMap.Map("mapContainer");
    var point = new BMap.Point(114.02597366, 22.54605355);
    map.centerAndZoom(point,15);
    map.enableScrollWheelZoom();
    //加入缩放控件;
    map.addControl(new BMap.NavigationControl());
    //创建坐标点;
    var mapMarker = new BMap.Marker(point);
    //拖拽控件
    mapMarker.enableDragging();
    var infomsg = "<p id='position_box' style='font-size:14px;color:#cc5522;font-weight:bold;'>" + '确定选取该位置吗?' + "</p><a class='btn btn-primary' onclick='confirmMarker()'>确定</a><a onclick='closeMarker()' class='btn btn-primary' style='margin-left:10px'>取消</a>";
    var selectedOpint = {};
    map.addEventListener("click", function(e){

        selectedOpint.x = e.point.lng
        selectedOpint.y = e.point.lat;
        map.clearOverlays(mapMarker);
        point = new BMap.Point(e.point.lng,e.point.lat);
        mapMarker = new BMap.Marker(point);
        map.addOverlay(mapMarker);
        mapMarker.enableDragging();

        mapMarker.addEventListener("dragend", function (e) {
            selectedOpint.x = e.point.lng
            selectedOpint.y = e.point.lat;

            this.infoWindow = new BMap.InfoWindow(infomsg); // 创建信息窗口对象
            this.openInfoWindow(this.infoWindow);
        });

        var infoWindow = new BMap.InfoWindow(infomsg);
        mapMarker.openInfoWindow(infoWindow);
    });
    //关闭覆盖物
    function closeMarker(a)
    {
        mapMarker.closeInfoWindow(mapMarker.infoWindow);
        map.clearOverlays(mapMarker);
        $("#shopLongitude").val('');
        $("#shopLatitude").val('');
        $("#map-chosed").css('display','none');
    }
    //确定标记
    function selectShopAddress(selectedOpint) {
        $("#shopLongitude").val(selectedOpint.x);
        $("#shopLatitude").val(selectedOpint.y);
        mapMarker.closeInfoWindow(mapMarker.infoWindow);
        $("#map-chosed").css('display','block');
    }

    function confirmMarker()
    {
        window.parent.selectShopAddress(selectedOpint);
    }
    function clearMarker()
    {
        selectedOpint.x = "";
        selectedOpint.y = "";
        window.selectShopAddress(selectedOpint);
    }
    var initSearch = true;
    function searchLocation()
    {
        var searchLocation = $(".searchLocation").val();
        if(searchLocation == "")
        {
            alert('地址不能为空哦');
            return ;
        }

        var local = new BMap.LocalSearch(map, {
            renderOptions: {
                map: map,
                panel : "mapSearchResult",
                autoViewport: true,
                selectFirstResult: false
            }
        });
        if(initSearch)
        {
            initSearch = false;
            $("#mapContainer").addClass("mapContainer");
            $("#mapSearchResult").addClass("mapSearchResult").show();
        }
        local.search(searchLocation)

    }
</script>
<script>

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
</script>
