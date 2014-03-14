<!DOCTYPE html>
<!-- saved from url=(0090)http://www.weimob.com/tg/goods/index/pid/1071/bid/5/wechatid/osXr8jo2_7zz3s0O5jzstVIlfmNc/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>团购首页</title>

    <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
    <meta content="no-cache" http-equiv="pragma">
    <meta content="0" http-equiv="expires">
    <meta content="telephone=no, address=no" name="format-detection">
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/js/tuan/main.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/js/tuan/dialog.css" rel="stylesheet">

    <script type="text/javascript" async="" src="<?php echo Yii::app()->request->baseUrl; ?>/js/tuan/wtj.js"></script><script>
        document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
            WeixinJSBridge.call('hideToolbar');
        });
    </script>

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/tuan/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/tuan/swipe.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/tuan/dialog_min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/tuan/global.js"></script>
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
                "timeLineLink": "http://www.weimob.com/tg/goods?pid=1071&bid=5&wechatid=fromUsername",
                "sendFriendLink": "http://www.weimob.com/tg/goods?pid=1071&bid=5&wechatid=fromUsername",
                "weiboLink": "http://www.weimob.com/tg/goods?pid=1071&bid=5&wechatid=fromUsername",
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
                    weimobAfterShare("osXr8jo2_7zz3s0O5jzstVIlfmNc",window.shareData.sendFriendLink,'appmessage');
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
                    //alert("android-share-test-000001",10000);
                    //weimobAfterShare("osXr8jo2_7zz3s0O5jzstVIlfmNc",window.shareData.timeLineLink,'timeline');
                    _report('timeline', res.err_msg);
                });
            });

            // 分享到微博
            WeixinJSBridge.on('menu:share:weibo', function (argv) {
                WeixinJSBridge.invoke('shareWeibo', {
                    "content": window.shareData.wContent,
                    "url": window.shareData.weiboLink
                }, function (res) {
                    weimobAfterShare("osXr8jo2_7zz3s0O5jzstVIlfmNc",window.shareData.weiboLink,'weibo');
                    _report('weibo', res.err_msg);
                });
            });
        }, false);
    </script><script src="<?php echo Yii::app()->request->baseUrl; ?>/js/tuan/h.js" type="text/javascript"></script><script charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/js/tuan/v.js"></script><script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/tuan/ChatFloat.js"></script><script type="text/javascript">

        new ChatFloat({
            AId: '1071',
            openid: "osXr8jo2_7zz3s0O5jzstVIlfmNc",
            top:150,
            right:0
        });
    </script><script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/tuan/socket.io.js"></script></head>



<body onselectstart="return true;" ondragstart="return false;" class="gbuy_grid" youdao="bind">

<script>
    $(function(){
        window.swiper = new Swipe(document.getElementById('list_uls'), {
            speed:500,
            // auto:3000,
            callback: function(){
                $("#nav_list_uls li").removeClass("on").eq(this.index).addClass("on");
            }
        });
    })
</script>

<div>
    <div id="container" class="container animate">
        <header></header>
        <div class="body ofh">
            <section>
                <ul id="nav_list_uls" class="nav_list_uls box">
                    <li class="on">&nbsp;</li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                </ul>
            </section>
            <section id="list_uls" class="list_section box_swipe" style="visibility: visible;">
                <ul class="gbuy_list_grid" style="list-style: none; width: 1632px; transition: 0ms; -webkit-transition: 0ms; -webkit-transform: translate3d(0px, 0, 0);">
                    <?php foreach($tuandata as $k=>$v): ?>
                    <li style="width: 544px; display: table-cell; vertical-align: top;">
                        <a href="<?php echo Yii::app()->request->hostInfo.'/Tuan/I/sid/'.$sid.'/f/'.$openid.'/s/'.$v->id; ?>">
                            <div>
                                <figure>
                                        <span class="span_img">
                                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/upload/slider/<?php echo $v->index_image; ?>">
                                        </span>
                                    <figcaption class="box">
                                        <dd><label>进行中</label></dd>
                                        <dd><label>
                                                已售<span><?php echo ($v->init_num+$v->sale_num); ?></span>
                                            </label></dd>
                                    </figcaption>
                                </figure>
                                <div class="price">
                                    <h3>￥<?php echo $v->price; ?><span><s>￥<?php echo $v->o_price; ?></s></span></h3>
                                </div>
                                <article>
                                    <h4>
                                        <label>
                                            <?php echo $v->name; ?>                                            </label>
                                    </h4>
                                    <p>
                                        <?php echo $v->description; ?>
                                    </p>
                                </article>
                            </div>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </section>
        </div>
        <footer>
            <section class="nav_footer">
                <ul class="box">
                    <li>
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/Tuan/List/sid/<?php echo $sid; ?>/f/<?php echo $openid; ?>" class="on">
                            <span class="nav_tg">&nbsp;</span>
                            <label>团购首页</label>
                        </a>
                    </li>
                    <!--
                    <li>
                        <a href="http://www.weimob.com/tg/eticket/index/pid/1071/bid/5/wechatid/osXr8jo2_7zz3s0O5jzstVIlfmNc/" class="">
                            <span class="nav_tgq">&nbsp;</span>
                            <label>团购券</label>
                        </a>
                    </li>
                    -->
                    <li>
                        <a href="<?php echo Yii::app()->request->baseUrl.'/Tuan/Orderlist/sid/'.$sid.'/f/'.$openid.'/sta/0'; ?>" class="">
                            <span class="nav_dd">&nbsp;</span>
                            <label>我的订单</label>
                        </a>
                    </li>
                    <!--
                    <li>
                        <a href="javascript:;" class="">
                            <span class="nav_shc">&nbsp;</span>
                            <label>收 藏</label>
                        </a>
                    </li>
                    -->
                    <!--            <li>-->
                    <!--                <a href="/tg/goods/index/pid/--><!--/bid/--><!--/wechatid/--><!--/" class="--><!--">-->
                    <!--                    <span class="nav_shzh">&nbsp;</span>-->
                    <!--                    <label>设 置</label>-->
                    <!--                </a>-->
                    <!--            </li>-->
                </ul>
            </section>
        </footer>
    </div>
</div>
<script>
    document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        WeixinJSBridge.call('showOptionMenu');
    });
</script>

</body>
</html>