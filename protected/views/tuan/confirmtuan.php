<!DOCTYPE html>
<!-- saved from url=(0116)http://www.weimob.com/tg/order/confirmSubmit/pid/1071/bid/5/wechatid/osXr8jo2_7zz3s0O5jzstVIlfmNc/product_id/1/num/1 -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>确认订单</title>

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
                "timeLineLink": "http://www.weimob.com/tg/order?pid=1071&bid=5&wechatid=fromUsername&product_id=1&num=1",
                "sendFriendLink": "http://www.weimob.com/tg/order?pid=1071&bid=5&wechatid=fromUsername&product_id=1&num=1",
                "weiboLink": "http://www.weimob.com/tg/order?pid=1071&bid=5&wechatid=fromUsername&product_id=1&num=1",
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
    </script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/tuan/h.js" type="text/javascript"></script><script charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/js/tuan/v.js"></script><script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/tuan/ChatFloat.js"></script><script type="text/javascript">

        new ChatFloat({
            AId: '1071',
            openid: "osXr8jo2_7zz3s0O5jzstVIlfmNc",
            top:150,
            right:0
        });
    </script></head>



<body onselectstart="return true;" ondragstart="return false;" class="gbuy_order gbuy_check" youdao="bind">

<div>

    <div id="container" class="container animate">

        <header></header>

        <div class="body">

            <ul class="ul_order">

                <header>

                    <h3><?php echo $tuandata->name; ?></h3>

                </header>

                <section>

                    <li class="tbox">

                        <div>

                            <label>数量：</label>

                        </div>

                        <div>

                            <label><?php echo $num; ?></label>

                        </div>

                    </li>

                    <li class="tbox" style="border:0;">

                        <div>

                            <label><span>总价：</span></label>

                        </div>

                        <div>

                            <label><span>￥<?php echo ($tuandata->price*$num); ?></span></label>

                        </div>

                    </li>

                    <li class="tbox" style="border:0;">

                        <div>

                            <label><span>姓名：</span></label>

                        </div>

                        <div>

                            <label><span><?php echo $username ; ?></span></label>

                        </div>

                    </li>

                    <li class="tbox" style="border:0;">

                        <div>

                            <label><span>手机号：</span></label>

                        </div>

                        <div>

                            <label><span><?php echo $mobile ; ?></span></label>

                        </div>

                    </li>

                    <li class="tbox" style="border:0;">

                        <div>

                            <label><span>备注：</span></label>

                        </div>

                        <div>

                            <label><span><?php echo $mark ; ?></span></label>

                        </div>

                    </li>

                </section>

                <section>

                    <li class="tbox">

                        <div>

                            <label><small>选择支付方式(温馨提示:商家没有申请微信支付暂不可用)</small></label>

                        </div>

                    </li>


                    <ol class="payType tbox" data-val="microPay">

                        <div>

                            <label>微信支付</label>

                        </div>

                    </ol>
                   <!--
                    <ol class="payType tbox checked" data-val="tenPay">

                        <div>

                            <label>财付通</label>

                        </div>

                    </ol>


                    <ol class="payType tbox " data-val="aliPay">


                        <div>

                            <label>支付宝</label>

                        </div>

                    </ol>
                    -->

                </section>


            </ul>

        </div>

        <footer>

            <section class="header_nav">

                <ul class="tbox">

                    <li><a href="javascript:history.go(-1);" class="icons icons_back">&nbsp;</a></li>

                    <li><a href="javascript:getPay();" class="btn">确认订单</a></li>

                </ul>

            </section>

        </footer>

    </div>

</div>
<script>
    function getPayUrl() {
        $.ajax({
            url: "/tg/order/doPay/pid/1071/order_id/3143/",
            type:"get",
            success: function(res){
                location.href= res;
                //console.log(res);
            }
        });
    }

    function getPay() {
        $.post("<?php echo Yii::app()->request->baseUrl; ?>/Tuan/Addorder",{
                sid:<?php echo $sid; ?>,
                f:'<?php echo $openid; ?>',
                s:<?php echo $tuandata->id; ?>,
                num:<?php echo $num; ?>,
                mobile:'<?php echo $mobile; ?>',
                username:'<?php echo $username; ?>',
                mark:'<?php echo $mark; ?>'
            },
            function(data){
                if(data.code == 0){
                    location.href= data.url;
                }else{
                    alert('订单生成失败');
                    return false;
                }
                //console.log(res);
        },'json');
    }
</script>

</body></html>