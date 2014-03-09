<!DOCTYPE html>
<!-- saved from url=(0266)http://www.weimob.com/Webnewmembercard/GetMember?_tj_twtype=14&_tj_pid=1071&_tt=1&_tj_graphicid=162&_tj_title=%E5%BE%AE%E7%9B%9F%E4%BC%9A%E5%91%98%E5%8D%A1&_tj_keywords=%E4%BC%9A%E5%91%98%E5%8D%A1&pid=1071&wechatid=osXr8jhymnvcdSxA8m-QhNX6HwUI&wxref=mp.weixin.qq.com -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/member/main.css" media="all">
    <script type="text/javascript" async="" src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/wtj.js"></script><script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/jquery_min.js"></script>
    <title><?php echo $vipdata->vip_name; ?></title>

    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta name="Keywords" content="万普微盟">
    <meta name="Description" content="万普微盟,微信推广营销行业领导者">
    <!-- Mobile Devices Support @begin -->

    <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
    <meta content="no-cache" http-equiv="pragma">
    <meta content="0" http-equiv="expires">
    <meta content="telephone=no, address=no" name="format-detection">
    <meta name="apple-mobile-web-app-capable" content="yes"> <!-- apple devices fullscreen -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <script charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/v.js"></script></head>
<body onselectstart="return true;" ondragstart="return false;" style="" youdao="bind">
<div class="container get card">
    <header>
        <div class="header card">
            <div id="card" data-role="card">
                <div class="front" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/images/vip/<?php echo $vipdata->vip_style.'.png'; ?>);">
                    <span class="name" style="color:#FFFFFF"><?php echo $vipdata->vip_name; ?></span>
                    <span class="no" style="color:#FBFFFA;"></span>
                </div>
            </div>
        </div>
        <div>
            <ul class="tbox group_btn3">
                <li>
                </li>
                <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/Member/Addmember/sid/<?php echo $sid; ?>/f/<?php echo $openid;?>">领取会员卡</a></li>
            </ul>
        </div>
    </header>
    <div class="body">
        <ul class="list_ul">
            <!-- 特权-->
            <li class="li_a">
                <label class="label" onclick="this.parentNode.classList.toggle('on');"><i>&nbsp;</i>会员卡说明<span>&nbsp;</span></label>
                <ol>
                    <h6>会员尊享9.5折:</h6>
                    <p></p><p>
                        <span><span style="line-height:20px;">1、持本卡可享受全店9.5折优惠</span></span>
                    </p>
                    <p>
                        <span><span style="line-height:20px;">2、持本卡可领取会员特有优惠券或代金券</span></span>
                    </p>
                    <p>
                        <span><span style="line-height:20px;">3、本卡为积分储值卡，不可兑换</span></span>
                    </p><p></p>
                </ol>
            </li>
            <!-- 开卡活动-->
            <!-- 生日关怀-->
            <!-- 节日关怀-->
            <!-- 联系电话-->
            <li class="li_i">
                <a class="label" href="tel:<?php echo $vipdata->tel; ?>"><i>&nbsp;</i><?php echo $vipdata->tel; ?> <span>&nbsp;</span></a>
            </li>
            <!-- 地址-->
            <li class="li_j">
                <a href="http://api.map.baidu.com/marker?location=<?php echo $vipdata->position_y;  ?>,<?php echo $vipdata->position_x;  ?>&title=<?php echo urlencode($vipdata->address);  ?>&name=<?php echo urlencode($vipdata->address);  ?>&content=<?php echo urlencode($vipdata->address);  ?>&output=html&src=weiba|weiweb">
                    <label class="label"><i>&nbsp;</i><p class="mutipleLine"><?php echo $vipdata->address;  ?></p> <span>&nbsp;</span></label>
                </a>
            </li>
            <!-- 门店-->
            <!--
            <li class="li_k">
                <a href="http://www.weimob.com/Webnewmembercard/store?pid=1071&wechatid=osXr8jhymnvcdSxA8m-QhNX6HwUI"><label class="label"><i>&nbsp;</i>适用门店<span>&nbsp;</span></label></a>
            </li>
            -->
        </ul>
    </div>
