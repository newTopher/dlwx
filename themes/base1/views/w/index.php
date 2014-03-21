<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<meta content="telephone=no" name="format-detection">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<title><?php echo $webData->webname_title; ?></title>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/css/global.css" rel="stylesheet" type="text/css">
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/global.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/web.js"></script>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/css/style(1).css" rel="stylesheet" type="text/css">
<script language="javascript">
$(document).ready(web_obj.page_init);
var links=new Array('/api/197196ec4a/web/index/');
</script>
</head>

<body scroll=no style="overflow:hidden">
<div id="web_page_contents_loading"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/images/loading.gif"></div><div id="header" class="wrap">
	<ul>
		<li class="home first" style="width: 33.33233333333334%;"><a href="<?php echo Yii::app()->request->baseUrl.'/W/I/sid/'.$webData->uid; ?>" target="_self"></a></li>
		<li class="back" style="width: 33.33233333333334%;"><a href="javascript:;" target="_self"></a></li>
				<li class="lbs" style="width: 33.33233333333334%;">
							<a ajax_url="/api/197196ec4a/web/lbs/" target="_self"></a>
					</li>
			</ul>
</div><div id="web_page_contents"><link href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/css/flexslider.css" rel="stylesheet" type="text/css">
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/css/index.css" rel="stylesheet" type="text/css">
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/css/index_media.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/flexslider.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/index.js"></script>
<script language="javascript">

    var MusicPath='';
    $(document).ready(index_obj.index_init);
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            animationLoop: true ,
            directionNav: false
        });
    });

</script><div id="web_skin_index">
	<div class="list">
		<div class="web_skin_index_list banner" rel="edit-t01">
			<div class="img">
                <div class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <?php foreach($sliderdata as $k=>$v): ?>
                            <li style="display: list-item;">
                                <a href="<?php echo $v['link']; ?>" target="_self">
                                    <img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo $v['pic']; ?>" alt="">
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
		</div>
        <?php
            $p1 = explode('_',CJSON::decode($webNavData->p1,false)->linkid);
            $p2 = explode('_',CJSON::decode($webNavData->p2,false)->linkid);
            $p3 = explode('_',CJSON::decode($webNavData->p3,false)->linkid);
            $p4 = explode('_',CJSON::decode($webNavData->p4,false)->linkid);
            $p5 = explode('_',CJSON::decode($webNavData->p5,false)->linkid);
            $p6 = explode('_',CJSON::decode($webNavData->p6,false)->linkid);
        ?>
		<div class="box">
			<div class="web_skin_index_list list" rel="edit-t02">
				<div>
					<div class="img"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p1[0]).'wapwei/I/id/'.strtoupper($p1[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo CJSON::decode($webNavData->p1,false)->pic;  ?>"></a></div>
					<div class="text"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p1[0]).'wapwei/I/id/'.strtoupper($p1[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self">
                            <?php echo CJSON::decode($webNavData->p1,false)->title;  ?>
                        </a></div>
				</div>
			</div>
			<div class="web_skin_index_list list" rel="edit-t03">
				<div>
					<div class="img"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p2[0]).'wapwei/I/id/'.strtoupper($p2[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo CJSON::decode($webNavData->p2,false)->pic;  ?>"></a></div>
					<div class="text"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p2[0]).'wapwei/I/id/'.strtoupper($p2[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self">
                            <?php echo CJSON::decode($webNavData->p2,false)->title;  ?></a></div>
				</div>
			</div>
			<div class="web_skin_index_list list" rel="edit-t04">
				<div>
					<div class="img"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p3[0]).'wapwei/I/id/'.strtoupper($p3[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo CJSON::decode($webNavData->p3,false)->pic;  ?>"></a></div>
					<div class="text"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p3[0]).'wapwei/I/id/'.strtoupper($p3[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self">
                            <?php echo CJSON::decode($webNavData->p3,false)->title;  ?>
					</a></div>
				</div>
			</div>
			<div class="web_skin_index_list list" rel="edit-t05">
				<div>
					<div class="img"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p4[0]).'wapwei/I/id/'.strtoupper($p4[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo CJSON::decode($webNavData->p4,false)->pic;  ?>"></a></div>
					<div class="text"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p4[0]).'wapwei/I/id/'.strtoupper($p4[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self">
                            <?php echo CJSON::decode($webNavData->p4,false)->title;  ?></a></div>
				</div>
			</div>
			<div class="web_skin_index_list list" rel="edit-t06">
				<div>
					<div class="img"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p5[0]).'wapwei/I/id/'.strtoupper($p5[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo CJSON::decode($webNavData->p5,false)->pic;  ?>"></a></div>
					<div class="text"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p5[0]).'wapwei/I/id/'.strtoupper($p5[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self">
                            <?php echo CJSON::decode($webNavData->p5,false)->title;  ?></a></div>
				</div>
			</div>
			<div class="web_skin_index_list list" rel="edit-t07">
				<div>
					<div class="img"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p6[0]).'wapwei/I/id/'.strtoupper($p6[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo CJSON::decode($webNavData->p6,false)->pic;  ?>"></a></div>
					<div class="text"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p6[0]).'wapwei/I/id/'.strtoupper($p6[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self">
                            <?php echo CJSON::decode($webNavData->p6,false)->title;  ?>
					</a></div>
				</div>
			</div>
		</div>
	</div>
</div></div><div id="footer_points"></div>
<footer id="footer">
        <!--
	<ul>
				<li class="first" style="width: 24.999%;">
							<dl>
											<dd class="first"><a ajax_url="/api/197196ec4a/web/column/article/1778/" target="_self">304不锈钢管</a></dd>
											<dd class=""><a ajax_url="/api/197196ec4a/web/column/article/1779/" target="_self">不锈钢管</a></dd>
									</dl>
				<div><img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/images/nav-dot.png">产品</div>
					</li>
				<li class="" style="width: 24.999%;">
							<a ajax_url="/api/197196ec4a/web/column/1043/" target="_self"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/images/nav-dot.png">佛山市南海银泽不锈钢制品有限公司简介</a>
					</li>
				<li class="" style="width: 24.999%;">
							<a ajax_url="/api/197196ec4a/web/column/1045/" target="_self"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/images/nav-dot.png">新闻</a>
					</li>
				<li class="" style="width: 24.999%;">
							<a ajax_url="/api/197196ec4a/web/column/1046/" target="_self"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/images/nav-dot.png">联系我们</a>
					</li>
			</ul>
			-->
</footer>

</body></html>