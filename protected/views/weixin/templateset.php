<link href="<?php echo Yii::app()->request->baseUrl; ?>/backtheme/<?php echo $template_name; ?>/css/index.css" rel="stylesheet">
<link href="<?php echo Yii::app()->request->baseUrl; ?>/backtheme/<?php echo $template_name; ?>/css/index_media.css" rel="stylesheet">
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/msg.css" rel="stylesheet">


<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 微官网模板设置 </h2>
        </div>
        <div class="box-content">
            <div class="box-content">
                <div class="span8" style="width: 560px;height: 800px;">
                    <div class="m_lefter" template='<?php echo $template_id; ?>' site='<?php echo $site_id; ?>'><div id="web_skin_index">
                            <div class="list">
                                <div class="web_skin_index_list banner" id="slider">
                                    <div class="img"><img src="<?php echo Yii::app()->request->baseUrl; ?>/backtheme/<?php echo $template_name; ?>/image/slider.jpg"></div><div class="mod">&nbsp;</div>
                                </div>
                                <div class="box">
                                    <div class="web_skin_index_list list mini_box" nav_link="t1" title="服务项目" ref="p1" image="<?php echo Yii::app()->request->baseUrl; ?>/backtheme/<?php echo $template_name; ?>/image/i0.jpg">
                                        <div>
                                            <div class="img"><img src="<?php echo Yii::app()->request->baseUrl; ?>/backtheme/<?php echo $template_name; ?>/image/i0.jpg"></div><div class="mod" style="display: none;">&nbsp;</div>
                                            <div class="text"><a href="">服务项目</a></div><div class="mod" style="display: none;">&nbsp;</div>
                                        </div><div class="mod" style="display: none;">&nbsp;</div>
                                    </div>
                                    <div class="web_skin_index_list list mini_box" nav_link="c1" title="核心核心" ref="p2" image="<?php echo Yii::app()->request->baseUrl; ?>/backtheme/<?php echo $template_name; ?>/image/i4.jpg">
                                        <div>
                                            <div class="img"><img src="<?php echo Yii::app()->request->baseUrl; ?>/backtheme/<?php echo $template_name; ?>/image/i4.jpg"></div><div class="mod" style="display: none;">&nbsp;</div>
                                            <div class="text"><a href="">核心核心</a></div><div class="mod" style="display: none;">&nbsp;</div>
                                        </div><div class="mod" style="display: none;">&nbsp;</div>

                                    </div>
                                    <div class="web_skin_index_list list mini_box" nav_link="t1" title="网上选人" ref="p3" image="<?php echo Yii::app()->request->baseUrl; ?>/backtheme/<?php echo $template_name; ?>/image/i2.jpg">
                                        <div>
                                            <div class="img"><img src="<?php echo Yii::app()->request->baseUrl; ?>/backtheme/<?php echo $template_name; ?>/image/i2.jpg"></div><div class="mod">&nbsp;</div>
                                            <div class="text"><a href="">网上选人</a></div><div class="mod">&nbsp;</div>
                                        </div><div class="mod">&nbsp;</div>
                                    </div>
                                    <div class="web_skin_index_list list mini_box" nav_link="t1" title="招聘培训" ref="p4" image="<?php echo Yii::app()->request->baseUrl; ?>/backtheme/<?php echo $template_name; ?>/image/i3.jpg">
                                        <div>
                                            <div class="img"><img src="<?php echo Yii::app()->request->baseUrl; ?>/backtheme/<?php echo $template_name; ?>/image/i3.jpg"></div><div class="mod" style="display: none;">&nbsp;</div>
                                            <div class="text"><a href="">招聘培训</a></div><div class="mod" style="display: none;">&nbsp;</div>
                                        </div><div class="mod" style="display: none;">&nbsp;</div>
                                    </div>
                                    <div class="web_skin_index_list list mini_box" nav_link="t1" title="收费标准" ref="p5" image="<?php echo Yii::app()->request->baseUrl; ?>/backtheme/<?php echo $template_name; ?>/image/i4.jpg">
                                        <div>
                                            <div class="img"><img src="<?php echo Yii::app()->request->baseUrl; ?>/backtheme/<?php echo $template_name; ?>/image/i4.jpg"></div><div class="mod" style="display: none;">&nbsp;</div>
                                            <div class="text"><a href="">收费标准</a></div><div class="mod" style="display: none;">&nbsp;</div>
                                        </div><div class="mod" style="display: none;">&nbsp;</div>

                                    </div>
                                    <div class="web_skin_index_list list mini_box" nav_link="t1" title="联系我们" ref="p6" image="<?php echo Yii::app()->request->baseUrl; ?>/backtheme/<?php echo $template_name; ?>/image/i5.jpg">
                                        <div>
                                            <div class="img"><img src="<?php echo Yii::app()->request->baseUrl; ?>/backtheme/<?php echo $template_name; ?>/image/i5.jpg"></div><div class="mod" style="display: none;">&nbsp;</div>
                                            <div class="text"><a href="">联系我们</a></div><div class="mod" style="display: none;">&nbsp;</div>
                                        </div><div class="mod" style="display: none;">&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="span5">
                    <div class="span12" id="slidereditdiv" style="margin-bottom: 20px;">
                        <div class="appmsg_editor" style="margin-top: 0px;">
                            <div class="inner">
                                <div class="silder_box">
                                    <span>第一张图片</span>
                                    <div class="btn btn-info" style="width: 80px;height: 18px;">
                                        选择图片
                                        <input class="filecss fileupload" type="file" name="sliderimage" edit='1'>
                                    </div>
                                    <button class="btn uploadbtn" edit='1'>上传</button>
                                    <div class="link_div">
                                        <span>链接页面</span>
                                        <select class="sliderselect" edit='1'>
                                            <option value="0">请选择</option>
                                            <option value="t1">微官网</option>
                                            <option value="c1">产品</option>
                                        </select>
                                    </div>
                                    <div id="zhezhao1">
                                        <div id="loading1" class="loading">
                                            <span class="bar"><img src="<?php Yii::app()->request->baseUrl; ?>/images/loading.gif" /></span><span class="percent1">0%</span >
                                        </div>
                                    </div>
                                    <div id="showimg1" class="showimg"></div>
                                </div>

                                <div class="silder_box">
                                    <span>第二张图片 </span>
                                    <div class="btn btn-info" style="width: 80px;height: 18px;">
                                        选择图片
                                        <input class="filecss fileupload" type="file" name="sliderimage" edit="2">
                                    </div>
                                    <button class="btn uploadbtn" edit='2'>上传</button>
                                    <div class="link_div">
                                        <span>链接页面</span>
                                        <select class="sliderselect" edit='2'>
                                            <option value="0">请选择</option>
                                            <option value="t1">微官网</option>
                                            <option value="c1">产品</option>
                                        </select>
                                    </div>
                                    <div id="zhezhao2">
                                        <div id="loading2" class="loading">
                                            <span class="bar"><img src="<?php Yii::app()->request->baseUrl; ?>/images/loading.gif" /></span><span class="percent2">0%</span >
                                        </div>
                                    </div>
                                    <div id="showimg2"></div>
                                </div>

                                <div class="silder_box">
                                    <span>第三张图片 </span>
                                    <div class="btn btn-info" style="width: 80px;height: 18px;">
                                        选择图片
                                        <input class="filecss fileupload" type="file" name="sliderimage" edit="3">
                                    </div>
                                    <button class="btn uploadbtn" edit='3'>上传</button>
                                    <div class="link_div">
                                        <span>链接页面</span>
                                        <select class="sliderselect" edit='3'>
                                            <option value="0">请选择</option>
                                            <option value="t1">微官网</option>
                                            <option value="c1">产品</option>
                                        </select>
                                    </div>
                                    <div id="zhezhao3">
                                        <div id="loading3" class="loading">
                                            <span class="bar"><img src="<?php Yii::app()->request->baseUrl; ?>/images/loading.gif" /></span><span class="percent3">0%</span >
                                        </div>
                                    </div>
                                    <div id="showimg3"></div>
                                </div>

                                <div class="silder_box">
                                    <span>第四张图片 </span>
                                    <div class="btn btn-info" style="width: 80px;height: 18px;">
                                        选择图片
                                        <input class="filecss fileupload" type="file" name="sliderimage" edit="4">
                                    </div>
                                    <button class="btn uploadbtn" edit='4'>上传</button>
                                    <div class="link_div">
                                        <span>链接页面</span>
                                        <select class="sliderselect" edit='4'>
                                            <option value="0">请选择</option>
                                            <option value="t1">微官网</option>
                                            <option value="c1">产品</option>
                                        </select>
                                    </div>
                                    <div id="zhezhao4">
                                        <div id="loading4" class="loading">
                                            <span class="bar"><img src="<?php Yii::app()->request->baseUrl; ?>/images/loading.gif" /></span><span class="percent4">0%</span >
                                        </div>
                                    </div>
                                    <div id="showimg4"></div>
                                </div>

                                <div class="silder_box">
                                    <span>第五张图片 </span>
                                    <div class="btn btn-info" style="width: 80px;height: 18px;">
                                        选择图片
                                        <input class="filecss fileupload" type="file" name="sliderimage" edit="5">
                                    </div>
                                    <button class="btn uploadbtn" edit='5'>上传</button>
                                    <div class="link_div">
                                        <span>链接页面</span>
                                        <select class="sliderselect" edit='5'>
                                            <option value="0">请选择</option>
                                            <option value="t1">微官网</option>
                                            <option value="c1">产品</option>
                                        </select>
                                    </div>
                                    <div id="zhezhao5">
                                        <div id="loading5" class="loading">
                                            <span class="bar"><img src="<?php Yii::app()->request->baseUrl; ?>/images/loading.gif" /></span><span class="percent5">0%</span >
                                        </div>
                                    </div>
                                    <div id="showimg5"></div>
                                </div>


                                <div class="form-actions">
                                    <button type="submit" id="sliderpost" class="btn btn-primary">保存</button>
                                    <button class="btn cancelbtn">取消</button>
                                </div>
                                <i class="arrow arrow_out" style="margin-top: 0px;"></i>
                                <i class="arrow arrow_in" style="margin-top: 0px;"></i>
                                <div class="mask" style="display: none;"></div>
                            </div>
                        </div>

                    </div>

                    <div class="span12" id="naveditdiv" style="margin-bottom: 20px;">
                        <div class="appmsg_editor" style="margin-top: 0px;">
                            <div class="inner">
                                <div class="control-group">
                                    <label class="control-label">标题</label>
                                    <input type="hidden" value="" id="position_nav">
                                    <input type="hidden" value="" id="image_nav">
                                    <input type="hidden" value="" id="old_title">
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="nav_title" type="text" value="" data-required="true">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="selectError3">链接地址</label>
                                    <div class="controls">
                                        <select id="nav_link">
                                            <option value="0">请选择</option>
                                            <option value="t1">微官网</option>
                                            <option value="c1">微官网</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="btn btn-info" style="width: 80px;height: 18px;">
                                    选择图片
                                    <input class="filecss nav_fileupload" type="file" name="sliderimage">
                                </div>
                                <button class="btn uploadbtn_nav" edit='4'>上传</button>
                                <div id="zhezhao_nav">
                                    <div id="loading_nav" class="loading">
                                        <span class="bar"><img src="<?php Yii::app()->request->baseUrl; ?>/images/loading.gif" /></span><span class="percent_nav">0%</span >
                                    </div>
                                </div>
                                <div id="showimg_nav" class="nav_image_calss"></div>

                                <div class="form-actions">
                                    <button type="submit" id="nav_postbtn" class="btn btn-primary">保存</button>
                                    <button class="btn cancel_nav" >取消</button>
                                </div>
                                <i class="arrow arrow_out" style="margin-top: 0px;"></i>
                                <i class="arrow arrow_in" style="margin-top: 0px;"></i>
                                <div class="mask" style="display: none;"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
