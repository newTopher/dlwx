<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0138)http://www.371keji.com/index.php?g=Wap&m=Index&a=index&token=iedytk1393233232&wecha_id=o6vl8jkfXJJjkxYQM44zEPBTJijg&sgssz=mp.weixin.qq.com -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>暨博教育</title>
    <!--<base href=".">--><base href=".">
    <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/css/cate8_3.css" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/css/iscroll.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/css/plugmenu.css">
    <style>
        #cate9 {
            background: url(http://bcs.duapp.com/baeimg/1joroYYvQI.jpg) no-repeat scroll 0 bottom #530337;/*修改图片路径*/
            background-size: 100% 100%;
        }
        #cate9 .catemenu li {
            border-top: 1px solid rgba(0, 0, 0, 0.17);

        }
        #cate9 .catemenu a {
            border-right: 1px solid rgba(0, 0, 0, 0.17);color: #FFFFFF;
        }
        #cate9 .catemenu {
            background-color: rgba(255, 255, 255, 0.14);
        }
        .copyright {
            color: rgba(255, 255, 255, 0.48);
        }

    </style>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/iscroll.js" type="text/javascript"></script>
    <script type="text/javascript">
        var myScroll;

        function loaded() {
            myScroll = new iScroll('wrapper', {
                snap: true,
                momentum: false,
                hScrollbar: false,
                onScrollEnd: function () {
                    document.querySelector('#indicator > li.active').className = '';
                    document.querySelector('#indicator > li:nth-child(' + (this.currPageX+1) + ')').className = 'active';
                }
            });


        }

        document.addEventListener('DOMContentLoaded', loaded, false);
    </script>

</head>

<body id="cate9" scroll=no style="overflow:hidden">
<div class="banner">
    <div id="wrapper" style="overflow: hidden;">
        <div id="scroller" style="width: 4047px; -webkit-transition: 0ms; transition: 0ms;">
            <ul id="thelist">
                <li><a href="http://www.371keji.com/index.php?g=Wap&m=Index&a=content&token=iedytk1393233232&id=22&wecha_id=o6vl8jkfXJJjkxYQM44zEPBTJijg">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/images/530c17b4bebc3.jpg" style="width: 1349px;"></a></li>
                <li>
                    <a href="http://www.371keji.com/index.php?g=Wap&m=Index&a=content&token=iedytk1393233232&id=23&wecha_id=o6vl8jkfXJJjkxYQM44zEPBTJijg">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/images/530c17e166ff9.jpg" style="width: 1349px;"></a></li>
                <li>
                    <a href="http://www.371keji.com/index.php?g=Wap&m=Index&a=content&token=iedytk1393233232&id=121&wecha_id=o6vl8jkfXJJjkxYQM44zEPBTJijg">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/images/53210dfa1ab49.png" style="width: 1349px;"></a></li>
            </ul>
        </div>
    </div>
    <div id="nav">
        <div id="prev" onclick="myScroll.scrollToPage('prev', 0,400,3);return false">← prev</div>
        <ul id="indicator">
            <li class="">1</li><li class="active">2</li><li class="">3</li>
        </ul>
        <div id="next" onclick="myScroll.scrollToPage('next', 0);return false">next →</div>
    </div>
    <div class="clr"></div>
</div>

<div id="insert1"></div>

<div class="catemenu">
    <ul>
        <li>
            <a href="#">关于我们</a>
        </li><li>
            <a href="#">暨博动态</a>
        </li><li>
            <a href="#">教师风采</a>
        </li><li>
            <a href="#">家园互动</a>
        </li><li>
            <a href="#">预约报名</a>
        </li><li>
            <a href="#">教研视窗</a>
        </li><li>
            <a href="#">优惠活动</a>
        </li><li>
            <a href="#">会员中心</a>
        </li><li>
            <a href="#">微信讲故事</a>
        </li>
        <div class="clr"></div>
    </ul>
</div>

<script>


    var count = document.getElementById("thelist").getElementsByTagName("img").length;


    for(i=0;i<count;i++){
        document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

    }

    document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";


    setInterval(function(){
        myScroll.scrollToPage('next', 0,400,count);
    },3500 );

    window.onresize = function(){
        for(i=0;i<count;i++){
            document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

        }

        document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";
    }

</script>
<div id="insert2"></div>
<div style="display:none"> </div>
<!--
<div class="plug-div">
    <div class="plug-phone">
        <div class="plug-menu themeStyle" style="background:#FF0000"><span class="close"></span></div>
        <div class="themeStyle plug-btn plug-btn1 close" style="background:#FF0000">
            <a href="tel:037167225582">
                <span style="background-image: url(./tpl/Wap/default/common/css/flash/images/img/tel.png);"></span>
            </a>
        </div><div class="themeStyle plug-btn plug-btn2 close" style="background:#FF0000">
            <a href="http://t.qq.com/angebao2010zaojiao">
                <span style="background-image: url(./tpl/Wap/default/common/css/flash/images/img/tencentweibo.png);"></span>
            </a>
        </div><div class="themeStyle plug-btn plug-btn3 close" style="background:#FF0000">
            <a href="http://www.371keji.com/index.php?g=Wap&m=Company&a=map&token=iedytk1393233232&wecha_id=o6vl8jkfXJJjkxYQM44zEPBTJijg">
                <span style="background-image: url(./tpl/Wap/default/common/css/flash/images/img/nav.png);"></span>
            </a>
        </div><div class="themeStyle plug-btn plug-btn4 close" style="background:#FF0000">
            <a href="http://www.371keji.com/index.php?g=Wap&m=Photo&a=index&token=iedytk1393233232&wecha_id=o6vl8jkfXJJjkxYQM44zEPBTJijg">
                <span style="background-image: url(./tpl/Wap/default/common/css/flash/images/img/album.png);"></span>
            </a>
        </div>
        <div class="plug-btn plug-btn5 close"></div>
    </div>
</div><script src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/zepto.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/plugmenu.js" type="text/javascript"></script>
-->
<div class="copyright">
    版权所有 @暨博教育    2013-2014</div>  </body></html>