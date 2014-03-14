<!DOCTYPE html>
<!-- saved from url=(0109)http://www.weimob.com/tg/order/confirmPage/pid/1071/bid/5/wechatid/osXr8jo2_7zz3s0O5jzstVIlfmNc/product_id/1/ -->
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
                "timeLineLink": "http://www.weimob.com/tg/order?pid=1071&bid=5&wechatid=fromUsername&product_id=1",
                "sendFriendLink": "http://www.weimob.com/tg/order?pid=1071&bid=5&wechatid=fromUsername&product_id=1",
                "weiboLink": "http://www.weimob.com/tg/order?pid=1071&bid=5&wechatid=fromUsername&product_id=1",
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



<body onselectstart="return true;" ondragstart="return false;" class="gbuy_order" youdao="bind">

<div>
    <div id="container" class="container animate">
        <header>
            <section>
                <ul class="header_nav tbox">
                    <li><a href="javascript:history.go(-1);" class="icons icons_back">&nbsp;</a></li>
                    <li><a href="javascript:;">订单提交 </a></li>
                    <li><a href="javascript:;" class="vhidden">&nbsp;</a></li>
                </ul>
            </section>
        </header>
        <div claes="body">
            <ul class="ul_order">
                <header>
                    <h3><?php echo $tuandata->name; ?></h3>
                </header>
                <section>
                    <li class="tbox">
                        <div>
                            <label>单价：</label>
                        </div>
                        <div>
                            <label>￥<?php echo $tuandata->price; ?></label>
                        </div>
                    </li>
                    <li class="tbox">
                        <div>
                            <label>数量：</label>
                        </div>
                        <div>
                            <table id="table_count" class="count">
                                <tbody><tr>
                                    <td><input type="button" class="op" value="-" disabled="disabled"></td>
                                    <td><input type="text" class="goods_number val" readonly="true" value="1"></td>
                                    <td><input type="button" class="op" value="+"></td>
                                </tr>
                                </tbody></table>
                            <script>
                                $("#table_count .op").click(function(){
                                    var val = $("#table_count .val").val();
                                    if("+" == this.value){
                                        <?php if($tuandata->every_limit != 0): ?>
                                            if(val >= <?php echo $tuandata->every_limit; ?>){
                                                var d = new iDialog();

                                                d.open({

                                                    classList: "waiting",

                                                    title:"提示",

                                                    close:"<span class='close'>×</span>",

                                                    content:'<p class="article">本次团购每人限购<?php echo $tuandata->every_limit; ?>份哦</p>',

                                                    btns:[

                                                        {id:"", name:"确认", onclick:"fn.call();", fn: function(self){

                                                            self.die();

                                                        }}
                                                    ]

                                                });
                                                return false;
                                            }
                                        <?php endif; ?>
                                        $("#table_count .val").val(++val);
                                    }else{
                                        $("#table_count .val").val(--val);
                                    }
                                    if(1 == val){
                                        $("#table_count .op").eq(0).attr("disabled", "disabled");
                                    }else{
                                        $("#table_count .op").eq(0).removeAttr("disabled");
                                    }
                                });
                            </script>
                        </div>
                    </li>
                    <li class="box" style="border:0;">
                        <div>
                            <label>√ 支持随时退订</label>
                        </div>
                        <div>
                            <label>√ 支持过期退订</label>
                        </div>
                    </li>
                </section>
                <section>
                    <li class="tbox">
                        <div>
                            <label>手机号码</label>
                        </div>
                        <div style="width:100%;">
                            <input type="telephone" id="telephone" name="telephone" placeholder="请输入您的手机号码" value="" maxlength="13" class="input class_input">
                        </div>
                    </li>
                    <li class="tbox">
                        <div>
                            <label class="pre">姓名:</label>
                        </div>
                        <div style="width:100%;">
                            <input type="text" name="username" id="username" placeholder="请输入您的姓名" value="" maxlength="13" class="input class_input">
                        </div>
                    </li>
                    <li class="tbox">
                        <div>
                            <label class="pre">备注:</label>
                        </div>
                        <div style="width:100%;">
                           <textarea style="width: 540px;height: 40px;" id="mark"></textarea>
                        </div>
                    </li>
                    <!--
                    <ol class="tbox">
                        <div class="user_mobile" data-user-mobile="18688708215">
                            <label>
                                18688708215                            </label>
                        </div>
                        <div>
                            <label>
                                <a href="http://www.weimob.com/tg/user/bindPage/product_id/1/user_id/1327/pid/1071/bid/5/wechatid/osXr8jo2_7zz3s0O5jzstVIlfmNc/">更改</a></label>
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

                    <li><a href="javascript:void(0);" onclick="orderConfirm();" class="btn">订单提交 </a></li>

                </ul>

            </section>

        </footer>
    </div>
</div>
<script>
    $(function() {
        var err = '';
        if('' != err) {
            var d = new iDialog();

            d.open({

                classList: "waiting",

                title:"提示",

                close:"<span class='close'>×</span>",

                content:'<p class="article">'+err+'</p>',

                btns:[

                    {id:"", name:"确认", onclick:"fn.call();", fn: function(self){

                        self.die();

                    }}
                ]

            });
        }
    })
    function orderConfirm() {
        var mobile = $("#telephone").val();
        var username = $("#username").val();
        var mark = $("#mark").val();
        if(!mobile) {
            var d = new iDialog();

            d.open({

                classList: "waiting",

                title:"提示",

                close:"<span class='close'>×</span>",

                content:'<p class="article">请输入正确的手机号码</p>',

                btns:[

                    {id:"", name:"确认", onclick:"fn.call();", fn: function(self){

                        self.die();

                    }}
                ]

            });
            return false;
        }

        if(!username) {
            var d = new iDialog();

            d.open({

                classList: "waiting",

                title:"提示",

                close:"<span class='close'>×</span>",

                content:'<p class="article">姓名不能为空</p>',

                btns:[

                    {id:"", name:"确认", onclick:"fn.call();", fn: function(self){

                        self.die();

                    }}
                ]

            });
            return false;
        }

        var num = $('.goods_number').val();
        location.href = '<?php echo Yii::app()->request->baseUrl; ?>/Tuan/Contuan/sid/<?php echo $sid; ?>/f/<?php echo $openid; ?>/s/<?php echo $tuandata->id; ?>/num/'+num+'/username/'+username+'/mobile/'+mobile+'/mark/'+mark;
    }
</script>

</body></html>