<script type="text/javascript">
    var data=[];
    data.slider=new Array();
    data.slider = [{'id':null,'pic':null},
        {'id':null,'pic':null},
        {'id':null,'pic':null},
        {'id':null,'pic':null},
        {'id':null,'pic':null}
    ];
    var site = parseInt($(".m_lefter").attr('site'));
    var template = parseInt($(".m_lefter").attr('template'));
    $("#slider").mouseenter(function(){
        $(this).append("<div id='SetHomeCurrentBox' style='height: 310px; width: 511px;line-height: 310px;'>" +
            "点击添加轮播图</div>")
    }).mouseleave(function(){
            if($(this).find("#SetHomeCurrentBox").data('flag') != 1){
                $(this).find("#SetHomeCurrentBox").remove();
            }
    });
    $(".mini_box").each(function(i,e){
        $(this).mouseenter(function(){
            $(this).append("<div id='SetHomeCurrentBox' style='height: 144px; width: 160px;line-height: 144px;'>" +
                "点击修改此模块</div>");
        }).mouseleave(function(){
                if($(this).find("#SetHomeCurrentBox").data('flag') != 1){
                    $(this).find("#SetHomeCurrentBox").remove();
                }
            });
    });

    $("#slider").live('click',function(){
        $(this).find("#SetHomeCurrentBox").text('正在修改此模块');
        $(this).find("#SetHomeCurrentBox").data('flag',1);
        $(this).next().children().find("#SetHomeCurrentBox").remove();
        $('#slidereditdiv').show();
    });
    $(".mini_box").each(function(i,e){
        $(this).live('click',function(){
            $(this).find("#SetHomeCurrentBox").text('正在修改此模块');
            $(this).find("#SetHomeCurrentBox").data('flag',1);
            $(this).siblings().find("#SetHomeCurrentBox").remove();
            $(this).parent().prev().find("#SetHomeCurrentBox").remove();
            $('#slidereditdiv').hide();
            $("#nav_title").val($(this).attr('title'));
            $("#old_title").val($(this).attr('title'));
            $("#showimg_nav").html("<img src='"+$(this).attr('image')+"'/>");
            $("#position_nav").val($(this).attr('ref'));
            $("#nav_link").val($(this).attr('nav_link'));
            var top = $(this).offset().top;top+'px'
            $('#naveditdiv').css({'position':'relative','top':(top-147)+'px'});
            $('#naveditdiv').show();
        });
    });
    $(".fileupload").each(function(){
        $(this).click(function(){
            var i = $(this).attr('edit');
            var zhezhao = $("#zhezhao"+i);
            zhezhao.hide();
            if($("#myupload"+i).attr('action') == undefined){
                $(this).wrap("<form id='myupload"+i+"' action='<?php Yii::app()->request->baseUrl; ?>/Upload/File' method='post' enctype='multipart/form-data'></form>");
            }
        });
    });

    $(".uploadbtn").each(function(){
        $(this).click(function(){
            var i = parseInt($(this).attr('edit'));
            var percent = $('.percent'+i);
            var showimg = $('#showimg'+i);
            var zhezhao = $("#zhezhao"+i);
            var btn = $(".btn span");
            $("#myupload"+i).ajaxSubmit({
                dataType:  'json',
                beforeSend: function() {
                    showimg.empty();
                    zhezhao.show();
                    var percentVal = '0%';
                    percent.html(percentVal);
                    btn.html("上传中...");
                },
                uploadProgress: function(event, position, total, percentComplete) {
                    $("#zhezhao"+i).attr("class","mask opacity");
                    $("#zhezhao"+i).css('width',$(window).width());
                    $("#zhezhao"+i).css('height',$(window).height());
                    var percentVal = percentComplete + '%';
                    percent.html(percentVal);
                    $("#loading"+i).css('margin-left',$(window).width()/2-50);
                    $("#loading"+i).css('margin-top',$(window).height()/2-10);
                },
                success: function(data) {
                    var img = "<?php echo Yii::app()->request->baseUrl;?>/upload/slider/"+data.pic;
                    zhezhao.hide();
                    showimg.html("<img width='250px' height='100px' src='"+img+"'><button onclick='delimage(this)' edit='"+i+"' datadir='slider' data='"+data.pic+"'class='btn btn-mini btn-danger del_btn'>删除</button>");
                    changePic(i,data.pic);
                    btn.html("添加附件");
                },
                error:function(xhr){
                    btn.html("上传失败");
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
                changePic(i,null);
                changeSelect(i,null);
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

    function delinavmage(obj){
        var dir = $(obj).attr('datadir');
        var name = $(obj).attr('data');
        $.post("<?php Yii::app()->request->baseUrl; ?>/Upload/Delimage", { dir: dir, name: name },function(json){
            if(json.code == 0){
                $(obj).parent().html("");
                $("#image_nav").val("");
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

    $(".sliderselect").each(function(){
        $(this).change(function(){
            var i = parseInt($(this).attr('edit'));
            changeSelect(i,$(this).val())
        });
    });

    function changePic(i,pic){
        data.slider[i-1].pic = pic;
    }

    function changeSelect(i,val){
        data.slider[i-1].id = val;
    }

    $("#sliderpost").click(function(){
        //console.log(data);
        for(var i=0;i< data.slider.length;i++){
            if(data.slider[i].pic != null && data.slider[i].id == null){
                notif({
                    type: "warning",
                    msg: "第"+(i+1)+"张图片没有选中链接地址哦",
                    position: "center",
                    width:"all",
                    height:100,
                    opacity: 1
                });
                return false;
            }
        }
        if(data.slider[0].pic == null && data.slider[1].pic == null &&
            data.slider[2].pic == null && data.slider[3].pic == null
            && data.slider[4].pic == null){
            notif({
                type: "warning",
                msg: "您还没传图片",
                position: "center",
                width:"all",
                height:100,
                opacity: 1
            });
            return false;
        }
        $.getJSON("<?php Yii::app()->request->baseUrl; ?>/Weixin/Templateslidersave",{template_id:template,site_id:site,sliderdata:data.slider},function(data){
            if(data.code == 0){
                notif({
                    type: "success",
                    msg: data.msg,
                    position: "center",
                    width:"all",
                    height:100,
                    opacity: 1
                });
                $('#slidereditdiv').hide();
            }else{
                notif({
                    type: "error",
                    msg: data.msg,
                    position: "center",
                    width:"all",
                    height:100,
                    opacity: 1
                });
                return false;
            }
        });

    });

    $(".cancelbtn").click(function(){
        $('#slidereditdiv').hide();
    });


    $(".nav_fileupload").click(function(){
        var zhezhao = $("#nav_zhezhao");
        zhezhao.hide();
        if($("#myupload").attr('action') == undefined){
            $(this).wrap("<form id='myupload' action='<?php Yii::app()->request->baseUrl; ?>/Upload/File' method='post' enctype='multipart/form-data'></form>");
        }
    });

    $(".uploadbtn_nav").click(function(){
        var percent = $('.percent_nav');
        var showimg = $('#showimg_nav');
        var zhezhao = $("#zhezhao_nav");
        var image_nav = $("#image_nav");
        var btn = $(".btn span");
        $("#myupload").ajaxSubmit({
            dataType:  'json',
            beforeSend: function() {
                showimg.empty();
                zhezhao.show();
                var percentVal = '0%';
                percent.html(percentVal);
                btn.html("上传中...");
            },
            uploadProgress: function(event, position, total, percentComplete) {
                $("#zhezhao_nav").attr("class","mask opacity");
                $("#zhezhao_nav").css('width',$(window).width());
                $("#zhezhao_nav").css('height',$(window).height());
                var percentVal = percentComplete + '%';
                percent.html(percentVal);
                $("#zhezhao_nav").css('margin-left',$(window).width()/2-50);
                $("#zhezhao_nav").css('margin-top',$(window).height()/2-10);
            },
            success: function(data) {
                var img = "<?php echo Yii::app()->request->baseUrl;?>/upload/slider/"+data.pic;
                zhezhao.hide();
                image_nav.val(data.pic);
                showimg.html("<img width='140px' height='140px' src='"+img+"'><button onclick='delinavmage(this)' datadir='slider' data='"+data.pic+"'class='btn btn-mini btn-danger del_btn'>删除</button>");
                btn.html("添加附件");
            },
            error:function(xhr){
                btn.html("上传失败");
            }
        });
    });

    $("#nav_postbtn").click(function(){
        var position = $("#position_nav").val();
        var nav_title = $("#nav_title").val();
        var old_title = $("#old_title").val();
        var nav_link = $("#nav_link").val();
        var img = $("#showimg_nav img").attr('src');
        var img_nav = $("#image_nav").val();
        if(nav_title.length == 0){
            notif({
                type: "warning",
                msg: "标题不能为空",
                position: "center",
                width:"all",
                height:100,
                opacity: 1
            });
            return false;
        }
        if(nav_link == 0){
            notif({
                type: "warning",
                msg: "请选择链接地址",
                position: "center",
                width:"all",
                height:100,
                opacity: 1
            });
            return false;
        }

        if(!img_nav || typeof(img_nav) == undefined ){
            if(img.length != 0){
                $('#naveditdiv').hide();
                return true;
            }else{
                notif({
                    type: "warning",
                    msg: "请选择图片",
                    position: "center",
                    width:"all",
                    height:100,
                    opacity: 1
                });
                return false;
            }
        }





    });

    $(".cancel_nav").click(function(){
        $('#naveditdiv').hide();
    });


</script>

