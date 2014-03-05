<link href="<?php echo Yii::app()->request->baseUrl; ?>/backtheme/<?php echo $template_name; ?>/css/index.css" rel="stylesheet">
<link href="<?php echo Yii::app()->request->baseUrl; ?>/backtheme/<?php echo $template_name; ?>/css/index_media.css" rel="stylesheet">
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/msg.css" rel="stylesheet">


<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 微官网模板设置 </h2>
        </div>
        <div class="box-content" style="height: 1000px;">
            <div class="box-content" style="width: 1060px;height: auto";>
                <div class="span8" style="width: 560px;height: 800px;">
                    <div class="m_lefter"  template='<?php echo $template_id; ?>' site='<?php echo $site_id; ?>'>
                        <div id="web_skin_index">
                            <div class="web_skin_index_list banner" id="slider" rel="edit-t01" no="0">
                                <?php if($sliderdata !== null): ?>
                                    <?php foreach($sliderdata as $k=>$v):?>
                                        <div class="img">
                                        <?php if($v->id !== 'null'): ?>
                                            <img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo $v->pic; ?>"></div><div class="mod">
                                        <?php else:  ?>
                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/backtheme/<?php echo $template_name; ?>/image/banner.png"></div><div class="mod">
                                        <?php endif; ?>
                                        &nbsp;</div>

                                    <?php endforeach; ?>
                                <?php else : ?>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/backtheme/<?php echo $template_name; ?>/image/banner.png"></div><div class="mod">
                                <?php endif; ?>
                                <div class="mod" style="display: block;">&nbsp;</div>
                            </div>

                            <div class="web_contents">
                                <div class="box">
                                    <ul>
                                        <li>
                                            <div class="web_skin_index_list items mini_box" id="p1_box" p1_nav_link="<?php if(isset(CJSON::decode($templateData->p1,false)->linkid)){ echo CJSON::decode($templateData->p1,false)->linkid; }else { echo '0'; } ?>"
                                                 p1_title="<?php if(isset(CJSON::decode($templateData->p1,false)->title)){ echo CJSON::decode($templateData->p1,false)->title; }else { echo '服务项目'; } ?>" ref="p1"
                                                 p1_image="<?php if(isset(CJSON::decode($templateData->p1,false)->pic)){ echo Yii::app()->request->baseUrl.'/upload/slider/'.CJSON::decode($templateData->p1,false)->pic; }else{ echo Yii::app()->request->baseUrl.'/backtheme/'.$template_name.'/image/i0.jpg'; } ?>"
                                                 p1_image_name="<?php if(isset(CJSON::decode($templateData->p1,false)->pic)){ echo CJSON::decode($templateData->p1,false)->pic; }else{ echo ''; } ?>">

                                                <div class="img"><img id="p1_image" src="<?php if(isset(CJSON::decode($templateData->p1,false)->pic)){ echo Yii::app()->request->baseUrl.'/upload/slider/'.CJSON::decode($templateData->p1,false)->pic; }else{ echo Yii::app()->request->baseUrl.'/backtheme/'.$template_name.'/image/i0.jpg'; } ?>"></div><div class="mod" style="display: none;">&nbsp;</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="web_skin_index_list items mini_box" id="p2_box" p2_nav_link="<?php if(isset(CJSON::decode($templateData->p2,false)->linkid)){ echo CJSON::decode($templateData->p2,false)->linkid; }else { echo '0'; } ?>"
                                                 p2_title="<?php if(isset(CJSON::decode($templateData->p2,false)->title)){ echo CJSON::decode($templateData->p2,false)->title; }else { echo '核心业务'; } ?>" ref="p2"
                                                 p2_image="<?php if(isset(CJSON::decode($templateData->p2,false)->pic)){ echo Yii::app()->request->baseUrl.'/upload/slider/'.CJSON::decode($templateData->p2,false)->pic; }else{ echo Yii::app()->request->baseUrl.'/backtheme/'.$template_name.'/image/i4.jpg'; } ?>"
                                                 p2_image_name="<?php if(isset(CJSON::decode($templateData->p2,false)->pic)){ echo CJSON::decode($templateData->p2,false)->pic; }else{ echo ''; } ?>">
                                                <div class="img"><img id="p2_image" src="<?php if(isset(CJSON::decode($templateData->p2,false)->pic)){ echo Yii::app()->request->baseUrl.'/upload/slider/'.CJSON::decode($templateData->p2,false)->pic; }else{ echo Yii::app()->request->baseUrl.'/backtheme/'.$template_name.'/image/i4.jpg'; } ?>"></div><div class="mod" style="display: none;">&nbsp;</div>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="web_skin_index_list items mini_box" id="p3_box" p3_nav_link="<?php if(isset(CJSON::decode($templateData->p3,false)->linkid)){ echo CJSON::decode($templateData->p3,false)->linkid; }else { echo '0'; } ?>"
                                                 p3_title="<?php if(isset(CJSON::decode($templateData->p3,false)->title)){ echo CJSON::decode($templateData->p3,false)->title; }else { echo '网上选人'; } ?>" ref="p3"
                                                 p3_image="<?php if(isset(CJSON::decode($templateData->p3,false)->pic)){ echo Yii::app()->request->baseUrl.'/upload/slider/'.CJSON::decode($templateData->p3,false)->pic; }else{ echo Yii::app()->request->baseUrl.'/backtheme/'.$template_name.'/image/i5.jpg'; } ?>"
                                                 p3_image_name="<?php if(isset(CJSON::decode($templateData->p3,false)->pic)){ echo CJSON::decode($templateData->p3,false)->pic; }else{ echo ''; } ?>">
                                                <div class="img"><img id="p3_image" src="<?php if(isset(CJSON::decode($templateData->p3,false)->pic)){ echo Yii::app()->request->baseUrl.'/upload/slider/'.CJSON::decode($templateData->p3,false)->pic; }else{ echo Yii::app()->request->baseUrl.'/backtheme/'.$template_name.'/image/i2.jpg'; } ?>"></div><div class="mod">&nbsp;</div>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="web_skin_index_list items mini_box" id="p4_box" p4_nav_link="<?php if(isset(CJSON::decode($templateData->p4,false)->linkid)){ echo CJSON::decode($templateData->p4,false)->linkid; }else { echo '0'; } ?>"
                                                 p4_title="<?php if(isset(CJSON::decode($templateData->p4,false)->title)){ echo CJSON::decode($templateData->p4,false)->title; }else { echo '招聘培训'; } ?>" ref="p4"
                                                 p4_image="<?php if(isset(CJSON::decode($templateData->p4,false)->pic)){ echo Yii::app()->request->baseUrl.'/upload/slider/'.CJSON::decode($templateData->p4,false)->pic; }else{ echo Yii::app()->request->baseUrl.'/backtheme/'.$template_name.'/image/i3.jpg'; } ?>"
                                                 p4_image_name="<?php if(isset(CJSON::decode($templateData->p4,false)->pic)){ echo CJSON::decode($templateData->p4,false)->pic; }else{ echo ''; } ?>">
                                                <div class="img"><img id="p4_image" src="<?php if(isset(CJSON::decode($templateData->p4,false)->pic)){ echo Yii::app()->request->baseUrl.'/upload/slider/'.CJSON::decode($templateData->p4,false)->pic; }else{ echo Yii::app()->request->baseUrl.'/backtheme/'.$template_name.'/image/i3.jpg'; } ?>"></div><div class="mod" style="display: none;">&nbsp;</div>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="web_skin_index_list items mini_box" id="p5_box" p5_nav_link="<?php if(isset(CJSON::decode($templateData->p5,false)->linkid)){ echo CJSON::decode($templateData->p5,false)->linkid; }else { echo '0'; } ?>"
                                                 p4_title="<?php if(isset(CJSON::decode($templateData->p5,false)->title)){ echo CJSON::decode($templateData->p5,false)->title; }else { echo '招聘培训'; } ?>" ref="p5"
                                                 p4_image="<?php if(isset(CJSON::decode($templateData->p5,false)->pic)){ echo Yii::app()->request->baseUrl.'/upload/slider/'.CJSON::decode($templateData->p5,false)->pic; }else{ echo Yii::app()->request->baseUrl.'/backtheme/'.$template_name.'/image/i3.jpg'; } ?>"
                                                 p4_image_name="<?php if(isset(CJSON::decode($templateData->p5,false)->pic)){ echo CJSON::decode($templateData->p5,false)->pic; }else{ echo ''; } ?>">
                                                <div class="img"><img id="p5_image" src="<?php if(isset(CJSON::decode($templateData->p5,false)->pic)){ echo Yii::app()->request->baseUrl.'/upload/slider/'.CJSON::decode($templateData->p5,false)->pic; }else{ echo Yii::app()->request->baseUrl.'/backtheme/'.$template_name.'/image/i3.jpg'; } ?>"></div><div class="mod" style="display: none;">&nbsp;</div>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="web_skin_index_list items mini_box" id="p6_box" p6_nav_link="<?php if(isset(CJSON::decode($templateData->p6,false)->linkid)){ echo CJSON::decode($templateData->p6,false)->linkid; }else { echo '0'; } ?>"
                                                 p4_title="<?php if(isset(CJSON::decode($templateData->p6,false)->title)){ echo CJSON::decode($templateData->p6,false)->title; }else { echo '招聘培训'; } ?>" ref="p6"
                                                 p4_image="<?php if(isset(CJSON::decode($templateData->p6,false)->pic)){ echo Yii::app()->request->baseUrl.'/upload/slider/'.CJSON::decode($templateData->p6,false)->pic; }else{ echo Yii::app()->request->baseUrl.'/backtheme/'.$template_name.'/image/i3.jpg'; } ?>"
                                                 p4_image_name="<?php if(isset(CJSON::decode($templateData->p6,false)->pic)){ echo CJSON::decode($templateData->p6,false)->pic; }else{ echo ''; } ?>">
                                                <div class="img"><img id="p6_image" src="<?php if(isset(CJSON::decode($templateData->p6,false)->pic)){ echo Yii::app()->request->baseUrl.'/upload/slider/'.CJSON::decode($templateData->p6,false)->pic; }else{ echo Yii::app()->request->baseUrl.'/backtheme/'.$template_name.'/image/i3.jpg'; } ?>"></div><div class="mod" style="display: none;">&nbsp;</div>

                                            </div>
                                        </li>
