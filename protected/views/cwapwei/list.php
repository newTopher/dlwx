<!DOCTYPE html>
<!-- saved from url=(0112)http://www.weimob.com/weisite/list?pid=94244&bid=194370&wechatid=fromUsername&ltid=286185&wxref=mp.weixin.qq.com -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/list/reset.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/list/weimob-ui-1-1.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/list/common.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/list/list-1.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/list/home-menu-4.css" media="all">
    <script type="text/javascript" async="" src="<?php echo Yii::app()->request->baseUrl; ?>/js/list/wtj.js"></script><script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/list/jQuery.js"></script>
    <title><?php echo $menudata->name; ?></title>

    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <!-- Mobile Devices Support @begin -->

    <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
    <meta content="no-cache" http-equiv="pragma">
    <meta content="0" http-equiv="expires">
    <meta content="telephone=no, address=no" name="format-detection">
    <meta name="apple-mobile-web-app-capable" content="yes"> <!-- apple devices fullscreen -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <!-- Mobile Devices Support @end -->
    <link rel="shortcut icon" href="http://stc.weimob.com/img/favicon.ico">
    <script charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/js/list/v.js"></script></head>
<body onselectstart="return true;" ondragstart="return false;" youdao="bind">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/list/font-awesome.css" media="all">

<div class="weimob-page">
    <article id="shareCover" class="toshare" onclick="$('#shareCover').toggleClass('on')">
        <table>
            <tbody><tr>
                <td colspan="2" style="text-align:right;">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/js/list/share_1.png" style="width:120px!important;">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/js/list/share_2.png" style="width:30px!important;">
                </td>
            </tr>
            <tr>
                <td style="width:50%;">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/js/list/share_4.png">
                    <div>发送给朋友</div>
                </td>
                <td>
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/js/list/share_3.png">
                    <div>分享到朋友圈</div>
                </td>
            </tr>
            </tbody></table>
    </article>
    <script>
        window.addEventListener("DOMContentLoaded", function(){
            var nav = document.querySelectorAll(".nav_8")[0];

            var evts = {
                handleEvent: function(evt){
                    if("A" == evt.target.nodeName){
                        evt.target.classList.toggle("active");
                    }
                }
            }
            nav.addEventListener("mousedown", evts, false);
            nav.addEventListener("mouseup", evts, false);
            nav.addEventListener("touchstart", evts, false);
            nav.addEventListener("touchend", evts, false);
        });
    </script>
    <div class="top_bar footer_bar">
        <section>
            <div class="nav_8">
                <ul class="box">
                    <li>
                        <a href="javascript:history.go(-1);">
                            <p class="back2"></p>
                            <span>返回</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->request->baseUrl.'/W/I/sid/'.$uid; ?>">
                            <p class="home"></p>
                            <span>首页</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:$('#shareCover').toggleClass('on');">
                            <p class="share"></p>
                            <span>分享</span>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!--
    分享前控制
    -->
    
    <div class="weimob-content">
        <div class="weimob-list">
            <?php foreach($listdata as $key=>$val): ?>
            <a class="weimob-list-item" href="<?php echo Yii::app()->request->baseUrl;?>/Cwapwei/I/id/<?php echo $val->id; ?>/sid/<?php echo $uid; ?>/f/<?php echo $openid; ?>">
                <div class="weimob-list-item-line">
                    <div class="weimob-list-item-title"><?php echo $val->name; ?></div>
                </div>
                <div class="weimob-list-item-icon-two icon-arrow-r" style="display:none;"></div>
            </a>
           <?php endforeach; ?>
        </div>
    </div>
</div>
<footer style="overflow:visible;">
    <div class="weimob-copyright" style="padding-bottom:50px;">
        <a href="<?php echo Yii::app()->request->baseUrl.'/W/I/sid/'.$uid; ?>"><?php echo $webdata->webname_title; ?>版权所有</a>
    </div>
    <span class="weimob-support" style="display:none;">©万普微盟提供</span>
