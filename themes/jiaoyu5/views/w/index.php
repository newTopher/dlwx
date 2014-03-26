<!DOCTYPE html>
<!-- saved from url=(0388)http://www.weimob.com/weisite/home?_tj_twtype=2&_tj_pid=15765&_tt=1&_tj_graphicid=43692&_tj_title=%E6%AC%A2%E8%BF%8E%E5%85%B3%E6%B3%A8%E6%84%9A%E5%85%AC%E7%A7%BB%E5%B1%B1%E7%BE%8E%E6%9C%AF%E5%B7%A5%E4%BD%9C%E5%AE%A4%E5%BE%AE%E4%BF%A1%E5%85%AC%E4%BC%97%E8%B4%A6%E5%8F%B7&_tj_keywords=Hello2BizUserNews&pid=15765&bid=29488&wechatid=opCZ5jtSBbtnlM45oDUDkk2W9Pbs&from=1&wxref=mp.weixin.qq.com -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/reset.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/snower.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/common.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/home-24.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/home-menu-2.css" media="all">
    <script type="text/javascript" async="" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/wtj.js"></script><script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/maivl.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/jQuery.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/swipe.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/zepto.js"></script>
    <title>愚公移山美术工作室</title>

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
    <script charset="utf-8" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/v.js"></script></head>
<body scroll=no style="overflow:hidden" onselectstart="return true;" ondragstart="return false;" youdao="bind">

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/font-awesome.css" media="all">

<div class="body" style="padding-bottom:50px;">
    <!--
幻灯片管理
-->
    <div style="-webkit-transform:translate3d(0,0,0);">
        <div id="banner_box" class="box_swipe" style="visibility: visible;">
            <ul style="list-style: none; width: 2560px; transition: 500ms; -webkit-transition: 500ms; -webkit-transform: translate3d(-1920px, 0, 0);">
                <li style="width: 640px; display: table-cell; vertical-align: top;">
                    <a href="http://www.weimob.com/weisite/detail?pid=15765&bid=29488&wechatid=opCZ5jtSBbtnlM45oDUDkk2W9Pbs&did=46715&from=list&wxref=mp.weixin.qq.com">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/20131109005341_64497.jpg" alt="寻找真童画" style="width:100%;">
                    </a>
                </li>
                <li style="width: 640px; display: table-cell; vertical-align: top;">
                    <a href="http://www.weimob.com/weisite/detail?pid=15765&bid=29488&wechatid=opCZ5jtSBbtnlM45oDUDkk2W9Pbs&did=51851&from=list&wxref=mp.weixin.qq.com">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/20131114012257_32840.jpg" alt="寻找小罗丹" style="width:100%;">
                    </a>
                </li>
                <li style="width: 640px; display: table-cell; vertical-align: top;">
                    <a href="http://www.weimob.com/userinfo/index?id=2593&pid=15765&bid=29488&wechatid=opCZ5jtSBbtnlM45oDUDkk2W9Pbs&wxref=mp.weixin.qq.com">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/20131109101557_83428.jpg" alt="会员卡广告" style="width:100%;">
                    </a>
                </li>
                <li style="width: 640px; display: table-cell; vertical-align: top;">
                    <a href="http://www.weimob.com/weisite/detail?pid=15765&bid=29488&wechatid=opCZ5jtSBbtnlM45oDUDkk2W9Pbs&did=47361&from=list&wxref=mp.weixin.qq.com">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/20131110005539_11239.jpg" alt="优学通教育网" style="width:100%;">
                    </a>
                </li>
            </ul>
            <ol>
                <li class=""></li>
                <li class=""></li>
                <li class="on"></li>
                <li></li>
            </ol>
        </div>
    </div>
    <script>
        $(function(){
            new Swipe(document.getElementById('banner_box'), {
                speed:500,
                auto:3000,
                callback: function(){
                    var lis = $(this.element).next("ol").children();
                    lis.removeClass("on").eq(this.index).addClass("on");
                }
            });
        });
    </script>
    <br><header>
        <div class="snower">
            <script type="text/javascript"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/snower.js"></script>
        </div>
    </header>             <section>
        <a href="tel:13625808086" class="link_tel icon-phone">13625808086</a>
    </section>
    <!--
