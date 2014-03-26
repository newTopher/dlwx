<!DOCTYPE html>
<!-- saved from url=(0279)http://www.weimob.com/weisite/home?_tj_twtype=16&_tj_pid=9958&_tt=1&_tj_graphicid=3066&_tj_title=%E4%BD%B3%E9%9F%B3%E8%8B%B1%E8%AF%AD%E6%AC%A2%E8%BF%8E%E6%82%A8&_tj_keywords=%E9%A6%96%E9%A1%B5&pid=9958&bid=19204&wechatid=omVTojkrJXfJv9oHocG5H1gCH9qA&from=1&wxref=mp.weixin.qq.com -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/reset.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/snower.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/common.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/home-17.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/home-menu-5.css" media="all">
    <script type="text/javascript" async="" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/wtj.js"></script><script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/maivl.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/jQuery.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/swipe.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/zepto.js"></script>
    <title><?php echo $webData->webname_title; ?></title>

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
    <script charset="utf-8" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/v.js"></script></head>
<body scroll=no style="overflow:hidden"  onselectstart="return true;" ondragstart="return false;" youdao="bind">


<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/font-awesome.css" media="all">

<div class="body" style="padding-bottom:52px;">
<!--
幻灯片管理
-->
<div style="-webkit-transform:translate3d(0,0,0);">
    <div id="banner_box" class="box_swipe" style="visibility: visible;">
        <ul style="list-style: none; width: 3200px; transition: 500ms; -webkit-transition: 500ms; -webkit-transform: translate3d(-1920px, 0, 0);">
            <?php foreach($sliderdata as $k=>$v): ?>
                <li style="width: 640px; display: table-cell; vertical-align: top;">
                    <a href="<?php echo $v['link']; ?>" target="_self">
                        <img src="<?php echo $v['pic']; ?>" alt="" style="width:100%;" >
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <ol>
            <li class=""></li>
            <li class=""></li>
            <li class=""></li>
            <li class="on"></li>
            <li class=""></li>
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
    <a href="tel:<?php echo $webData->tel; ?>" class="link_tel icon-phone"><?php echo $webData->tel; ?></a>
