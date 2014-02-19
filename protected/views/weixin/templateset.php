<link href="<?php echo Yii::app()->getBaseUrl(); ?>/backtheme/<?php echo $template_name; ?>/css/index.css" rel="stylesheet">
<link href="<?php echo Yii::app()->getBaseUrl(); ?>/backtheme/<?php echo $template_name; ?>/css/index_media.css" rel="stylesheet">
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> 微官网模板设置 </h2>
        </div>
        <div class="box-content">
            <div class="box-content">
                <div style="width: 560px;height: 800px;">
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
                "点击添加轮播图</div>");
        }).mouseleave(function(){
                $("#SetHomeCurrentBox").remove();
            });
    });

</script>