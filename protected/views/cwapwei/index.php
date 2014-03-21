<!DOCTYPE html>
<!-- saved from url=(0122)http://www.weimob.com/weisite/detail?pid=42421&bid=69441&wechatid=fromUsername&did=171871&from=list&wxref=mp.weixin.qq.com -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script src="<?php echo Yii::app()->request->baseUrl; ?>/js/wapwei/saved_resource" charset="utf-8"></script><script src="<?php echo Yii::app()->request->baseUrl; ?>/js/wapwei/ujian.js" charset="utf-8" id="uyan_script"></script><script src="<?php echo Yii::app()->request->baseUrl; ?>/js/wapwei/style7.js" charset="utf-8" id="uyan_script"></script><script src="<?php echo Yii::app()->request->baseUrl; ?>/js/wapwei/saved_resource(1)" charset="utf-8" id="uyan_script"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/wapwei/reset.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/wapwei/weimob-ui-1-1.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/wapwei/common.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/wapwei/peak-0.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/wapwei/menu-2.css" media="all">
    <script type="text/javascript" async="" src="<?php echo Yii::app()->request->baseUrl; ?>/js/wapwei/wtj.js"></script><script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/wapwei/jQuery.js"></script>
    <title><?php echo $menudata->name; ?></title>

    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta name="Keywords" content="<?php echo $menudata->name; ?>">
    <meta name="Description" content="<?php echo $menudata->name; ?>">
    <!-- Mobile Devices Support @begin -->

    <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
    <meta content="no-cache" http-equiv="pragma">
    <meta content="0" http-equiv="expires">
    <meta content="telephone=no, address=no" name="format-detection">
    <meta name="apple-mobile-web-app-capable" content="yes"> <!-- apple devices fullscreen -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <style>
        img{max-width:100%!important;}
    </style>
    <script charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/js/wapwei/v.js"></script><style type="text/css">.uyan_cmt_uname{color: #2B8CE6 !important;}#uyan_cmt_box{width: 100% !important;}#uyan_cmty_btn{display: block !important;}#uyan_login_btn{display: block !important;}#uyan_usp{display: none !important;}.uyan_st_slog{right: 162px !important;}#uyan_info_sync{display: none !important;}</style></head>
<body onselectstart="return true;" ondragstart="return false;">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/wapwei/font-awesome.css" media="all">

<div class="weimob-page">
<footer class="nav_footer">
    <ul class="box">
        <li><a href="javascript:history.go(-1);">返回</a></li>
        <li><a href="javascript:history.go(1);">前进</a></li>
        <li><a href="<?php echo Yii::app()->request->baseUrl.'/W/I/sid/'.$uid; ?>">首页</a></li>
        <li><a href="javascript:location.reload();">刷新</a></li>
    </ul>
</footer>
<div class="weimob-content">
    <h3><?php echo $menudata->name; ?></h3>
    <div class="pub_time"><?php echo date("Y.m.d",$menudata->add_time); ?></div>
    <div class="head_logo">
        <div>
            <span style="background-image:url('<?php echo Yii::app()->request->baseUrl; ?>/js/wapwei/chat_64px.png');"></span>
        </div>
        <div style="width:100%;">
            <label>
                <a id="post-user" href="javascript::viewProfile();">点击关注<?php echo $webdata->webname_title; ?>
            </label>
            <div style="color:#ccc;"><?php echo $userdata->wx_account; ?></div>
        </div>
    </div>
    <article>
        <?php echo $menudata->text; ?>
    </article>

</div>
<section style="width:95%; margin:0px auto;">
    <div id="mcover" onclick="document.getElementById('mcover').style.display='';" style="display:none;">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/js/wapwei/guide.png">
    </div>
    <div class="text" id="content">
        <div id="mess_share">
            <div id="share_1">
                <button class="button2" onclick="document.getElementById('mcover').style.display='block';">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/js/wapwei/icon_msg.png">&nbsp;发送给朋友
                </button>
            </div>
            <div id="share_2">
                <button class="button2" onclick="document.getElementById('mcover').style.display='block';">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/js/wapwei/icon_timeline.png">&nbsp;分享到朋友圈
                </button>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <!-- UY BEGIN -->
    <div id="uyan_frame"></div>
    <script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=1904918"></script>
    <!-- UY END -->
</section>

<style>
    .ujian-uyan{
        display:none;
    }
</style>
<script>
    $(document).ready(function(){
        setInterval(function(){
            $('.ujian-uyan').next().remove();
        }, 1000);
    });
</script>
<div style="padding-bottom:0!important;">
    <a href="javascript:window.scrollTo(0,0);" style="font-size:12px;margin:5px auto;display:block;color:#fff;text-align:center;line-height:35px;background:#333;margin-bottom:-10px;">返回顶部</a>
</div>

<!--
分享前控制
-->
<script type="text/javascript">
    document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        window.shareData = {
            "imgUrl": "http://weixin.wapwei.com/images/wapweilogo.jpg",
            "timeLineLink": "http://weixin.wapwei.com/Cwapwei/I/id/<?php echo $menudata->id; ?>/sid/<?php echo $userdata->id; ?>/openid/<?php echo $openid;  ?>/from/<?php echo $openid;  ?>/type/timeline",
            "sendFriendLink": "http://weixin.wapwei.com/Cwapwei/I/id/<?php echo $menudata->id; ?>/sid/<?php echo $userdata->id; ?>/openid/<?php echo $openid;  ?>/from/<?php echo $openid;  ?>/type/friend",
            "weiboLink": "http://weixin.wapwei.com/Cwapwei/I/id/<?php echo $menudata->id; ?>/sid/<?php echo $userdata->id; ?>/openid/<?php echo $openid;  ?>/from/<?php echo $openid;  ?>/type/weibo",
            "tTitle": "<?php echo $menudata->name; ?> -- <?php echo $webdata->webname_title; ?>",
            "tContent": "<?php echo $menudata->name; ?>",
            "fTitle": "<?php echo $menudata->name; ?> -- <?php echo $webdata->webname_title; ?>",
            "fContent": "<?php echo $menudata->name; ?>",
            "wContent": "<?php echo $menudata->name; ?>"
        };
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
                _report('timeline', res.err_msg);
            });
        });

        // 分享到微博
        WeixinJSBridge.on('menu:share:weibo', function (argv) {
            WeixinJSBridge.invoke('shareWeibo', {
                "content": window.shareData.wContent,
                "url": window.shareData.weiboLink
            }, function (res) {
                _report('weibo', res.err_msg);
            });
        });
    }, false)
</script>
<script type="text/javascript">

    var profile = document.getElementById('post-user');
    if (profile){
        profile.setAttribute("href", "weixin://profile/<?php echo $userdata->wx_openid; ?>");
    }

    function viewProfile(){
        if (typeof WeixinJSBridge != "undefined" && WeixinJSBridge.invoke){
            WeixinJSBridge.invoke('profile',{
                'username':'<?php echo $userdata->wx_openid; ?>',
                'scene':'57'
            });
        }
    }

</script>

</div>
<footer style="overflow:visible;">
    <div class="weimob-copyright" style="padding-bottom:50px;">
        <a href="<?php echo Yii::app()->request->baseUrl.'/W/I/sid/'.$uid; ?>"><?php echo $webdata->webname_title; ?>版权所有</a>
    </div>
    <span class="weimob-support" style="display:none;">万普微盟</span>
</footer>
<div mark="stat_code" style="width:0px; height:0px; display:none;">
</div>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/wapwei/h.js" type="text/javascript"></script>
</body></html>