用户分类管理
-->
    <section>
        <ul class="list_ul">
            <li>
                <a href="http://www.weimob.com/weisite/channel?pid=15765&bid=29488&wechatid=opCZ5jtSBbtnlM45oDUDkk2W9Pbs&categoryid=26410&wxref=mp.weixin.qq.com">
                    <figure>
                        <div>
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/20131109134112_44937.jpg">
                        </div>
                        <figcaption>关于愚公移山美术工作室<p>机构概况、教学理念、师资团队</p></figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="http://www.weimob.com/weisite/channel?pid=15765&bid=29488&wechatid=opCZ5jtSBbtnlM45oDUDkk2W9Pbs&categoryid=26414&wxref=mp.weixin.qq.com">
                    <figure>
                        <div>
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/20131109134229_75407.jpg">
                        </div>
                        <figcaption>最新动态<p>机构最新动态、美术比赛信息、组织活动通知</p></figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="http://www.weimob.com/weisite/list?pid=15765&bid=29488&wechatid=opCZ5jtSBbtnlM45oDUDkk2W9Pbs&ltid=123879&wxref=mp.weixin.qq.com">
                    <figure>
                        <div>
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/20140104003117_98371.jpg">
                        </div>
                        <figcaption>班级设置<p>学期班级安排</p></figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="http://www.weimob.com/weisite/channel?pid=15765&bid=29488&wechatid=opCZ5jtSBbtnlM45oDUDkk2W9Pbs&categoryid=26422&wxref=mp.weixin.qq.com">
                    <figure>
                        <div>
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/20131109134443_63173.jpg">
                        </div>
                        <figcaption>课程展示<p>各班级优秀课程展示</p></figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="http://www.weimob.com/weisite/channel?pid=15765&bid=29488&wechatid=opCZ5jtSBbtnlM45oDUDkk2W9Pbs&categoryid=26430&wxref=mp.weixin.qq.com">
                    <figure>
                        <div>
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/20131109134820_92251.jpg">
                        </div>
                        <figcaption>家长沙龙<p>认识儿童美术、家长问题解答、育儿心得</p></figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="http://www.weimob.com/userinfo/index?id=2593&pid=15765&bid=29488&wechatid=opCZ5jtSBbtnlM45oDUDkk2W9Pbs&wxref=mp.weixin.qq.com">
                    <figure>
                        <div>
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/20131109135445_41079.jpg">
                        </div>
                        <figcaption>会员卡<p>充值缴费，积分兑换礼品</p></figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="http://www.weimob.com/Webalbums/Albumslist?pid=15765&bid=29488&wxref=mp.weixin.qq.com">
                    <figure>
                        <div>
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/20131109135508_29320.jpg">
                        </div>
                        <figcaption>微相册<p>快来找找有没有你们家的小宝贝呢？</p></figcaption>
                    </figure>
                </a>
            </li>
            <li>
                <a href="http://www.weimob.com/Webmessage/Comment?wechatid=opCZ5jtSBbtnlM45oDUDkk2W9Pbs&pid=15765&wxid=ee790e7fca989a4bf698d6fcd110dd0e&wxref=mp.weixin.qq.com">
                    <figure>
                        <div>
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/20131109135602_62826.jpg">
                        </div>
                        <figcaption>微留言<p>感谢你关注愚公移山，欢迎给我们留言</p></figcaption>
                    </figure>
                </a>
            </li>
        </ul>
    </section>
</div>

<!--
导航菜单
   后台设置的快捷菜单
-->
<div class="top_bar footer_bar" style="-webkit-transform:translate3d(0,0,0)">
    <nav>
        <ul class="top_menu">
            <li onclick="location.reload();"><span></span></li><!-- 首页：刷新 -->
            <li>
                <a href="tel:13625808086">
                    <span class="icon-phone"></span><label class="homemenu_text">五环路教学点</label>
                </a>
            </li>
            <li>
                <a href="tel:15805709665">
                    <span class="icon-phone"></span><label class="homemenu_text">世通华庭教学点</label>
                </a>
            </li>
        </ul>
    </nav>
</div>

<!--
分享前控制
-->
<script type="text/javascript">
    window.shareData = {
        "imgUrl": "http://img.weimob.com/static/3c/55/87/image/20140204/20140204140230_92541.jpg",
        "timeLineLink": "http://www.weimob.com/weisite/home?pid=15765&bid=29488&wechatid=fromUsername&wxref=mp.weixin.qq.com",
        "sendFriendLink": "http://www.weimob.com/weisite/home?pid=15765&bid=29488&wechatid=fromUsername&wxref=mp.weixin.qq.com",
        "weiboLink": "http://www.weimob.com/weisite/home?pid=15765&bid=29488&wechatid=fromUsername&wxref=mp.weixin.qq.com",
        "tTitle": "愚公移山美术工作室",
        "tContent": "衢州地区最专业的少儿美术培训机构",
        "fTitle": "愚公移山美术工作室",
        "fContent": "衢州地区最专业的少儿美术培训机构",
        "wContent": "衢州地区最专业的少儿美术培训机构"
    };
