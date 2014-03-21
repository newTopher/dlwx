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
    <style>
        .flex-control-nav {
            display: none;
        }
    </style>
</head>

<body scroll=no style="overflow:hidden">
<div id="web_page_contents_loading"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/images/loading.gif"></div><div id="header" class="wrap" style="display: none;">
    <ul>
        <li class="home first" style="width: 33.33233333333334%;"><a href="<?php echo Yii::app()->request->baseUrl.'/W/I/sid/'.$webData->uid; ?>" target="_self"></a></li>
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
        var web_skin_data=[{"PId":"64416","SId":"48","TradeId":"0","MemberId":"2294","ContentsType":"1","Title":"[\"\"]","ImgPath":"[\"\\\/api\\\/web\\\/skin\\\/046\\\/images\\\/0\\\/banner.jpg\"]","Url":"[\"\\\/api\\\/a290abf710\\\/web\\\/\"]","Postion":"t01","Width":"640","Height":"332","NeedLink":"1"},{"PId":"64417","SId":"48","TradeId":"0","MemberId":"2294","ContentsType":"0","Title":"品牌服务","ImgPath":"\/api\/web\/skin\/046\/images\/0\/i0.jpg","Url":"\/api\/a290abf710\/web\/","Postion":"t02","Width":"192","Height":"192","NeedLink":"1"},{"PId":"64418","SId":"48","TradeId":"0","MemberId":"2294","ContentsType":"0","Title":"功能介绍","ImgPath":"\/api\/web\/skin\/046\/images\/0\/i1.jpg","Url":"\/api\/a290abf710\/web\/","Postion":"t03","Width":"192","Height":"192","NeedLink":"1"},{"PId":"64419","SId":"48","TradeId":"0","MemberId":"2294","ContentsType":"0","Title":"关于我们","ImgPath":"\/api\/web\/skin\/046\/images\/0\/i2.jpg","Url":"\/api\/a290abf710\/web\/","Postion":"t04","Width":"192","Height":"192","NeedLink":"1"},{"PId":"64420","SId":"48","TradeId":"0","MemberId":"2294","ContentsType":"0","Title":"分享交流","ImgPath":"\/api\/web\/skin\/046\/images\/0\/i3.jpg","Url":"\/api\/a290abf710\/web\/","Postion":"t05","Width":"192","Height":"192","NeedLink":"1"},{"PId":"64421","SId":"48","TradeId":"0","MemberId":"2294","ContentsType":"0","Title":"最新优惠","ImgPath":"\/api\/web\/skin\/046\/images\/0\/i4.jpg","Url":"\/api\/a290abf710\/web\/","Postion":"t06","Width":"192","Height":"192","NeedLink":"1"},{"PId":"64422","SId":"48","TradeId":"0","MemberId":"2294","ContentsType":"0","Title":"招兵买马","ImgPath":"\/api\/web\/skin\/046\/images\/0\/i5.jpg","Url":"\/api\/a290abf710\/web\/","Postion":"t07","Width":"192","Height":"192","NeedLink":"1"},{"PId":"64423","SId":"48","TradeId":"0","MemberId":"2294","ContentsType":"0","Title":"体验预约","ImgPath":"\/api\/web\/skin\/046\/images\/0\/i6.jpg","Url":"\/api\/a290abf710\/web\/","Postion":"t08","Width":"192","Height":"192","NeedLink":"1"},{"PId":"64424","SId":"48","TradeId":"0","MemberId":"2294","ContentsType":"0","Title":"会员卡","ImgPath":"\/api\/web\/skin\/046\/images\/0\/i7.jpg","Url":"\/api\/a290abf710\/web\/","Postion":"t09","Width":"192","Height":"192","NeedLink":"1"},{"PId":"64425","SId":"48","TradeId":"0","MemberId":"2294","ContentsType":"0","Title":"联系我们","ImgPath":"\/api\/web\/skin\/046\/images\/0\/i8.jpg","Url":"\/api\/a290abf710\/web\/","Postion":"t10","Width":"192","Height":"192","NeedLink":"1"}];
        var MusicPath='';
        $(document).ready(index_obj.index_init);
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                animationLoop: true ,
                directionNav: false
            });
        });
    </script><script type="text/javascript">
        var skin_index_init=function(){
            $('#header,#footer, #footer_points, #support').hide();//, #footer, #footer_points, #support
            $('a').filter('[ajax_url]').off().each(function(){
                $(this).attr('href', $(this).attr('ajax_url'));
            });
            //$('#web_skin_index .banner *').not('img').height($(window).height());
        };
    </script>
    <div id="web_skin_index">
        <div class="web_skin_index_list banner" rel="edit-t01">
            <div class="img"><div class="slider"><div class="flexslider">
                        <ul class="slides">
                            <?php foreach($sliderdata as $k=>$v): ?>
                                <li style="display: list-item;">
                                    <a href="<?php echo $v['link']; ?>" target="_self">
                                        <img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo $v['pic']; ?>" alt="">
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul></div></div></div>
        </div>
        <?php
        $p1 = explode('_',CJSON::decode($webNavData->p1,false)->linkid);
        $p2 = explode('_',CJSON::decode($webNavData->p2,false)->linkid);
        $p3 = explode('_',CJSON::decode($webNavData->p3,false)->linkid);
        $p4 = explode('_',CJSON::decode($webNavData->p4,false)->linkid);
        $p5 = explode('_',CJSON::decode($webNavData->p5,false)->linkid);
        $p6 = explode('_',CJSON::decode($webNavData->p6,false)->linkid);
        $p7 = explode('_',CJSON::decode($webNavData->p7,false)->linkid);
        $p8 = explode('_',CJSON::decode($webNavData->p8,false)->linkid);
        $p9 = explode('_',CJSON::decode($webNavData->p9,false)->linkid);
        ?>
        <div class="box">
            <ul>
                <li>
                    <div class="cont">
                        <div class="web_skin_index_list" rel="edit-t02">
                            <div class="img"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p1[0]).'wapwei/I/id/'.strtoupper($p1[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo CJSON::decode($webNavData->p1,false)->pic;  ?>"></a></div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="cont">
                        <div class="web_skin_index_list" rel="edit-t03">
                            <div class="img"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p2[0]).'wapwei/I/id/'.strtoupper($p2[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo CJSON::decode($webNavData->p2,false)->pic;  ?>"></a></div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="cont">
                        <div class="web_skin_index_list" rel="edit-t04">
                            <div class="img"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p3[0]).'wapwei/I/id/'.strtoupper($p3[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo CJSON::decode($webNavData->p3,false)->pic;  ?>"></a></div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="cont">
                        <div class="web_skin_index_list" rel="edit-t05">
                            <div class="img"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p4[0]).'wapwei/I/id/'.strtoupper($p4[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo CJSON::decode($webNavData->p4,false)->pic;  ?>"></a></div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="cont">
                        <div class="web_skin_index_list" rel="edit-t06">
                            <div class="img"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p5[0]).'wapwei/I/id/'.strtoupper($p5[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo CJSON::decode($webNavData->p5,false)->pic;  ?>"></a></div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="cont">
                        <div class="web_skin_index_list" rel="edit-t07">
                            <div class="img"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p6[0]).'wapwei/I/id/'.strtoupper($p6[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo CJSON::decode($webNavData->p6,false)->pic;  ?>"></a></div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="cont">
                        <div class="web_skin_index_list" rel="edit-t08">
                            <div class="img"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p7[0]).'wapwei/I/id/'.strtoupper($p7[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo CJSON::decode($webNavData->p7,false)->pic;  ?>"></a></div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="cont">
                        <div class="web_skin_index_list" rel="edit-t09">
                            <div class="img"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p8[0]).'wapwei/I/id/'.strtoupper($p8[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo CJSON::decode($webNavData->p8,false)->pic;  ?>"></a></div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="cont">
                        <div class="web_skin_index_list" rel="edit-t10">
                            <div class="img"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p9[0]).'wapwei/I/id/'.strtoupper($p9[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo CJSON::decode($webNavData->p9,false)->pic;  ?>"></a></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div><div id="support" style="bottom: 0px; display: none;"><a href="http://weixin.wapwei.com/wapwei/index.html" target="_self">本功能由万普微盟提供技术支持</a></div>
</body></html>