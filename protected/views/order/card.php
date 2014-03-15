<!DOCTYPE html>
<!-- saved from url=(0220)http://www.weimob.com/webreserve/ReserveBook?_tj_twtype=2&_tj_pid=1071&_tt=1&_tj_graphicid=16140&_tj_title=%E5%9C%A8%E7%BA%BF%E9%A2%84%E7%BA%A6&_tj_keywords=%E9%A2%84%E7%BA%A6&rid=41&wechatid=osXr8jo2_7zz3s0O5jzstVIlfmNc -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/js/order/onlinebooking.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/js/order/datepicker.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/js/order/weimob-ui-1-1.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/js/order/common.css" media="all">
    <script type="text/javascript" async="" src="<?php echo Yii::app()->request->baseUrl;?>/js/order/wtj.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/order/jQuery.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/order/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery-ui-1.8.21.custom.min.js"></script>
    <title>万普微盟</title>
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
    <script charset="utf-8" src="<?php echo Yii::app()->request->baseUrl;?>/js/order/v.js"></script></head>
<body onselectstart="return true;" ondragstart="return false;" id="onlinebooking">

<div class="qiandaobanner">
    <img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo $order->header_image_path;?>">
</div>
<div class="cardexplain">
    <!--普通用户登录时显示-->
    <ul class="round">
        <li>
            <a href="#"><span><?php echo $order->title;?></span></a>
        </li>
    </ul>
    <!--后台可控制是否显示-->
    <ul class="round">
        <li>
            <h2><?php echo $order->setname_introduce;?></h2>
            <div class="text"><?php echo $order->introduce;?></div>
        </li>
    </ul>
    <!--后台可控制是否显示-->
    <ul class="round">
        <li class="addr"><a href="http://api.map.baidu.com/marker?location=<?php echo $order->position_x;?>,<?php echo $order->position_y;?>&title=我的位置&content=上海市杨浦区五角场万达广场&output=html">
                <span>地址： <?php echo $order->adress; ?></span></a></li>
        <?php $order_tel=json_decode($order->order_tel);
        foreach($order_tel as $v):
        ?>
        <li class="tel">
            <a href="tel:<?php echo $v;?>"><span><?php echo $order->setname_tel?>：<?php echo $v;?></span></a>
        </li>
        <?php endforeach?>
    </ul>

    <ul class="round roundyellow" style="display:none;">
        <li class="userinfo">
            <a href="<?php Yii::app()->request->baseUrl.'/Order/WxOrderInsert';?>"><span>请完善个人资料再填表单</span></a></li>
    </ul>
    <!--粉丝填写过的信息的，直接就显示名字电话，粉丝没有填写过信息的话，这里就直接留空让粉丝填写-->
    <ul class="round">
        <form action="javascript::" method="post" >
            <li class="title mb"><span class="none">请认真填写表单</span></li>
            <?php if($order->displayname):?>
            <li class="nob">
                <input name="formhash" id="formhash" value="2be3071a" type="hidden">
                <table class="kuang" border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                    <tr>
                        <th>联系人</th>
                        <td><input name="truename" class="px" id="truename" value="" placeholder="请输入您的真实姓名" type="text"></td>
                    </tr>
                    </tbody></table>
            </li>
            <?php endif;?>
            <?php if($order->displaytelephone):?>
            <li class="nob">
                <table class="kuang" border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                    <tr>
                        <th>联系电话</th>
                        <td><input name="tel[]" class="px" id="tel" value="" placeholder="请输入您的电话" type="tel"></td>
                    </tr>
                    </tbody>
                </table>
            </li>
                <?php endif?>
            <?php if($order->displayreservedate):?>
            <li class="nob">
                <table class="kuang" border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tbody><tr>
                        <th>预约日期</th>
                        <td>
                            <input type="text" class="px datepicker" name="dateline" id="dateline" readonly="readonly">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </li>
            <?php endif;?>
                <?php if($order->displayreservetime):?>
            <li class="nob">
                <table class="kuang" border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tbody><tr>
                        <th>预约时间</th>
                        <td>
                            <select name="timepart" id="timepart" class="dropdown-select">
                                <option value="0:00-1:00">0:00-1:00</option><option value="1:00-2:00">1:00-2:00</option><option value="2:00-3:00">2:00-3:00</option><option value="3:00-4:00">3:00-4:00</option><option value="4:00-5:00">4:00-5:00</option><option value="5:00-6:00">5:00-6:00</option><option value="6:00-7:00">6:00-7:00</option><option value="7:00-8:00">7:00-8:00</option><option value="8:00-9:00">8:00-9:00</option><option value="9:00-10:00">9:00-10:00</option><option value="10:00-11:00">10:00-11:00</option><option value="11:00-12:00">11:00-12:00</option><option value="12:00-13:00">12:00-13:00</option><option value="13:00-14:00">13:00-14:00</option><option value="14:00-15:00">14:00-15:00</option><option value="15:00-16:00">15:00-16:00</option><option value="16:00-17:00">16:00-17:00</option><option value="17:00-18:00">17:00-18:00</option><option value="18:00-19:00">18:00-19:00</option><option value="19:00-20:00">19:00-20:00</option><option value="20:00-21:00">20:00-21:00</option><option value="21:00-22:00">21:00-22:00</option><option value="22:00-23:00">22:00-23:00</option><option value="23:00-24:00">23:00-24:00</option>					</select>
                        </td>
                    </tr>
                    </tbody></table>
            </li>
            <?php endif;?>
            <li class="nob">
                <table class="kuang" border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                    <tr>
                        <th>预订人数</th>
                        <td><input name="txt1" class="single px" id="txt1" placeholder="请输入预订人数" value="" type="text"></td>
                    </tr>
                    </tbody>
                </table>
            </li>
            <?php
                $info = json_decode($order->feedback_info);
            ?>
            <?php foreach($info as $k=>$v) : ?>
                <?php if($k=='inputname'): ?>
                    <?php foreach($info->$k as $keys=>$vals): ?>
                        <?php if($vals != ''): ?>
                            <li class="nob">
                                <table class="kuang" border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tbody>
                                    <tr>
                                        <th><?php echo $vals; ?></th>
                                        <td>
                                            <input name="txt1" class="single px" id="txt1" placeholder="<?php echo $info->inputvalue[$keys]; ?>" value="<?php echo $info->inputvalue[$keys]; ?>" type="text">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
                <?php if($k=='selectname'):?>
                    <?php foreach($info->$k as $key=>$val): ?>
                        <?php if($val != ''): ?>
                            <li class="nob">
                                <table class="kuang" border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tbody><tr>
                                        <th><?php echo $val;?></th>
                                        <td>
                                            <select name="" class="download dropdown-select">
                                                <?php $s_value= explode('|',$info->selectvalue[$key]);?>
                                                <?php foreach($s_value as $key1): ?>
                                                    <option value="<?php echo $key1;?>"><?php echo $key1;?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </td>
                                    </tr>
                                    </tbody></table>
                            </li>
                        <?php endif;?>
                    <?php endforeach; ?>
                <?php endif;?>
            <?php endforeach; ?>
            <li class="nob">
                <table class="kuang" border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tbody><tr>
                        <th class="thtop" valign="top">备注</th>
                        <td>
                            <textarea name="info" class="pxtextarea" style=" height:99px;overflow-y:visible" id="info" placeholder="请输入备注信息"></textarea>
                            <input type="hidden" name="uid" id="uid" value="<?php echo $f;?>">
                            <input type="hidden" name="rid" id="rid" value="<?php echo $o;?>">
                            <input type="hidden" name="aid" id="aid" value="<?php echo $sid;?>">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </li>
        </form>
    </ul>
    <div class="footReturn">
        <input id="showcard" class="submit" value="提交消息" type="button">
        <div class="window" id="windowcenter">
            <div id="title" class="wtitle">操作提示<span class="close" id="alertclose"></span></div>
            <div class="content">
                <div id="txt"></div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    $(document).ready(function () {
        $( "#dateline" ).datepicker({
            minDate: new Date(),
            dateFormat: "yy-mm-dd"
        }).val((
                function(d){
                    return [d.getFullYear(), d.getMonth()+1, d.getDate()].join("-");
                }
                )(new Date()));
        $("#showcard").click(function () {
            var ret_single = ret_download = tel_num = '';
            $(".single").each(function(i){
                var s_name = $(this).parent().siblings().text();
                var s_value = $(this).val();
                if('' != s_value) ret_single += '$'+s_name+'#'+s_value;
            });

            $(".download").each(function(i){
                var s_name = $(this).parent().siblings().text();
                var s_value = $(this).val();
                if('' != s_value) ret_download += '$'+s_name+'#'+s_value;
            });

            tel_num = $("#tel").val();
            if('undefined' !== typeof(tel_num)){
                if(tel_num ==''){alert('电话不能为空');return;}
                if(tel_num.length < 11){alert('请输入正确的电话');return;}
            }

            if($("#truename").val()==''){alert('名字不能为空');return;}
     	if($("#dateline").val()==''){alert('请选择时间');return;}
         var submitData = {
                wechatid: $("#uid").val(),
                rid: $("#rid").val(),
                aid: $("#aid").val(),
                contact: $("#truename").val(),
                dateline: $("#dateline").val(),
                timepart: $("#timepart").val(),
                remark: $("#info").val(),
                contacttel: $("#tel").val(),
                fieldsigle:ret_single,
                fielddownload:ret_download,
            };
            if('fromUsername' == submitData.wechatid) submitData.wechatid = '';
            $.post('/Order/WxOrderInsert', submitData,
                function(data) {

                    if (0 == data.errno) {
                        if(data.msg==123){
                            alert("提交成功");
                        }
                        var count = $(".ok").text();
                        count = 1+ parseInt(count);
                        $(".ok").text(count);
                        setTimeout(function(){
                            jumpurl(data.url);
                        },1500);
                        return;
                    } else {
                        alert(data.msg);
                    }
                },
                "json")

        });
    });


    $("#dateline").change(function () {
        var submitData = {
            wxname: "o5JGbjuFTr6lumWIyyW3yfP-G5m0",
            dateline: $("#dateline").val(),
            formhash: $("#formhash").val(),
            action: "getcount"
        };
    });



    $("#windowclosebutton").click(function () {
        $("#windowcenter").slideUp(500);

    });
    $("#alertclose").click(function () {
        $("#windowcenter").slideUp(500);

    });
    function jumpurl(url){
        window.location.href = url;
    }
    function alert(title){

        $("#windowcenter").slideToggle("slow");
        $("#txt").html(title);
//$("#windowcenter").hide("slow");
        setTimeout('$("#windowcenter").slideUp(500)',4000);
    }

    document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        window.shareData = {
            "imgUrl": "http://stc.weimob.com/img/head_pic.jpg",
            "timeLineLink": "http://www.weimob.com/webreserve/ReserveBook?rid=41&wechatid=fromUsername",
            "sendFriendLink": "http://www.weimob.com/webreserve/ReserveBook?rid=41&wechatid=fromUsername",
            "weiboLink": "http://www.weimob.com/webreserve/ReserveBook?rid=41&wechatid=fromUsername",
            "tTitle": "宝马在线预约试驾",
            "tContent": "试驾宝马全系车型，体验前瞻性主动安全系统，智能车载交互系统，豪华精致的设计，高效动力操控系统。",
            "fTitle": "宝马在线预约试驾",
            "fContent": "试驾宝马全系车型，体验前瞻性主动安全系统，智能车载交互系统，豪华精致的设计，高效动力操控系统。",
            "wContent": "试驾宝马全系车型，体验前瞻性主动安全系统，智能车载交互系统，豪华精致的设计，高效动力操控系统。"
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
<footer style="text-align:center; color:#ffd800;margin-right:20px;margin-top:0px;"><a href="">©万普微盟技术支持</a></footer>
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
            "timeLineLink": "http://www.weimob.com/webreserve/ReserveBook?_tj_twtype=2&_tj_pid=1071&_tt=1&_tj_graphicid=16140&_tj_title=%E5%9C%A8%E7%BA%BF%E9%A2%84%E7%BA%A6&_tj_keywords=%E9%A2%84%E7%BA%A6&rid=41&wechatid=fromUsername",
            "sendFriendLink": "http://www.weimob.com/webreserve/ReserveBook?_tj_twtype=2&_tj_pid=1071&_tt=1&_tj_graphicid=16140&_tj_title=%E5%9C%A8%E7%BA%BF%E9%A2%84%E7%BA%A6&_tj_keywords=%E9%A2%84%E7%BA%A6&rid=41&wechatid=fromUsername",
            "weiboLink": "http://www.weimob.com/webreserve/ReserveBook?_tj_twtype=2&_tj_pid=1071&_tt=1&_tj_graphicid=16140&_tj_title=%E5%9C%A8%E7%BA%BF%E9%A2%84%E7%BA%A6&_tj_keywords=%E9%A2%84%E7%BA%A6&rid=41&wechatid=fromUsername",
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
</script>
<script src="<?php echo Yii::app()->request->baseUrl;?>/js/order/h.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function(){
        $('.datepicker').datepicker({dateFormat: 'yy-mm-dd'});
    });
</script>