</script>
<footer style="overflow:visible;">
    <div class="weimob-copyright" style="padding-bottom:50px;">
        <a href="http://www.weimob.com/weisite/home?pid=15765&bid=29488&wechatid=opCZ5jtSBbtnlM45oDUDkk2W9Pbs&wxref=mp.weixin.qq.com">© 衢州恒瑞    weimob微盟中国研发中心</a>
    </div>
    <span class="weimob-support" style="display:none;">©微盟提供</span>
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
        wmShare.src += shareToPlatform + '&pid=15765&sendFriendLink=' + encodeURIComponent(sendFriendLink);
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
            "timeLineLink": "http://www.weimob.com/weisite/home?_tj_twtype=2&_tj_pid=15765&_tt=1&_tj_graphicid=43692&_tj_title=%E6%AC%A2%E8%BF%8E%E5%85%B3%E6%B3%A8%E6%84%9A%E5%85%AC%E7%A7%BB%E5%B1%B1%E7%BE%8E%E6%9C%AF%E5%B7%A5%E4%BD%9C%E5%AE%A4%E5%BE%AE%E4%BF%A1%E5%85%AC%E4%BC%97%E8%B4%A6%E5%8F%B7&_tj_keywords=Hello2BizUserNews&pid=15765&bid=29488&wechatid=fromUsername&from=1&wxref=mp.weixin.qq.com",
            "sendFriendLink": "http://www.weimob.com/weisite/home?_tj_twtype=2&_tj_pid=15765&_tt=1&_tj_graphicid=43692&_tj_title=%E6%AC%A2%E8%BF%8E%E5%85%B3%E6%B3%A8%E6%84%9A%E5%85%AC%E7%A7%BB%E5%B1%B1%E7%BE%8E%E6%9C%AF%E5%B7%A5%E4%BD%9C%E5%AE%A4%E5%BE%AE%E4%BF%A1%E5%85%AC%E4%BC%97%E8%B4%A6%E5%8F%B7&_tj_keywords=Hello2BizUserNews&pid=15765&bid=29488&wechatid=fromUsername&from=1&wxref=mp.weixin.qq.com",
            "weiboLink": "http://www.weimob.com/weisite/home?_tj_twtype=2&_tj_pid=15765&_tt=1&_tj_graphicid=43692&_tj_title=%E6%AC%A2%E8%BF%8E%E5%85%B3%E6%B3%A8%E6%84%9A%E5%85%AC%E7%A7%BB%E5%B1%B1%E7%BE%8E%E6%9C%AF%E5%B7%A5%E4%BD%9C%E5%AE%A4%E5%BE%AE%E4%BF%A1%E5%85%AC%E4%BC%97%E8%B4%A6%E5%8F%B7&_tj_keywords=Hello2BizUserNews&pid=15765&bid=29488&wechatid=fromUsername&from=1&wxref=mp.weixin.qq.com",
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
                weimobAfterShare("opCZ5jtSBbtnlM45oDUDkk2W9Pbs",window.shareData.sendFriendLink,'appmessage');
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
                //weimobAfterShare("opCZ5jtSBbtnlM45oDUDkk2W9Pbs",window.shareData.timeLineLink,'timeline');
                _report('timeline', res.err_msg);
            });
        });

        // 分享到微博
        WeixinJSBridge.on('menu:share:weibo', function (argv) {
            WeixinJSBridge.invoke('shareWeibo', {
                "content": window.shareData.wContent,
                "url": window.shareData.weiboLink
            }, function (res) {
                weimobAfterShare("opCZ5jtSBbtnlM45oDUDkk2W9Pbs",window.shareData.weiboLink,'weibo');
                _report('weibo', res.err_msg);
            });
        });
    }, false);
</script><script src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/h.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/ChatFloat.js"></script>
<script type="text/javascript">

    new ChatFloat({
        AId: '15765',
        openid: "opCZ5jtSBbtnlM45oDUDkk2W9Pbs",
        top:150,
        right:0
    });
</script>
</body></html>