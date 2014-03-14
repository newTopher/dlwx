<!DOCTYPE html>
<!-- saved from url=(0091)http://www.weimob.com/Webreserve/ReserveMyBook/rid/41/wechatid/osXr8jo2_7zz3s0O5jzstVIlfmNc -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/js/order/onlinebooking.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl?>/js/order/weimob-ui-1-1.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl?>/js/order/common.css" media="all">
    <script type="text/javascript" async="" src="<?php echo Yii::app()->request->baseUrl?>/js/order/wtj.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl?>/js/order/jQuery.js"></script>
    <title>微盟</title>

    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta name="Keywords" content="微盟、微信营销、微信代运营、微信定制开发、微信托管、微网站、微商城、微营销">
    <meta name="Description" content="微盟，国内最大的微信公众智能服务平台，微盟八大微体系：微菜单、微官网、微会员、微活动、微商城、微推送、微服务、微统计，企业微营销必备。">
    <!-- Mobile Devices Support @begin -->

    <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
    <meta content="no-cache" http-equiv="pragma">
    <meta content="0" http-equiv="expires">
    <meta content="telephone=no, address=no" name="format-detection">
    <meta name="apple-mobile-web-app-capable" content="yes"> <!-- apple devices fullscreen -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <!-- Mobile Devices Support @end -->
    <style>
        img{max-width:100%!important;}
    </style>
    <script charset="utf-8" src="<?php echo Yii::app()->request->baseUrl?>/js/order/v.js"></script></head>
<body onselectstart="return true;" ondragstart="return false;" id="onlinebooking-list">

<div class="qiandaobanner">
    <a href="javascript:;">
        <img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo $list->header_image_path;?>">
    </a></div><a href="javascript:;">
</a><div class="cardexplain"><a href="javascript:;">
        <!--普通用户登">
        </a>
    </div>
    <div class="cardexplain">

    <!--超过预订时间3天后自动删掉预订记录，免得占服务器资源！-->

    </a>
    <?php foreach($order as $key):?>
    <ul class="round"><a href="javascript:;">
            <li class="title">
                <span><?php echo $key->dateline;?>订单详情<em class="no">等待客服回电</em></span>

            </li>
        </a><li><a href="javascript:;">
            </a>
            <div class="text">
                <a href="javascript:;">
                    <p>联系人：<?php echo $key->username;?></p>
                    <p>联系电话：<?php echo $key->tel;?></p>
                    <p>预订人数 ：1</p>
                    <?php  $set=explode('$',$key->input_data);
                            array_shift($set);
                           foreach($set as $k):
                            $sets=explode('#',$k);
                    ?>
                    <p><?php echo $sets[0].'：'.$sets[1];?></p>
                    <?php endforeach;?>
                    <?php  $set=explode('$',$key->select_data);
                    array_shift($set);
                    foreach($set as $k):
                        $sets=explode('#',$k);?>
                        <p><?php echo $sets[0].'：'.$sets[1];?></p>
                    <?php endforeach;?>
                    <p>预约时间 ：<?php echo $key->dateline;?> <?php echo $key->timepart;?></p>
                    <p>提交时间：<?php echo date('Y-m-d H:i:s',$key->add_time);?></p>
                    <p>备注：<?php echo $key->remark;?></p>
                </a>
                <div class="footReturn">
                    <a href="javascript:;">
                    </a>
                    <a id="" style="color:#fff;" class="submit" href="<?php echo Yii::app()->request->baseUrl.'/Order/Update/o/'.$o.'/u/'.$u.'/r/'.$r.'/e/'.$key->id ; ?>">修改订单 </a>
                </div>
            </div>
        </li>
        <?php endforeach;?>
    </ul>

    <!--页码-->
</div>

<script>
    document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        window.shareData = {
            "imgUrl": "<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo $list->header_image_path;?>",
            "timeLineLink": "http://www.weimob.com/Webreserve/ReserveMyBook?rid=41&wechatid=fromUsername",
            "sendFriendLink": "http://www.weimob.com/Webreserve/ReserveMyBook?rid=41&wechatid=fromUsername",
            "weiboLink": "http://www.weimob.com/Webreserve/ReserveMyBook?rid=41&wechatid=fromUsername",
            "tTitle": "宝马在线预约试驾",
            "tContent": "试驾宝马全系车型，体验前瞻...",
            "fTitle": "宝马在线预约试驾",
            "fContent": "试驾宝马全系车型，体验前瞻...",
            "wContent": "试驾宝马全系车型，体验前瞻..."
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
                _report('send_msg', '111111');
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

<footer style="text-align:center; color:#ffd800;margin-right:20px;margin-top:0px;">
    <a href="http://www.weimob.com/weisite/home?pid=1071&bid=5&wechatid=osXr8jo2_7zz3s0O5jzstVIlfmNc&wxref=mp.weixin.qq.com">©微盟技术支持</a></footer>
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
        wmShare.src += shareToPlatform + '&pid=&sendFriendLink=' + encodeURIComponent(sendFriendLink);
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
            "timeLineLink": "http://www.weimob.com/Webreserve/ReserveMyBook?rid=41&wechatid=fromUsername",
            "sendFriendLink": "http://www.weimob.com/Webreserve/ReserveMyBook?rid=41&wechatid=fromUsername",
            "weiboLink": "http://www.weimob.com/Webreserve/ReserveMyBook?rid=41&wechatid=fromUsername",
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
                weimobAfterShare("osXr8jo2_7zz3s0O5jzstVIlfmNc",window.shareData.timeLineLink,'timeline');
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
</script><script src="<?php echo Yii::app()->request->baseUrl?>/js/order/h.js" type="text/javascript"></script>
</body></html>