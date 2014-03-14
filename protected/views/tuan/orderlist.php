<!DOCTYPE html>
<!-- saved from url=(0093)http://www.weimob.com/tg/user/orderPage/pid/1071/bid/5/wechatid/osXr8jo2_7zz3s0O5jzstVIlfmNc/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>我的订单</title>

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
                "timeLineLink": "http://www.weimob.com/tg/user?pid=1071&bid=5&wechatid=fromUsername",
                "sendFriendLink": "http://www.weimob.com/tg/user?pid=1071&bid=5&wechatid=fromUsername",
                "weiboLink": "http://www.weimob.com/tg/user?pid=1071&bid=5&wechatid=fromUsername",
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
    </script><script src="http://hm.baidu.com/h.js?d80741dd59de91e1846b2add2c0ad2a2" type="text/javascript"></script><script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/tuan/ChatFloat.js"></script><script type="text/javascript">

        new ChatFloat({
            AId: '1071',
            openid: "osXr8jo2_7zz3s0O5jzstVIlfmNc",
            top:150,
            right:0
        });
    </script></head>



<body onselectstart="return true;" ondragstart="return false;" class="gbuy_coupon gbuy_coupon2 gbuy_orderList" youdao="bind">

<div>
    <div id="container" class="container animate">
        <header>
            <div class="nav_coupon">
                <ul class="box">
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/Tuan/Orderlist/sid/<?php echo $sid; ?>/f/<?php echo $openid; ?>/sta/0'; ?>" <?php if($status == 0): ?>class="on"<?php endif; ?>>待确认</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/Tuan/Orderlist/sid/<?php echo $sid; ?>/f/<?php echo $openid; ?>/sta/1" <?php if($status == 1): ?>class="on"<?php endif; ?>class="">已确认</a></li>
                </ul>
            </div>
        </header>
        <div class="body">
            <ul class="list_coupon">
                <?php foreach($orderlist as $k=>$v): ?>
                    <?php $tuandata = TuangoodModel::getTuangoodById($v->tid); ?>
                    <li>
                        <a href="<?php echo Yii::app()->request->hostInfo.'/Tuan/Orderdetail/sid/'.$sid.'/f/'.$openid.'/oid/'.$v->id.'/s/'.$v->tid;?>" class="tbox">
                            <div>
                                <figure>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/upload/slider/<?php echo $tuandata->index_image; ?>">
                                </figure>
                            </div>
                            <div>
                                <h3><?php echo $tuandata->name; ?></h3>
                                <p class="price">￥<?php echo $v->money; ?></p>
                                <label class="state">
                                    <?php if($status == 1): ?>
                                        已确认
                                        <?php else : ?>
                                        待确认
                                    <?php endif; ?>
                                </label>
                            </div>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <footer>
            <section class="nav_footer">
                <ul class="box">
                    <li>
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/Tuan/List/sid/<?php echo $sid; ?>/f/<?php echo $openid; ?>" class="">
                            <span class="nav_tg">&nbsp;</span>
                            <label>我的团购</label>
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
                        <a href="<?php echo Yii::app()->request->baseUrl.'/Tuan/Orderlist/sid/'.$sid.'/f/'.$openid.'/sta/0'; ?>" class="on">
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
        WeixinJSBridge.call('hideOptionMenu');
    });
</script>

</body></html>