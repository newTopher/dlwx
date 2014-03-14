<!DOCTYPE html>
<!-- saved from url=(0102)http://www.weimob.com/tg/goods/detail/pid/1071/bid/5/wechatid/osXr8jo2_7zz3s0O5jzstVIlfmNc/goods_id/1/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title><?php echo $tuandata->name; ?></title>

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
                "timeLineLink": "http://www.weimob.com/tg/goods?pid=1071&bid=5&wechatid=fromUsername&goods_id=1",
                "sendFriendLink": "http://www.weimob.com/tg/goods?pid=1071&bid=5&wechatid=fromUsername&goods_id=1",
                "weiboLink": "http://www.weimob.com/tg/goods?pid=1071&bid=5&wechatid=fromUsername&goods_id=1",
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



<body onselectstart="return true;" ondragstart="return false;" class="gbuy_detail" youdao="bind">

<script>
    $(function(){
        new Swipe(document.getElementById('banner_box'), {
            speed:500,
            // auto:3000,
            callback: function(){
                var lis = $(this.element).next("ol").children();
                lis.removeClass("on").eq(this.index).addClass("on");
            }
        });
        //
        //notStart();
        //
    });


    function notStart(){
        var d = new iDialog();
        d.open({
            classList: "waiting",
            title:"已加入开团提醒",
            close:"<span class='close'>×</span>",
            content:'<p class="article">您可以在信息设置中<br/>对提醒时间进行设置</p>',
            btns:[
                {id:"", name:"确认", onclick:"fn.call();", fn: function(self){
                    self.die();
                }},
                {id:"", name:"去设置", onclick:"fn.call();", fn: function(self){
                    self.die();
                }}
            ]
        });
    }</script>

<div>
    <div id="container" class="container animate">
        <header></header>
        <div class="body">
            <section>
                <div id="banner_box" class="box_swipe" style="visibility: visible;">
                    <ul style="list-style: none; width: 2560px; transition: 0ms; -webkit-transition: 0ms; -webkit-transform: translate3d(0px, 0, 0);">
                        <li style="width: 640px; display: table-cell; vertical-align: top;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/upload/slider/<?php echo $tuandata->index_image; ?>" alt="" style="width:100%;"></li>
                        <li style="width: 640px; display: table-cell; vertical-align: top;"></li>
                        </ul>
                    <ol>
                        <li class="on"></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ol>
                </div>
            </section>
            <div class="br1">&nbsp;</div>
            <section class="detail_price">
                <ul class="header">
                    <ol class="tbox on" id="nav_2">
                        <li style="width:100%;"><label>￥<?php echo $tuandata->price; ?><span><s>￥<?php echo $tuandata->o_price; ?></s></span></label></li>
                        <li>
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/Tuan/Cantuan/sid/<?php echo $sid; ?>/f/<?php echo $openid; ?>/s/<?php echo $tuandata->id; ?>">立即参团</a>
                        </li>
                    </ol>

                </ul>
                <article>
                    <h3><?php echo $tuandata->name; ?></h3>
                    <div class="p">
                        <?php echo $tuandata->description; ?>
                    </div>
                    <div class="f">
                        <p>
                            <a class="pre">√  支持随时退订</a>
                            <a class="pre">√  支持过期退订</a>
                        </p><p>
                        </p><p class="ofh">
                            <label>已售 <?php echo ($tuandata->init_num+$tuandata->sale_num); ?></label>
                            <!--<a href="javascript:;" class="collect fr"><span class="icons icons_collect on">&nbsp;</span>已收藏</a>
<a href="javascript:;" class="collect fr"><span class="icons icons_collect">&nbsp;</span>收藏</a>
-->
                            <label class="fr"><?php echo $tuandata->start_date; ?>开始</label>
                        </p>
                    </div>
                </article>
            </section>
            <?php if($vipdata != null): ?>
            <section class="detail_section adpt_store">
                <h6>商家地址</h6>
                <ul class="tbox">
                    <li style="width:100%;">
                        <p><?php echo $vipdata->cust_name; ?></p>
                        <p>电话：<?php echo $vipdata->tel; ?></p>
                        <p>地址：<?php echo $vipdata->address; ?></p>
                    </li>
                    <li>
                        <a href="tel:<?php echo $vipdata->tel; ?>;"><span class="icons icons_phone">&nbsp;</span></a>
                    </li>
                </ul>
                <!--
                <ol>
                    <a href="http://www.weimob.com/tg/goods/storePage/pid/1071/bid/5/wechatid/osXr8jo2_7zz3s0O5jzstVIlfmNc/goods_id/1/product_id/1/" class="more_store">
                        查看全部<label>2</label>家商户
                        <span class="icons icons_right">&nbsp;</span>
                    </a>
                </ol>
                -->
            </section>
            <?php endif; ?>
            <!--
            <section class="detail_section new_msg">
                <h6>最新通知</h6>
                <article>
                </article>
            </section>
            -->
            <section class="detail_section detail_info">
                <h6>团购须知</h6>
                <article>
                    <?php echo $tuandata->need_know; ?>
                </article>
            </section>
            <section class="detail_section detail_info">
                <h6>团购详情</h6>
                <article>
                    <?php echo $tuandata->tuan_detail; ?>
                </article>
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
    $(function(){
        var nav_2 = document.getElementById("nav_2");
        function listingScroll(){
            var offset = nav_2.parentNode.offsetTop;
            setTimeout(function(){
                if(document.body.scrollTop>=offset){
                    nav_2.classList.add("on");
                }else{
                    nav_2.classList.remove("on");
                }
            }, 100);
        }
        window.onscroll = function(){
            listingScroll();
        }
        listingScroll();
    });
</script>
</body></html>

