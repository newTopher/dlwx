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
            <a ajax_url="/api/a290abf710/web/lbs/" target="_self"></a>
        </li>
    </ul>
</div><div id="web_page_contents"><link href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/css/flexslider.css" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/css/index.css" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/css/index_media.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/flexslider.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/index.js"></script>
    <script language="javascript">
        var web_skin_data=[{"PId":"64517","SId":"15","TradeId":"0","MemberId":"2294","ContentsType":"1","Title":"[\"\"]","ImgPath":"[\"\\\/api\\\/web\\\/skin\\\/013\\\/images\\\/0\\\/banner.jpg\"]","Url":"[\"\\\/api\\\/a290abf710\\\/web\\\/\"]","Postion":"t01","Width":"640","Height":"1010","NeedLink":"0"},{"PId":"64518","SId":"15","TradeId":"0","MemberId":"2294","ContentsType":"0","Title":"","ImgPath":"\/api\/web\/skin\/013\/images\/0\/i2.jpg","Url":"\/api\/a290abf710\/web\/","Postion":"t03","Width":"210","Height":"210","NeedLink":"1"},{"PId":"64519","SId":"15","TradeId":"0","MemberId":"2294","ContentsType":"0","Title":"","ImgPath":"\/api\/web\/skin\/013\/images\/0\/i1.jpg","Url":"\/api\/a290abf710\/web\/","Postion":"t02","Width":"420","Height":"210","NeedLink":"1"}];
        var MusicPath='';
        $(document).ready(index_obj.index_init);
    </script><script language="javascript">
        var skin_index_init=function(){
            $('#header, #footer, #footer_points, #support').hide();
            $('#skin_index_menu').show().css('z-index', '10');
            $('#skin_index_menu .bg').css('z-index', '2');
            $('#skin_index_menu a').css('z-index', '3');
            $('#web_skin_index').height($(window).height());
            $('#web_skin_index .box').css({position:'fixed', bottom:0, 'z-index':10});
            $('#web_skin_index .banner *').not('img').height($(window).height());
        };
    </script>
    <div id="web_skin_index" style="height: 606px;">
        <div class="web_skin_index_list banner" rel="edit-t01">
            <div class="img" style="height: 606px;"><div class="slider" style="height: 606px;"><div class="flexslider" style="height: 606px;"><ul class="slides" style="height: 606px;"><li style="display: list-item; height: 606px;">
                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/images/banner.jpg" alt=""></li></ul></div></div></div>
        </div>
        <div class="box" style="position: fixed; bottom: 0px; z-index: 10;">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody><tr>
                    <td width="66%">
                        <div class="web_skin_index_list cp-left list" rel="edit-t02">
                            <div class="img"><a href="http://www.ptweixin.com/api/a290abf710/web/" target="_self">
                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/images/i1.jpg"></a></div>
                            <div class="bg"></div>
                            <div class="text"><a href="http://www.ptweixin.com/api/a290abf710/web/" target="_self"></a>
                            </div>
                        </div>
                    </td>
                    <td width="34%">
                        <div class="web_skin_index_list list" rel="edit-t03">
                            <div class="img"><a href="http://www.ptweixin.com/api/a290abf710/web/" target="_self"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/images/i2.jpg"></a></div>
                        </div>
                    </td>
                </tr>
                </tbody></table>
        </div>
    </div>
</div><div id="support" style="bottom: 0px; display: none;"><a href="http://www.ptweixin.com/api/edde7a96d5/web/?wxref=mp.weixin.qq.com" target="_self">本功能由万普微盟提供技术支持</a></div>
</body></html>