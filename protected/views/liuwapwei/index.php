<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="" name="Keywords">
    <meta content="" name="Description">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/liuyan/message.css" media="all">
    <script type="text/javascript" async="" src="<?php echo Yii::app()->request->baseUrl; ?>/js/liuyan/wtj.js"></script><script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/liuyan/jquery_min.js"></script>
    <title><?php echo $liuyandata->name ?></title>
    <!--[if lte IE 9]><script src="<?php echo Yii::app()->request->baseUrl; ?>/js/liuyan/watermark.js"></script><![endif]-->
    <!--[if IE 7]><link href="<?php echo Yii::app()->request->baseUrl; ?>/js/liuyan/font_awesome_ie7.css" rel="stylesheet" /><![endif]-->
    <script charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/js/liuyan/v.js"></script></head>
<body id="message" onselectstart="return true;" ondragstart="return false;" youdao="bind" style="">
<title><?php echo $liuyandata->name ?></title>
<meta charset="utf-8">
<meta content="" name="description">
<meta content="" name="keywords">
<meta content="eric.wu" name="author">

<meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
<meta content="no-cache" http-equiv="pragma">
<meta content="0" http-equiv="expires">
<meta content="telephone=no, address=no" name="format-detection">
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">

<script type="text/javascript">
    $(document).ready(function () {
        $("#showcard1").click(function () {
            var btn = $(this);
            var wxname = $("#wxname1").val();
            if (wxname  == '') {
                alert("请输入昵称");
                return;
            }
            var info = $("#info1").val();
            if (info == '') {
                alert("请输入内容");
                return;
            }
            var submitData = {
                nickname:wxname,
                info: info,
                openid: "<?php echo $openid; ?>",
                uid: "<?php echo $sid; ?>",
                pid:0
            };
            $.post('<?php echo Yii::app()->request->baseUrl; ?>/Liuwapwei/AddLiuyan', submitData,
                function(data) {
                    if (data.success == true) {
                        alert(data.msg);
                        setTimeout('window.location.href=location.href',500);
                        return;
                    } else {
                        alert(data.msg);
                        setTimeout('window.location.href=location.href',500);
                        return;
                    }
                },
                "json")
        });
        //
        $("#showcard2").click(function () {
            var btn = $(this);
            var wxname = $("#wxname2").val();
            if (wxname  == '') {
                alert("请输入昵称");
                return;
            }
            var info = $("#info2").val();
            if (info == '') {
                alert("请输入内容");
                return;
            }
            var submitData = {
                nickname:wxname,
                info: info,
                openid: "<?php echo $openid; ?>",
                uid: "<?php echo $sid; ?>",
                pid:0
            };
            $.post('<?php echo Yii::app()->request->baseUrl; ?>/Liuwapwei/AddLiuyan', submitData,
                function(data) {
                    if (data.success == true) {
                        alert(data.msg);
                        setTimeout('window.location.href=location.href',500);
                        return;
                    } else {
                        alert(data.msg);
                        setTimeout('window.location.href=location.href',500);
                        return;
                    }
                },
                "json")
        });
        //
        $(".hhsubmit").click(function () {
            var objid = $(this).attr("date");
            var info = $(".hly"+objid).val();
            if (info == '') {
                alert("请输入内容");
                return;
            }
            var submitData = {
                pid:objid,
                openid: "<?php echo $openid; ?>",
                info: info,
                uid: "<?php echo $sid; ?>"
            };
            $.post('<?php echo Yii::app()->request->baseUrl; ?>/Liuwapwei/AddLiuyan', submitData,
                function(data) {
                    if (data.success == true) {
                        alert(data.msg);
                        setTimeout('window.location.href=location.href',500);
                        return;
                    } else {
                        alert(data.msg);
                        setTimeout('window.location.href=location.href',500);
                        return;
                    }
                },
                "json")
        });
        //
        $(".hfinfo").click(function () {
            var objid = $(this).attr("date");
            $(".hhly"+objid).slideToggle();
        });
        //
        $(".hhbt").click(function () {
            var objid = $(this).attr("date");
            $(".hhly"+objid).slideToggle();
        });
        //
        $("#windowclosebutton").click(function () {
            $("#windowcenter").slideUp(500);
        });
        //
        $("#alertclose").click(function () {
            $("#windowcenter").slideUp(500);
        });
    });
    //
    function alert(title){
        window.scrollTo(0, -1);
        $("#windowcenter").slideToggle("slow");
        $("#txt").html(title);
        setTimeout(function(){$("#windowcenter").slideUp(500);},4000);
    }
    //
    $(document).ready(function(){
        $(".first1").click(function(){
            $(".ly1").slideToggle();
        });
        $(".first2").click(function(){
            $(".ly2").slideToggle();
        });
    });
