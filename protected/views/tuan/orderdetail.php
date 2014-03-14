<!DOCTYPE html>
<!-- saved from url=(0109)http://www.weimob.com/tg/user/orderDetail/pid/1071/bid/5/wechatid/osXr8jo2_7zz3s0O5jzstVIlfmNc/order_id/3148/ -->
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
                "timeLineLink": "http://www.weimob.com/tg/user?pid=1071&bid=5&wechatid=fromUsername&order_id=3148",
                "sendFriendLink": "http://www.weimob.com/tg/user?pid=1071&bid=5&wechatid=fromUsername&order_id=3148",
                "weiboLink": "http://www.weimob.com/tg/user?pid=1071&bid=5&wechatid=fromUsername&order_id=3148",
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
    </script></head>



<body onselectstart="return true;" ondragstart="return false;" class="gbuy_orderDetail" youdao="bind">

<div>
    <div id="container" class="container animate">
        <header></header>
        <div class="body">
            <section class="section_orderDetail">
                <header>
                    <ul class="tbox">
                        <li>
                            <h3>商品信息</h3>
                        </li>
                        <li>
                            <label class="pre">总价：<span>￥<?php echo $orderdata->money; ?></span></label>
                        </li>
                    </ul>
                </header>
                <article>
                    <p>商品名称： <?php echo $tuandata->name; ?></p>
                    <p>商品数量： <?php echo $orderdata->num; ?></p>
                    <p>商品单价： ￥<?php echo $tuandata->price; ?></p>
                </article>
            </section>
            <section class="section_orderDetail">
                <header>
                    <ul class="tbox">
                        <li>
                            <h3>订单信息</h3>
                        </li>
                    </ul>
                </header>
                <article>
                    <p>订单编号：<?php echo $orderdata->id; ?></p>
                    <p>下单时间：<?php echo date("Y-m-d H:i:s",$orderdata->add_time); ?></p>
                    <p>支付方式：现付</p>
                    <p>订单状态：<?php if($orderdata->status == 0):?>
                            待确认
                            <?php else: ?>
                            已确认
                        <?php endif; ?>
                    </p>
                </article>
            </section>
        </div>
        <footer>
            <section class="header_nav">
                <ul class="tbox">
                    <li><a href="javascript:history.go(-1);" class="icons icons_back">&nbsp;</a></li>
                    <li><a href="javascript:history.go(-1);" class="btn"></a></li><a href="http://www.weimob.com/tg/order/confirmSubmit/pid/1071/bid/5/wechatid/osXr8jo2_7zz3s0O5jzstVIlfmNc/product_id/1/num/2/" class="btn">
                    </a></ul><a href="http://www.weimob.com/tg/order/confirmSubmit/pid/1071/bid/5/wechatid/osXr8jo2_7zz3s0O5jzstVIlfmNc/product_id/1/num/2/" class="btn">
                </a></section><a href="http://www.weimob.com/tg/order/confirmSubmit/pid/1071/bid/5/wechatid/osXr8jo2_7zz3s0O5jzstVIlfmNc/product_id/1/num/2/" class="btn">
            </a></footer><a href="http://www.weimob.com/tg/order/confirmSubmit/pid/1071/bid/5/wechatid/osXr8jo2_7zz3s0O5jzstVIlfmNc/product_id/1/num/2/" class="btn">
        </a></div><a href="http://www.weimob.com/tg/order/confirmSubmit/pid/1071/bid/5/wechatid/osXr8jo2_7zz3s0O5jzstVIlfmNc/product_id/1/num/2/" class="btn">
    </a></div><a href="http://www.weimob.com/tg/order/confirmSubmit/pid/1071/bid/5/wechatid/osXr8jo2_7zz3s0O5jzstVIlfmNc/product_id/1/num/2/" class="btn">
    <script>
        function refund(){
            var req = {
                order_id: '3148'
            }
            //
            loading(true);
            $.ajax({
                url: "/tg/order/refund/",
                type:"post",
                data:req,
                dataType:"JSON",
                success: function(res){
                    loading(false);
                    if(1 == res.result){
                        confirm('<p class="article" style="font-size:20px;">您的退款申请已提交 请耐心等待商家处理</p>', function(){
                            history.go(-1);
                            console.log("del");
                        });
                    }else{
                        confirm('<p class="article" style="font-size:20px;">操作失败<label style="font-size:14px;color:#aaaaaa;display:block;">请稍后再试</label></p>', function(){
                            console.log("del");
                        });
                    }
                }
            });
            //
        }

        document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
            WeixinJSBridge.call('hideOptionMenu');
        });
    </script>
</body></html>