</section>
<!--
用户分类管理
-->
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
<section>
    <ul class="list_font">
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p1[0]).'wapwei/I/id/'.strtoupper($p1[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>">
                <div><span class="<?php echo CJSON::decode($webNavData->p1,false)->pic;  ?>"></span></div>
                <div>
                    <p><?php echo CJSON::decode($webNavData->p1,false)->title;  ?></p>
                </div>
            </a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p2[0]).'wapwei/I/id/'.strtoupper($p2[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>">
                <div><span class="<?php echo CJSON::decode($webNavData->p2,false)->pic;  ?>"></span></div>
                <div>
                    <p><?php echo CJSON::decode($webNavData->p2,false)->title;  ?></p>
                </div>
            </a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p3[0]).'wapwei/I/id/'.strtoupper($p3[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>">
                <div><span class="<?php echo CJSON::decode($webNavData->p3,false)->pic;  ?>"></span></div>
                <div>
                    <p><?php echo CJSON::decode($webNavData->p3,false)->title;  ?></p>
                </div>
            </a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p4[0]).'wapwei/I/id/'.strtoupper($p4[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>">
                <div><span class="<?php echo CJSON::decode($webNavData->p4,false)->pic;  ?>"></span></div>
                <div>
                    <p><?php echo CJSON::decode($webNavData->p4,false)->title;  ?></p>
                </div>
            </a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p5[0]).'wapwei/I/id/'.strtoupper($p5[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>">
                <div><span class="<?php echo CJSON::decode($webNavData->p5,false)->pic;  ?>"></span></div>
                <div>
                    <p><?php echo CJSON::decode($webNavData->p5,false)->title;  ?></p>
                </div>
            </a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p6[0]).'wapwei/I/id/'.strtoupper($p6[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>">
                <div><span class="<?php echo CJSON::decode($webNavData->p6,false)->pic;  ?>"></span></div>
                <div>
                    <p><?php echo CJSON::decode($webNavData->p6,false)->title;  ?></p>
                </div>
            </a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p7[0]).'wapwei/I/id/'.strtoupper($p7[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>">
                <div><span class="<?php echo CJSON::decode($webNavData->p7,false)->pic;  ?>"></span></div>
                <div>
                    <p><?php echo CJSON::decode($webNavData->p7,false)->title;  ?></p>
                </div>
            </a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p8[0]).'wapwei/I/id/'.strtoupper($p8[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>">
                <div><span class="<?php echo CJSON::decode($webNavData->p8,false)->pic;  ?>"></span></div>
                <div>
                    <p><?php echo CJSON::decode($webNavData->p8,false)->title;  ?></p>
                </div>
            </a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p9[0]).'wapwei/I/id/'.strtoupper($p9[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>">
                <div><span class="<?php echo CJSON::decode($webNavData->p9,false)->pic;  ?>"></span></div>
                <div>
                    <p><?php echo CJSON::decode($webNavData->p9,false)->title;  ?></p>
                </div>
            </a>
        </li>
    </ul>
</section>

<!--
导航菜单
后台设置的快捷菜单
-->
<script>
    window.addEventListener("DOMContentLoaded", function(){
        var nav = document.querySelectorAll(".nav_9")[0];

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
<!--
<div class="top_bar footer_bar">
    <section>
        <div class="nav_9">
            <ul class="box">
                <li>
                    <a href="tel:0576-88897406">
                        <p class="icon-phone"></p>
                        <span>电话</span>
                    </a>
                </li>
                <li>
                    <a href="http://api.map.baidu.com/marker?location=28.657016,121.467376&title=%E5%8F%B0%E5%B7%9E%E5%B8%82%E6%A4%92%E6%B1%9F%E5%8C%BA%E4%BD%B3%E9%9F%B3%E8%8B%B1%E8%AF%AD%E5%AD%A6%E6%A0%A1&name=%E5%8F%B0%E5%B7%9E%E5%B8%82%E6%A4%92%E6%B1%9F%E5%8C%BA%E4%BD%B3%E9%9F%B3%E8%8B%B1%E8%AF%AD%E5%AD%A6%E6%A0%A1&content=%E6%B5%99%E6%B1%9F%E7%9C%81%E5%8F%B0%E5%B7%9E%E5%B8%82%E6%A4%92%E6%B1%9F%E5%8C%BA%E5%B2%A9%E5%B1%BF%E8%A5%BF%E8%B7%AF8%E5%8F%B7&output=html&src=weiba|weiweb">
                        <p class="icon-map-marker"></p>
                        <span>导航</span>
                    </a>
                </li>
                <li>
                    <a href="http://www.weimob.com/weisite/home?pid=9958&bid=19204&wechatid=omVTojkrJXfJv9oHocG5H1gCH9qA&wxref=mp.weixin.qq.com" class="home">
                    </a>
                </li>
                <li>
                    <a href="http://www.weimob.com/Webmessage/Comment?wechatid=omVTojkrJXfJv9oHocG5H1gCH9qA&pid=9958&wxid=3e849e652a504a1cac687ed83fd4aead&wxref=mp.weixin.qq.com">
                        <p class="icon-edit"></p>
                        <span>留言板</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
</div>
-->

<!--
分享前控制
-->
<script type="text/javascript">
    window.shareData = {
        "imgUrl": "http://img.weimob.com/static/4d/10/45/image/20140313/20140313154311_23651.jpg",
        "timeLineLink": "http://www.weimob.com/weisite/home?pid=9958&bid=19204&wechatid=fromUsername&wxref=mp.weixin.qq.com",
        "sendFriendLink": "http://www.weimob.com/weisite/home?pid=9958&bid=19204&wechatid=fromUsername&wxref=mp.weixin.qq.com",
        "weiboLink": "http://www.weimob.com/weisite/home?pid=9958&bid=19204&wechatid=fromUsername&wxref=mp.weixin.qq.com",
        "tTitle": "佳音英语欢迎您",
        "tContent": "英语成效TOP1",
        "fTitle": "佳音英语欢迎您",
        "fContent": "英语成效TOP1",
        "wContent": "英语成效TOP1"
    };
</script>
</div>

<footer style="overflow:visible;">
    <div class="weimob-copyright" style="padding-bottom:50px;">
        <a href="http://www.weimob.com/weisite/home?pid=9958&bid=19204&wechatid=omVTojkrJXfJv9oHocG5H1gCH9qA&wxref=mp.weixin.qq.com">© <?php echo $webData->webname_title; ?>版权所有/万普微盟技术支持</a>
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
        wmShare.src += shareToPlatform + '&pid=9958&sendFriendLink=' + encodeURIComponent(sendFriendLink);
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
            "timeLineLink": "http://www.weimob.com/weisite/home?_tj_twtype=16&_tj_pid=9958&_tt=1&_tj_graphicid=3066&_tj_title=%E4%BD%B3%E9%9F%B3%E8%8B%B1%E8%AF%AD%E6%AC%A2%E8%BF%8E%E6%82%A8&_tj_keywords=%E9%A6%96%E9%A1%B5&pid=9958&bid=19204&wechatid=fromUsername&from=1&wxref=mp.weixin.qq.com",
            "sendFriendLink": "http://www.weimob.com/weisite/home?_tj_twtype=16&_tj_pid=9958&_tt=1&_tj_graphicid=3066&_tj_title=%E4%BD%B3%E9%9F%B3%E8%8B%B1%E8%AF%AD%E6%AC%A2%E8%BF%8E%E6%82%A8&_tj_keywords=%E9%A6%96%E9%A1%B5&pid=9958&bid=19204&wechatid=fromUsername&from=1&wxref=mp.weixin.qq.com",
            "weiboLink": "http://www.weimob.com/weisite/home?_tj_twtype=16&_tj_pid=9958&_tt=1&_tj_graphicid=3066&_tj_title=%E4%BD%B3%E9%9F%B3%E8%8B%B1%E8%AF%AD%E6%AC%A2%E8%BF%8E%E6%82%A8&_tj_keywords=%E9%A6%96%E9%A1%B5&pid=9958&bid=19204&wechatid=fromUsername&from=1&wxref=mp.weixin.qq.com",
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
                weimobAfterShare("omVTojkrJXfJv9oHocG5H1gCH9qA",window.shareData.sendFriendLink,'appmessage');
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
                //weimobAfterShare("omVTojkrJXfJv9oHocG5H1gCH9qA",window.shareData.timeLineLink,'timeline');
                _report('timeline', res.err_msg);
            });
        });

        // 分享到微博
        WeixinJSBridge.on('menu:share:weibo', function (argv) {
            WeixinJSBridge.invoke('shareWeibo', {
                "content": window.shareData.wContent,
                "url": window.shareData.weiboLink
            }, function (res) {
                weimobAfterShare("omVTojkrJXfJv9oHocG5H1gCH9qA",window.shareData.weiboLink,'weibo');
                _report('weibo', res.err_msg);
            });
        });
    }, false);
</script><script src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/h.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/ChatFloat.js"></script>
<script type="text/javascript">

    new ChatFloat({
        AId: '9958',
        openid: "omVTojkrJXfJv9oHocG5H1gCH9qA",
        top:150,
        right:0
    });
</script>


</body></html>