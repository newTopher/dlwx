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
        var web_skin_data=[{"PId":"64512","SId":"13","TradeId":"0","MemberId":"2294","ContentsType":"1","Title":"[\"\"]","ImgPath":"[\"\\\/api\\\/web\\\/skin\\\/011\\\/images\\\/0\\\/banner.jpg\"]","Url":"[\"\\\/api\\\/a290abf710\\\/web\\\/\"]","Postion":"t01","Width":"640","Height":"320","NeedLink":"1"},{"PId":"64513","SId":"13","TradeId":"0","MemberId":"2294","ContentsType":"0","Title":"最新消息","ImgPath":"\/api\/web\/skin\/011\/images\/0\/star.png","Url":"\/api\/a290abf710\/web\/","Postion":"t02","Width":"40","Height":"40","NeedLink":"0"},{"PId":"64514","SId":"13","TradeId":"0","MemberId":"2294","ContentsType":"0","Title":"资询热线：","ImgPath":"\/api\/web\/skin\/011\/images\/0\/tel.png","Url":"\/api\/a290abf710\/web\/","Postion":"t03","Width":"40","Height":"40","NeedLink":"0"}];
        var MusicPath='';
        $(document).ready(index_obj.index_init);
    </script><script language="javascript">
        var skin_index_init=function(){
            $('#header').hide();
            $('a').filter('[ajax_url]').off().each(function(){
                $(this).attr('href', $(this).attr('ajax_url'));
            });
            $('#web_skin_index_col_0 .more').click(function(){
                $('#web_skin_index_col_0, #art_list').fadeOut();
            });
        }
    </script>
    <div id="web_skin_index">
        <div class="web_skin_index_list banner" rel="edit-t01">
            <div class="img"><div class="slider"><div class="flexslider">
                        <ul class="slides"><li style="display: list-item;">
                                <a href="http://www.ptweixin.com/api/a290abf710/web/" target="_self">
                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/images/banner.jpg" alt=""></a></li></ul></div></div></div>
        </div>
        <div id="web_skin_index_col_0">
            <div class="web_skin_index_list txt" rel="edit-t02">
                <div class="img"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/images/star.png"></div>
                <div class="text">最新消息</div>
            </div>
            <div class="more_bg"></div>
            <a href="http://www.ptweixin.com/api/a290abf710/web/?wxref=mp.weixin.qq.com#" class="more" target="_self"></a>
        </div>
        <div id="art_list">
            <div class="border">
            </div>
        </div>
        <div id="web_skin_index_col_1">
            <div class="web_skin_index_list txt" rel="edit-t03">
                <div class="img"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/images/tel.png"></div>
                <div class="text">资询热线：</div>
            </div>
            <a href="tel:" target="_self"></a>
        </div>
    </div>
    <div id="column_list">
    </div></div><div id="support" style="bottom: 0px;"><a href="http://www.ptweixin.com/api/edde7a96d5/web/?wxref=mp.weixin.qq.com" target="_self">本功能由万普微盟提供技术支持</a></div>
</body></html>