</script>



<div class="container">
    <div class="qiandaobanner">
        <a href="javascript:history.go(-1);">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/js/liuyan/mpic.jpg" style="width:100%;">
        </a>
    </div>

    <div class="cardexplain">
        <div class="window" id="windowcenter">
            <div id="title" class="wtitle">操作提示<span class="close" id="alertclose"></span></div>
            <div class="content">
                <div id="txt"></div>
            </div>
        </div>

        <div class="history">
            <div class="history-date">
                <ul>
                    <a><h2 class="first first1" style="position: relative;">请点击留言</h2></a>
                    <!--<li class="nob  mb"><div class="beizhu">留言审核通过后才会显示在留言墙上！</div></li>-->
                    <li class="green bounceInDown nob ly1" style="display:none">
                        <dl>
                            <dt>
                                <input name="wxname" type="text" class="px" id="wxname1" value="" placeholder="请输入您的昵称">
                            </dt>
                            <dt>
                                <textarea name="info" class="pxtextarea" style=" height:60px;" id="info1" placeholder="请输入留言"></textarea>
                            </dt>
                            <dt><a id="showcard1" class="submit" href="javascript:void(0)">提交留言</a></dt>
                        </dl>
                    </li>
                        <?php foreach($liulistdata as $k=>$v): ?>
                            <li class="green bounceInDown">
                                <h3>
                                    <!--<img src="http://www.apiwx.com/index/images/logo100x100.jpg">-->
                                    <?php echo $v['one']['name']; ?><span><?php echo date("Y-m-d H:i:s",$v['one']['add_time']); ?></span>
                                    <div class="clr"></div>
                                </h3>
                                <dl>
                                    <dt class="hfinfo" date="<?php echo $v['one']['id']; ?>"><?php echo $v['one']['content']; ?></dt>
                                </dl>

                                <dl class="huifu">
                                    <dt>
                                        <span>
                                            <a class="hhbt czan" date="<?php echo $v['one']['id']; ?>" href="javascript:void(0)">回复</a>
                                            <p style="display:none;" class="hhly<?php echo $v['one']['id']; ?>">
                                                <textarea name="info" class="pxtextarea hly<?php echo $v['one']['id']; ?>"></textarea>
                                                <a class="hhsubmit submit" date="<?php echo $v['one']['id']; ?>" href="javascript:void(0)">确定</a>
                                            </p>
                                        </span>
                                    </dt>
                                </dl>
                                <?php foreach($v['sub_data'] as $ks=>$vs): ?>
                                <dl class="huifu">
                                    <dt><span>回复：<?php echo $vs->content; ?>
                                                                                                    </span></dt>
                                </dl>
                                <?php endforeach; ?>
                            </li>
                        <?php endforeach; ?>
                    <li class="green bounceInDown nob ly2" style="display:none">
                        <dl>
                            <dt>
                                <input name="wxname" type="text" class="px" id="wxname2" value="" placeholder="请输入您的昵称">
                            </dt>
                            <dt>
                                <textarea name="info" class="pxtextarea" style=" height:60px;" id="info2" placeholder="请输入留言"></textarea>
                            </dt>
                            <dt>
                                <a id="showcard2" class="submit" href="javascript:void(0)">提交留言</a>
                            </dt>
                        </dl>
                    </li>


                    <a><h2 class="first first2" style="position: relative;">请点击留言</h2></a>
                </ul>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        window.shareData = {
            "imgUrl": "http://stc.weimob.com/img/message/mpic.jpg",
            "timeLineLink": "http://www.weimob.com/Webmessage/Comment?wechatid=fromUsername&pid=94256&wxid=fa0a998b4dd0f031af61e3b5609726b7",
            "sendFriendLink": "http://www.weimob.com/Webmessage/Comment?wechatid=fromUsername&pid=94256&wxid=fa0a998b4dd0f031af61e3b5609726b7",
            "weiboLink": "http://www.weimob.com/Webmessage/Comment?wechatid=fromUsername&pid=94256&wxid=fa0a998b4dd0f031af61e3b5609726b7",
            "tTitle": "留言板",
            "tContent": "留言板",
            "fTitle": "留言板",
            "fContent": "留言板",
            "wContent": "留言板"
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

<footer style="text-align:center; color:#ffd800;margin-right:20px"><a href="#">©<?php echo $webdata->name; ?></a></footer>

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
        wmShare.src += shareToPlatform + '&pid=94256&sendFriendLink=' + encodeURIComponent(sendFriendLink);
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
            "timeLineLink": "http://www.weimob.com/Webmessage/Comment?_tj_twtype=101&_tj_pid=94256&_tt=1&_tj_graphicid=7060&_tj_title=%E7%95%99%E8%A8%80%E6%9D%BF&_tj_keywords=%E7%95%99%E8%A8%80&wechatid=fromUsername&pid=94256&wxid=fa0a998b4dd0f031af61e3b5609726b7",
            "sendFriendLink": "http://www.weimob.com/Webmessage/Comment?_tj_twtype=101&_tj_pid=94256&_tt=1&_tj_graphicid=7060&_tj_title=%E7%95%99%E8%A8%80%E6%9D%BF&_tj_keywords=%E7%95%99%E8%A8%80&wechatid=fromUsername&pid=94256&wxid=fa0a998b4dd0f031af61e3b5609726b7",
            "weiboLink": "http://www.weimob.com/Webmessage/Comment?_tj_twtype=101&_tj_pid=94256&_tt=1&_tj_graphicid=7060&_tj_title=%E7%95%99%E8%A8%80%E6%9D%BF&_tj_keywords=%E7%95%99%E8%A8%80&wechatid=fromUsername&pid=94256&wxid=fa0a998b4dd0f031af61e3b5609726b7",
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
                weimobAfterShare("oPTDJt3jXr4XrXkA8wBC-Nl6K-pY",window.shareData.sendFriendLink,'appmessage');
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
                //weimobAfterShare("oPTDJt3jXr4XrXkA8wBC-Nl6K-pY",window.shareData.timeLineLink,'timeline');
                _report('timeline', res.err_msg);
            });
        });

        // 分享到微博
        WeixinJSBridge.on('menu:share:weibo', function (argv) {
            WeixinJSBridge.invoke('shareWeibo', {
                "content": window.shareData.wContent,
                "url": window.shareData.weiboLink
            }, function (res) {
                weimobAfterShare("oPTDJt3jXr4XrXkA8wBC-Nl6K-pY",window.shareData.weiboLink,'weibo');
                _report('weibo', res.err_msg);
            });
        });
    }, false);
</script><script src="<?php echo Yii::app()->request->baseUrl; ?>/js/liuyan/h.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/liuyan/ChatFloat.js"></script>
<script type="text/javascript">

    new ChatFloat({
        AId: '94256',
        openid: "oPTDJt3jXr4XrXkA8wBC-Nl6K-pY",
        top:150,
        right:0
    });
</script>

</body></html>