5
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="span5">
                    <div class="span12" id="slidereditdiv" style="margin-bottom: 20px;">
                        <div class="appmsg_editor" style="margin-top: 0px;">
                            <div class="inner">
                                <?php foreach($sliderdata as $k=>$v):?>
                                <div class="silder_box">
                                    <span>第<?php echo ($k+1); ?>张图片</span>
                                    <div class="btn btn-info" style="width: 80px;height: 18px;">
                                        选择图片
                                        <input class="filecss fileupload" type="file" name="sliderimage" edit='<?php echo ($k+1); ?>'>
                                    </div>
                                    <button class="btn uploadbtn" edit='<?php echo ($k+1); ?>'>上传</button>
                                    <div class="link_div">
                                        <span>链接页面</span>
                                        <select class="sliderselect" edit='<?php echo ($k+1); ?>'>
                                            <option value="0">请选择</option>
                                            <option value="t_1" <?php if($v->id == 't_1'){ echo 'selected'; }?>>微官网</option>
                                            <option value="c_1" <?php if($v->id == 'c_1'){ echo 'selected'; } ?>>产品</option>
                                        </select>
                                    </div>
                                    <div id="zhezhao<?php echo ($k+1); ?>">
                                        <div id="loading<?php echo ($k+1); ?>" class="loading">
                                            <span class="bar">
                                                <img src="<?php Yii::app()->request->baseUrl; ?>/images/loading.gif" />
                                            </span><span class="percent<?php echo ($k+1); ?>">0%</span >
                                        </div>
                                    </div>
                                    <div id="showimg<?php echo ($k+1); ?>" class="showimg">
                                        <?php if($v->id != 'null'): ?>
                                            <img width='250px' height='100px' src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo $v->pic; ?>">
                                            <button onclick='delimage(this)' edit='<?php echo ($k+1); ?>' datadir='slider' data='<?php echo $v->pic; ?>'class='btn btn-mini btn-danger del_btn'>删除</button>
                                        <?php endif; ?>
                                    </div>
                                </div>



                                <?php endforeach; ?>


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
                                            <option value="t_1">微官网</option>
                                            <option value="c_1">微官网</option>
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
    data.slider = [{'id':<?php if($sliderdata[0]->id == 'null'){ echo $sliderdata[0]->id; }else{ echo "'".$sliderdata[0]->id."'"; } ?>,'pic':<?php if($sliderdata[0]->pic == 'null'){ echo $sliderdata[0]->pic; }else{ echo "'".$sliderdata[0]->pic."'"; } ?>},
        {'id':<?php if($sliderdata[1]->id == 'null'){ echo $sliderdata[1]->id; }else{ echo "'".$sliderdata[1]->id."'"; } ?>,'pic':<?php if($sliderdata[1]->pic == 'null'){ echo $sliderdata[1]->pic; }else{ echo "'".$sliderdata[1]->pic."'"; } ?>},
        {'id':<?php if($sliderdata[2]->id == 'null'){ echo $sliderdata[2]->id; }else{ echo "'".$sliderdata[2]->id."'"; } ?>,'pic':<?php if($sliderdata[2]->pic == 'null'){ echo $sliderdata[2]->pic; }else{ echo "'".$sliderdata[1]->pic."'"; } ?>},
        {'id':<?php if($sliderdata[3]->id == 'null'){ echo $sliderdata[3]->id; }else{ echo "'".$sliderdata[3]->id."'"; } ?>,'pic':<?php if($sliderdata[3]->pic == 'null'){ echo $sliderdata[3]->pic; }else{ echo "'".$sliderdata[3]->pic."'"; } ?>},
        {'id':<?php if($sliderdata[4]->id == 'null'){ echo $sliderdata[4]->id; }else{ echo "'".$sliderdata[4]->id."'"; } ?>,'pic':<?php if($sliderdata[4]->pic == 'null'){ echo $sliderdata[4]->pic; }else{ echo "'".$sliderdata[4]->pic."'"; } ?>}
    ];
    var site = parseInt($(".m_lefter").attr('site'));
    var template = parseInt($(".m_lefter").attr('template'));
    $("#slider").mouseenter(function(){
        if($(this).find("#SetHomeCurrentBox").data('flag') != 1){
            $(this).append("<div id='SetHomeCurrentBox' style='height: 790px; width: 511px;line-height: 790px;'>" +
                "点击添加轮播图</div>");
        }
    }).mouseleave(function(){
            if($(this).find("#SetHomeCurrentBox").data('flag') != 1){
                $(this).find("#SetHomeCurrentBox").remove();
            }
    });
    $(".mini_box").each(function(i,e){
        $(this).mouseenter(function(){
            if($(this).find("#SetHomeCurrentBox").data('flag') != 1){
                $(this).append("<div id='SetHomeCurrentBox' style='height: 70px; width: 65px;line-height: 70px;'>" +
                    "点击修改此模块</div>");
            }
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
        $('#naveditdiv').hide();
    });
    $(".mini_box").each(function(i,e){
        $(this).live('click',function(){
            $(this).find("#SetHomeCurrentBox").text('正在修改此模块');
            $(this).find("#SetHomeCurrentBox").data('flag',1);
            $(this).siblings().find("#SetHomeCurrentBox").remove();
            $(this).parent().prev().find("#SetHomeCurrentBox").remove();
            $('#slidereditdiv').hide();
            var ref;
            ref = $(this).attr('ref');
            $("#nav_title").val($(this).attr(ref+'_title'));
            $("#old_title").val($(this).attr(ref+'_title'));
            $("#showimg_nav").html("<img width='160px' height='160px' src='"+$(this).attr(ref+'_image')+"'/>");
            $("#image_nav").val($(this).attr(ref+'_image_name'));
            $("#position_nav").val($(this).attr('ref'));
            $("#nav_link").val($(this).attr(ref+'_nav_link'));
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
        $.post("<?php Yii::app()->request->baseUrl; ?>/Weixin/Templateslidersave",{template_id:template,site_id:site,sliderdata:data.slider},function(data){
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
        },'json');

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
        var navdata = {'linkid':nav_link,'title':nav_title,'pic':img_nav}
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

        if((old_title != nav_title)){
           if(img_nav.length != 0){
               $.post("<?php Yii::app()->request->baseUrl; ?>/Weixin/Navsave",{site_id:site,template_id:template,position:position,navdata:navdata},function(data){
                    if(data.code == 0){
                        $("#"+position+"_image").prop('src',"<?php echo Yii::app()->request->baseUrl;?>/upload/slider/"+img_nav)
                        $("#"+position+"_atext").text(nav_title);
                        /* have problem */
                        $("#"+position+"_box").prop(position+'_nav_link',nav_link);
                        $("#"+position+"_box").prop(position+'_title',nav_title);
                        $("#"+position+"_box").prop(position+'_image',"<?php echo Yii::app()->request->baseUrl;?>/upload/slider/"+img_nav);
                        $('#naveditdiv').hide();
                        notif({
                            type: "success",
                            msg: data.msg,
                            position: "center",
                            width:"all",
                            height:100,
                            opacity: 1
                        });
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
               },'json');
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

        if(!img_nav || typeof(img_nav) == undefined || (old_title == nav_title) ){
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

