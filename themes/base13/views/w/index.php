<!DOCTYPE html>
<!-- saved from url=(0066)http://www.ptweixin.com/api/a290abf710/web/?wxref=mp.weixin.qq.com -->
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
        var links=new Array('/api/a290abf710/web/index/');
    </script>
</head>

<body scroll=no style="overflow:hidden">
<div id="web_page_contents_loading"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/images/loading.gif"></div><div id="header" class="wrap" style="display: none;">
    <ul>
        <li class="home first" style="width: 33.33233333333334%;"><a href="" target="_self"></a></li>
        <li class="back" style="width: 33.33233333333334%;"><a href="javascript:;" target="_self"></a></li>
        <li class="lbs" style="width: 33.33233333333334%;">
            <a ajax_url="/api/a290abf710/web/lbs/" target="_self" href="http://www.ptweixin.com/api/a290abf710/web/lbs/"></a>
        </li>
    </ul>
</div><div id="web_page_contents"><link href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/css/flexslider.css" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/css/index.css" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/css/index_media.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/flexslider.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/index.js"></script>
    <script language="javascript">
        var web_skin_data=[{"PId":"64515","SId":"14","TradeId":"0","MemberId":"2294","ContentsType":"0","Title":"","ImgPath":"\/api\/web\/skin\/012\/images\/0\/logo.png","Url":"\/api\/a290abf710\/web\/","Postion":"t01","Width":"640","Height":"84","NeedLink":"1"},{"PId":"64516","SId":"14","TradeId":"0","MemberId":"2294","ContentsType":"1","Title":"[\"\"]","ImgPath":"[\"\\\/api\\\/web\\\/skin\\\/012\\\/images\\\/0\\\/banner.jpg\"]","Url":"[\"\\\/api\\\/a290abf710\\\/web\\\/\"]","Postion":"t02","Width":"640","Height":"264","NeedLink":"1"}];
        var MusicPath='';
        $(document).ready(index_obj.index_init);
    </script><script language="javascript">
        var skin_index_init=function(){
            $('#header').hide();
            $('a').filter('[ajax_url]').off().each(function(){
                $(this).attr('href', $(this).attr('ajax_url'));
            });
        }
    </script>
    <div id="web_skin_index">
        <div class="web_skin_index_list toper" rel="edit-t01">
            <div class="img"><a href="http://www.ptweixin.com/api/a290abf710/web/" target="_self"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/images/logo.png"></a></div>
        </div>
        <div class="box">
            <div class="web_skin_index_list banner" rel="edit-t02">
                <div class="img"><div class="slider"><div class="flexslider"><ul class="slides"><li style="display: list-item;"><a href="http://www.ptweixin.com/api/a290abf710/web/" target="_self">
                                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/images/banner.jpg" alt=""></a></li></ul></div></div></div>
            </div>
            <div class="list_box">
            </div>
            <div class="p_t">
                <div><a href="http://www.ptweixin.com/api/a290abf710/web/products/?wxref=mp.weixin.qq.com" target="_self">最新产品</a></div>
            </div>
            <ul id="products">
            </ul>
        </div>
    </div></div><script language="javascript">$(document).ready(function(){$('#support').css('bottom', 48);});</script><div id="support" style="bottom: 48px;"><a href="http://weixin.wapwei.com/wapwei/index.html" target="_self">本功能由万普微盟提供技术支持</a></div>
</body></html>