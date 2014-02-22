<link href="<?php echo Yii::app()->getBaseUrl(); ?>/backtheme/<?php echo $template_name; ?>/css/index.css" rel="stylesheet">
<link href="<?php echo Yii::app()->getBaseUrl(); ?>/backtheme/<?php echo $template_name; ?>/css/index_media.css" rel="stylesheet">
<link href="<?php echo Yii::app()->getBaseUrl(); ?>/css/msg.css" rel="stylesheet">


<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 微官网模板设置 </h2>
        </div>
        <div class="box-content">
            <div class="box-content">
                <div class="span8" style="width: 560px;height: 800px;">
                    <div class="m_lefter"><div id="web_skin_index">
                            <div class="list">
                                <div class="web_skin_index_list banner" id="slider" rel="edit-t01" no="0">
                                    <div class="img"><img src="<?php echo Yii::app()->getBaseUrl(); ?>/backtheme/<?php echo $template_name; ?>/image/slider.jpg"></div><div class="mod">&nbsp;</div>
                                </div>
                                <div class="box">
                                    <div class="web_skin_index_list list mini_box" rel="edit-t02" no="1">
                                        <div>
                                            <div class="img"><img src="<?php echo Yii::app()->getBaseUrl(); ?>/backtheme/<?php echo $template_name; ?>/image/i0.jpg"></div><div class="mod" style="display: none;">&nbsp;</div>
                                            <div class="text"><a href="">服务项目</a></div><div class="mod" style="display: none;">&nbsp;</div>
                                        </div><div class="mod" style="display: none;">&nbsp;</div>
                                    </div>
                                    <div class="web_skin_index_list list mini_box" rel="edit-t03" no="2">
                                        <div>
                                            <div class="img"><img src="<?php echo Yii::app()->getBaseUrl(); ?>/backtheme/<?php echo $template_name; ?>/image/i4.jpg"></div><div class="mod" style="display: none;">&nbsp;</div>
                                            <div class="text"><a href="">核心核心</a></div><div class="mod" style="display: none;">&nbsp;</div>
                                        </div><div class="mod" style="display: none;">&nbsp;</div>

                                    </div>
                                    <div class="web_skin_index_list list mini_box" rel="edit-t04" no="3">
                                        <div>
                                            <div class="img"><img src="<?php echo Yii::app()->getBaseUrl(); ?>/backtheme/<?php echo $template_name; ?>/image/i2.jpg"></div><div class="mod">&nbsp;</div>
                                            <div class="text"><a href="">网上选人</a></div><div class="mod">&nbsp;</div>
                                        </div><div class="mod">&nbsp;</div>
                                    </div>
                                    <div class="web_skin_index_list list mini_box" rel="edit-t05" no="4">
                                        <div>
                                            <div class="img"><img src="<?php echo Yii::app()->getBaseUrl(); ?>/backtheme/<?php echo $template_name; ?>/image/i3.jpg"></div><div class="mod" style="display: none;">&nbsp;</div>
                                            <div class="text"><a href="">招聘培训</a></div><div class="mod" style="display: none;">&nbsp;</div>
                                        </div><div class="mod" style="display: none;">&nbsp;</div>
                                    </div>
                                    <div class="web_skin_index_list list mini_box" rel="edit-t06" no="5">
                                        <div>
                                            <div class="img"><img src="<?php echo Yii::app()->getBaseUrl(); ?>/backtheme/<?php echo $template_name; ?>/image/i4.jpg"></div><div class="mod" style="display: none;">&nbsp;</div>
                                            <div class="text"><a href="">收费标准</a></div><div class="mod" style="display: none;">&nbsp;</div>
                                        </div><div class="mod" style="display: none;">&nbsp;</div>

                                    </div>
                                    <div class="web_skin_index_list list mini_box" rel="edit-t07" no="6">
                                        <div>
                                            <div class="img"><img src="<?php echo Yii::app()->getBaseUrl(); ?>/backtheme/<?php echo $template_name; ?>/image/i5.jpg"></div><div class="mod" style="display: none;">&nbsp;</div>
                                            <div class="text"><a href="">联系我们</a></div><div class="mod" style="display: none;">&nbsp;</div>
                                        </div><div class="mod" style="display: none;">&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="span5">
                    <div class="span11" id="slidereditdiv" style="margin-bottom: 20px;">
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
                                        <select>
                                            <option>微官网</option>
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
                                        <select>
                                            <option>微官网</option>
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
                                        <select>
                                            <option>微官网</option>
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
                                        <select>
                                            <option>微官网</option>
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
                                        <select>
                                            <option>微官网</option>
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
                                    <button type="submit" class="btn btn-primary">保存</button>
                                    <button class="btn">取消</button>
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
    $("#slider").mouseenter(function(){
        $(this).append("<div id='SetHomeCurrentBox' style='height: 310px; width: 511px;line-height: 310px;'>" +
            "点击添加轮播图</div>")
    }).mouseleave(function(){
        $("#SetHomeCurrentBox").remove();
    });
    $(".mini_box").each(function(i,e){
        $(this).mouseenter(function(){
            $(this).append("<div id='SetHomeCurrentBox' style='height: 144px; width: 160px;line-height: 144px;'>" +
                "点击修改此模块</div>");
        }).mouseleave(function(){
                $("#SetHomeCurrentBox").remove();
            });
    });

    $("#slider").click(function(){
        $(this).append("<div id='SetHomeCurrentBox' style='height: 310px; width: 511px;line-height: 310px;'>" +
            "此模块正在添加轮播图</div>");
       $('#slidereditdiv').show()
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
            var i = $(this).attr('edit');
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
                    showimg.html("<img width='250px' height='100px' src='"+img+"'><button onclick='delimage(this)' datadir='slider' data='"+data.pic+"'class='btn btn-mini btn-danger del_btn'>删除</button>");
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
        $.getJSON("<?php Yii::app()->request->baseUrl; ?>/Upload/Delimage", { dir: dir, name: name },function(json){
            if(json.code == 0){
                $(obj).parent().html("");
            }else{
                alert(json.msg);
                return false;
            }
        });
    }
</script>