</footer>
<div mark="stat_code" style="width:0px; height:0px; display:none;">
</div>

<script type="text/javascript">
    (function() {
        var wtj = document.createElement('script'); wtj.type = 'text/javascript'; wtj.async = true;
        wtj.src = 'http://tj.weimob.com/wtj.js?url=' + encodeURIComponent(location.href);
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wtj, s);
    })();
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fd80741dd59de91e1846b2add2c0ad2a2' type='text/javascript'%3E%3C/script%3E"));
    function weimobAfterShare(shareFromWechatId,sendFriendLink,shareToPlatform){
        var wmShare = document.createElement('script'); wmShare.type = 'text/javascript'; wmShare.async = true;
        wmShare.src = 'http://' + getShareApiRouter() + '/api-share.js?fromWechatId=' + shareFromWechatId + '&shareToPlatform=';
        wmShare.src += shareToPlatform + '&pid=94244&sendFriendLink=' + encodeURIComponent(sendFriendLink);
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wmShare, s);
    }
    function getShareApiRouter(){
        var str_domain = location.href.split('/',4)[2];
        var tj_domain = '127.0.0.1';
        switch(str_domain){
            case 'www.weimob.com':
                tj_domain = 'tj.weimob.com';
                break;
            case '112.124.28.82':
                tj_domain = '112.124.28.82:400';
                break;
        }
        return tj_domain;
    }
    if(typeof(window.shareData) == 'undefined'){
        window.shareData = {
            "imgUrl": "",
            "timeLineLink": "http://www.weimob.com/weisite/list?pid=94244&bid=194370&wechatid=fromUsername&ltid=286185&wxref=mp.weixin.qq.com",
            "sendFriendLink": "http://www.weimob.com/weisite/list?pid=94244&bid=194370&wechatid=fromUsername&ltid=286185&wxref=mp.weixin.qq.com",
            "weiboLink": "http://www.weimob.com/weisite/list?pid=94244&bid=194370&wechatid=fromUsername&ltid=286185&wxref=mp.weixin.qq.com",
            "tTitle": document.title,
            "tContent": document.title,
            "fTitle": document.title,
            "fContent": document.title,
            "wContent": document.title
        }
    }
    document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        // 发送给好友
        WeixinJSBridge.on('menu:share:appmessage', function (argv) {
            WeixinJSBridge.invoke('sendAppMessage', {
                "img_url": window.shareData.imgUrl,
                "img_width": "640",
                "img_height": "640",
                "link": window.shareData.sendFriendLink,
                "desc": window.shareData.fContent,
                "title": window.shareData.fTitle
            }, function (res) {
                weimobAfterShare("",window.shareData.sendFriendLink,'appmessage');
                _report('send_msg', res.err_msg);
            })
        });

        // 分享到朋友圈
        WeixinJSBridge.on('menu:share:timeline', function (argv) {
            WeixinJSBridge.invoke('shareTimeline', {
                "img_url": window.shareData.imgUrl,
                "img_width": "640",
                "img_height": "640",
                "link": window.shareData.timeLineLink,
                "desc": window.shareData.tContent,
                "title": window.shareData.tTitle
            }, function (res) {
                //weimobAfterShare("",window.shareData.timeLineLink,'timeline');
                _report('timeline', res.err_msg);
            });
        });

        // 分享到微博
        WeixinJSBridge.on('menu:share:weibo', function (argv) {
            WeixinJSBridge.invoke('shareWeibo', {
                "content": window.shareData.wContent,
                "url": window.shareData.weiboLink
            }, function (res) {
                weimobAfterShare("",window.shareData.weiboLink,'weibo');
                _report('weibo', res.err_msg);
            });
        });
    }, false);
</script><script src="<?php echo Yii::app()->request->baseUrl; ?>/js/list/h.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/list/ChatFloat.js"></script>
<script type="text/javascript">

    new ChatFloat({
        AId: '94244',
        openid: "",
        top:150,
        right:0
    });
</script>


</body></html>