</div>
<script type="text/javascript">
    document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        WeixinJSBridge.call('hideToolbar');
    });

    window.shareData = {
        "imgUrl": "",
        "timeLineLink": "http://www.weimob.com/Webnewmembercard/GetMember?_tj_twtype=14&_tj_pid=1071&_tt=1&_tj_graphicid=162&_tj_title=%E5%BE%AE%E7%9B%9F%E4%BC%9A%E5%91%98%E5%8D%A1&_tj_keywords=%E4%BC%9A%E5%91%98%E5%8D%A1&pid=1071&wechatid=fromUsername&wxref=mp.weixin.qq.com",
        "sendFriendLink": "http://www.weimob.com/Webnewmembercard/GetMember?_tj_twtype=14&_tj_pid=1071&_tt=1&_tj_graphicid=162&_tj_title=%E5%BE%AE%E7%9B%9F%E4%BC%9A%E5%91%98%E5%8D%A1&_tj_keywords=%E4%BC%9A%E5%91%98%E5%8D%A1&pid=1071&wechatid=fromUsername&wxref=mp.weixin.qq.com",
        "weiboLink": "http://www.weimob.com/Webnewmembercard/GetMember?_tj_twtype=14&_tj_pid=1071&_tt=1&_tj_graphicid=162&_tj_title=%E5%BE%AE%E7%9B%9F%E4%BC%9A%E5%91%98%E5%8D%A1&_tj_keywords=%E4%BC%9A%E5%91%98%E5%8D%A1&pid=1071&wechatid=fromUsername&wxref=mp.weixin.qq.com",
        "tTitle": "会员卡",
        "tContent": "微时代会员卡，方便携带，永不挂失。",
        "fTitle": "会员卡",
        "fContent": "微时代会员卡，方便携带，永不挂失。",
        "wContent": "微时代会员卡，方便携带，永不挂失。"
    };
</script>        		<div mark="stat_code" style="width:0px; height:0px; display:none;">
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
        wmShare.src += shareToPlatform + '&pid=1071&sendFriendLink=' + encodeURIComponent(sendFriendLink);
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
            "timeLineLink": "http://www.weimob.com/Webnewmembercard/GetMember?_tj_twtype=14&_tj_pid=1071&_tt=1&_tj_graphicid=162&_tj_title=%E5%BE%AE%E7%9B%9F%E4%BC%9A%E5%91%98%E5%8D%A1&_tj_keywords=%E4%BC%9A%E5%91%98%E5%8D%A1&pid=1071&wechatid=fromUsername&wxref=mp.weixin.qq.com",
            "sendFriendLink": "http://www.weimob.com/Webnewmembercard/GetMember?_tj_twtype=14&_tj_pid=1071&_tt=1&_tj_graphicid=162&_tj_title=%E5%BE%AE%E7%9B%9F%E4%BC%9A%E5%91%98%E5%8D%A1&_tj_keywords=%E4%BC%9A%E5%91%98%E5%8D%A1&pid=1071&wechatid=fromUsername&wxref=mp.weixin.qq.com",
            "weiboLink": "http://www.weimob.com/Webnewmembercard/GetMember?_tj_twtype=14&_tj_pid=1071&_tt=1&_tj_graphicid=162&_tj_title=%E5%BE%AE%E7%9B%9F%E4%BC%9A%E5%91%98%E5%8D%A1&_tj_keywords=%E4%BC%9A%E5%91%98%E5%8D%A1&pid=1071&wechatid=fromUsername&wxref=mp.weixin.qq.com",
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
                weimobAfterShare("osXr8jhymnvcdSxA8m-QhNX6HwUI",window.shareData.sendFriendLink,'appmessage');
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
                weimobAfterShare("osXr8jhymnvcdSxA8m-QhNX6HwUI",window.shareData.timeLineLink,'timeline');
                _report('timeline', res.err_msg);
            });
        });

        // 分享到微博
        WeixinJSBridge.on('menu:share:weibo', function (argv) {
            WeixinJSBridge.invoke('shareWeibo', {
                "content": window.shareData.wContent,
                "url": window.shareData.weiboLink,
            }, function (res) {
                weimobAfterShare("osXr8jhymnvcdSxA8m-QhNX6HwUI",window.shareData.weiboLink,'weibo');
                _report('weibo', res.err_msg);
            });
        });
    }, false);
</script><script src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/h.js" type="text/javascript"></script>

</body></html>