<!DOCTYPE html>
<!-- saved from url=(0092)http://www.weimob.com/Webnewmemberscore/index?pid=1071&wechatid=osXr8jo2_7zz3s0O5jzstVIlfmNc -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/member/main.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/member/dialog.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/member/font-awesome.css" media="all">
    <script type="text/javascript" async="" src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/wtj.js"></script><script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/jquery_min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/main.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/dialog_min.js"></script>
    <title>会员首页</title>

    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta name="Keywords" content="万普微盟">
    <meta name="Description" content="万普微盟,微信推广营销行业领导者。">
    <!-- Mobile Devices Support @begin -->

    <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
    <meta content="no-cache" http-equiv="pragma">
    <meta content="0" http-equiv="expires">
    <meta content="telephone=no, address=no" name="format-detection">
    <meta name="apple-mobile-web-app-capable" content="yes"> <!-- apple devices fullscreen -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <!-- Mobile Devices Support @end -->
    <script charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/v.js"></script></head>
<body onselectstart="return true;" ondragstart="return false;" style="" youdao="bind">
<script>
    // 	$().ready(function(){
    //
    // });

    function charge(){
        var d = new iDialog();
        var payment = '';
        payment +='<option value="168">支付宝支付</option>';
        payment +='<option value="446">微支付</option>';
        d.open({
            classList: "valid_phone charge",
            title:"",
            close:"",
            content:'<ul class="list_ul_card">'+
                '<form id="form1" action="javascript:;" method="post">'+
                '<li data-card>'+
                '<table>'+
                '<tr class="input wrapInput">'+
                '<td><label class="pre" style="color:#333333;">充值金额：</label></td>'+
                '<td style="width:100%;"><input type="number" name="money" placeholder="请输入充值金额" maxlength="15" class="input" /></td>'+
                '</tr><tr><td colspan="2" style="height:15px;"></td></tr>'+
                '<tr class="input wrapInput">'+
                '<td><label class="pre pl_10" style="color:#333333;">充值方式:</label></td>'+
                '<td style="width:100%;" colspan="2">'+
                '<select name="paytype" class="select">'+
                payment+
                '</select>'+
                '</td>'+
                '</tr>'+
                '</table>'+
                '</li>'+
                '</form>'+
                '</ul>',
            btns:[
                {id:"", name:"确定", onclick:"fn.call();", fn: function(self){
                    var form1 = document.getElementById("form1");
                    var obj = {
                        money: form1.money.value,
                        paytype: form1.paytype.value
                    }
                    if(parseFloat(obj.money) <=0 ){
                        alert("请输入正确的充值金额", 1500);
                        return false;
                    }
                    loading(true);
                    $.ajax({
                        url: "/Webnewmemberscore/Recharge?pid=1071&bid=&wechatid=osXr8jo2_7zz3s0O5jzstVIlfmNc",
                        type:"post",
                        data:obj,
                        success: function(res){
                            //loading(false);
                            window.location.href=res;
//							if(1 == res.result){
//								self.die();
//								alert("成功", 1500);
//							}else{
//								alert("失败", 1500);
//							}
                        }
                    });
                }},
                {id:"", name:"取消", onclick:"fn.call();", fn: function(self){
                    self.die();
                }}
            ]
        });
    }
    function pay(){
        var d = new iDialog();
        var payment = '';
        payment += '<option value="168">' + '支付宝'+'</option>';
        payment += '<option value="446">' + '微支付'+'</option>';
        d.open({
            classList: "valid_phone pay",
            title:"",
            close:"",
            content:'<ul class="list_ul_card">'+
                '<form id="form2" action="javascript:;" method="post">'+
                '<li data-card>'+
                '<table>'+
                '<tr class="input wrapInput">'+
                '<td></td>'+
                '<td style="width:100%;" colspan="2">'+
                '<select name="store" class="select">'+
                '<option value="0">请选择消费门店：</option>'+
                '<option value="68">洞庭楚香</option>'+
                '<option value="1644">微盟中国</option>'+
                '</select>'+
                '</td>'+
                '</tr>'+
                '<tr class="input wrapInput">'+
                '<td></td>'+
                '<td style="width:100%;" colspan="2">'+
                '<select name="discount" class="select">'+
                '<option value="0">请选择所需优惠：</option>'+
                '</select>'+
                '</td>'+
                '</tr>'+
                '<tr class="input wrapInput">'+
                '<td></td>'+
                '<td style="width:100%;" colspan="2">'+
                '<select name="paytype" class="select" onChange="SelectCode(this);">'+
                '<option value="0">请选择支付方式：</option>'+
                payment+
                '<option value="2">余额支付 </option>'+
                '<option value="1">现金付款 </option>'+
                '</select>'+
                '</td>'+
                '</tr>'+
                '<tr class="input wrapInput">'+
                '<td>'+
                '<label class="pre ml_5" style="color:#333333;"> 消费金额：</label> '+
                '</td>'+
                '<td style="width:100%;">'+
                '<input name="money" type="number" placeholder="请输入实际消费金额" maxlength="15" class="input" />'+
                '</td>'+
                '</tr>'+
                '<tr class="input wrapInput" id="vcode">'+
                '<td style="width:70%;"><input type="number" placeholder="验证码：" maxlength="30" class="input" name="vcode"></td>'+
                '<td>'+
                '<input  class="button vcode" type="button" id="codeing" onclick="getReceiveMemberCardVCode(this);" style="width:120px;" value="获取验证码" />'+
                '</td>'+
                '</tr>'+
                '<tr class="input wrapInput" id="password" style="display:none">'+
                '<td style="width:70%;"><input type="password" placeholder="商家确认密码：" maxlength="30" class="input" name="password"></td>'+
                '<td>&nbsp;</td>'+
                '</tr>'+
                '</table>'+
                '</li>'+
                '</form>'+
                '</ul>',
            btns:[
                {id:"", name:"确定", onclick:"fn.call();", fn: function(self){
                    var form2 = document.getElementById("form2");
                    var obj = {
                        store: form2.store.value,
                        discount: form2.discount.value,
                        paytype: form2.paytype.value,
                        money: form2.money.value,
                        validCode: form2.vcode.value,
                        password: form2.password.value
                    }

                    if(obj.paytype == 0){
                        alert("请选择支付方式", 1500);
                        return false;
                    }else if(obj.paytype == 2){
                        if(obj.validCode == ''){
                            alert("验证码不能为空", 1500);
                            return false;
                        }
                    }else if(obj.paytype == 1){
                        if(obj.password == ''){
                            alert("商家确认密码不能为空", 1500);
                            return false;
                        }
                    }
                    if(parseFloat(obj.money) <= 0){
                        alert("请输入正确的充值金额",1500);
                        return false;
                    }

                    loading(true);
                    $.ajax({
                        url: "/Webnewmemberscore/Pay?pid=1071&bid=&wechatid=osXr8jo2_7zz3s0O5jzstVIlfmNc",
                        type:"post",
                        data:obj,
                        dataType:'json',
                        success: function(res){
                            loading(false);
                            if(res.errno == '0'){
                                window.location.href=res.url;
                            }else{
                                alert(res.error, 1500);
                                return false;
                            }

                        }
                    });
                }},
                {id:"", name:"取消", onclick:"fn.call();", fn: function(selfs){
                    selfs.die();
                }}
            ]
        });
    }
    $(document).ready(function(){
        $("#codeing").on(function(){
            alert("请输入正确的充值金额",1500);


        });


    });
</script>
<div class="container card">
    <header>
        <div class="header card">
            <div id="card" data-role="card" onclick="this.classList.toggle('on');">
                <div class="front" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/images/vip/<?php echo $vipdata->vip_style.'.png'; ?>);">
                    <span class="name" style="color:#FBFFFA"><?php echo $vipdata->vip_name; ?></span>
                    <span class="no" style="color:#FFFFFF;"><?php echo $member->id; ?></span>
                </div>
                <div class="back" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/js/member/card_bg09.png);">
							<span style="color:#000000;">
								<h3>使用说明：</h3>
								<pre style="white-space:pre-line;height: 84px;overflow:hidden;">									1、本卡采取记名消费方式
2、持卡人可享受微盟的会员专属优惠
3、本卡不能与其他优惠活动同时使用
4、持卡人可用卡内余额进行消费								</pre>
								<label class="addr">地址：<?php echo $vipdata->address; ?></label>
							</span>
                </div>
            </div>
        </div>
        <!--
        <div>
            <ul class="box group_btn">
                <li><a href="javascript:charge();">充值</a></li>
                <li><a href="javascript:pay();">付款</a></li>
            </ul>
        </div>
        -->
    </header>
    <div class="body">
        <ul class="list_ul">
            <div>
                <li class="li_a">
                    <label class="label" onclick="this.parentNode.classList.toggle('on');"><i>&nbsp;</i>会员尊享9.5折 <span>&nbsp;</span></label>
                    <ol>
                        <h6>详细说明：</h6>
                        <p>
                            <span><span style="line-height:20px;">1、持本卡可享受全店9.5折优惠</span></span>
                        </p>
                        <p>
                            <span><span style="line-height:20px;">2、持本卡可领取会员特有优惠券或代金券</span></span>
                        </p>
                        <p>
                            <span><span style="line-height:20px;">3、本卡为积分储值卡，不可兑换</span></span>
                        </p>					</ol>
                </li>
                <!--
                <li class="li_b">
                    <a href="http://www.weimob.com/Webnewmemberscore/ListCoupon?pid=1071&wechatid=osXr8jo2_7zz3s0O5jzstVIlfmNc"><label class="label"><i>&nbsp;</i>会员优惠<span>&nbsp;</span></label></a>
                </li>
                -->

                <li class="li_c">
                    <a href="http://www.weimob.com/Webnewmemintegral/exchangelist?pid=1071&wechatid=osXr8jo2_7zz3s0O5jzstVIlfmNc"><label class="label"><i>&nbsp;</i>积分兑换<span>&nbsp;</span></label></a>
                </li>
                <li class="li_d">
                    <a href="<?php echo Yii::app()->request->baseUrl.'/Member/Memberdetail/sid/'.$sid.'/f/'.$openid.'/i/'.$member->id; ?>"><label class="label"><i>&nbsp;</i>完善会员卡资料 <span>&nbsp;</span></label></a>
                </li>
                <!--
                <li class="li_e">
                    <label class="label" onclick="this.parentNode.classList.toggle('on');"><i>&nbsp;</i>三八妇女节<span>&nbsp;</span></label>
                    <ol>
                        <h6>详细说明：</h6>
                        三八妇女节赠送100积分					</ol>
                </li>
                -->
            </div>
            <div>
                <!--
                <li class="li_g">
                    <a href="http://1071.vshop.weimob.com/?wechatid=osXr8jo2_7zz3s0O5jzstVIlfmNc&v=faed2c560af1081627b75454f2f8e135&wxref=mp.weixin.qq.com"><label class="label"><i class="icon-shopping-cart">&nbsp;</i>进入商城<span>&nbsp;</span></label></a>
                </li>
                -->

                <li class="li_g">
                    <a href="http://www.weimob.com/activity/Coupons?id=126&bid=5&wechatid=osXr8jo2_7zz3s0O5jzstVIlfmNc&pid=&v=4a12207616277f4cc516383a02e07870"><label class="label"><i class="icon-money ">&nbsp;</i>参加活动<span>&nbsp;</span></label></a>
                </li>


                <!--
                <li class="li_g">
                    <a href="http://www.weimob.com/Webmessage/Comment?wechatid=osXr8jo2_7zz3s0O5jzstVIlfmNc&wxid=f156221f78685b7f7be1be1e4ad0d9f0&wxref=mp.weixin.qq.com"><label class="label"><i class="icon-edit">&nbsp;</i>留言吧！<span>&nbsp;</span></label></a>
                </li>

                -->

            </div>
            <div>
                <li class="li_i">
                    <a class="label" href="tel:<?php echo $vipdata->tel; ?>"><i>&nbsp;</i><?php echo $vipdata->tel; ?> <span>&nbsp;</span></a>
                </li>
                <li class="li_j">
                    <a href="http://api.map.baidu.com/marker?location=<?php echo $vipdata->position_y;  ?>,<?php echo $vipdata->position_x;  ?>&title=<?php echo urlencode($vipdata->address);  ?>&name=<?php echo urlencode($vipdata->address);  ?>&content=<?php echo urlencode($vipdata->address);  ?>&output=html&src=weiba|weiweb">
                        <label class="label"><i>&nbsp;</i><p class="mutipleLine"><?php echo $vipdata->address;  ?></p><span>&nbsp;</span></label>
                    </a>
                </li>
                <!-- 门店-->
                <li class="li_k">
                    <a href="http://www.weimob.com/Webnewmemberscore/store?pid=1071&wechatid=osXr8jo2_7zz3s0O5jzstVIlfmNc"><label class="label"><i>&nbsp;</i>门店<span>&nbsp;</span></label></a>
                </li>
            </div>
        </ul>
    </div>
    <footer>
        <nav class="nav">
            <ul class="box">
                <li>
                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/js/member/huiyuanshouye.htm" class="on">
                        <p class="card"></p>
                        <span>会员卡</span>
                    </a>
                </li>
                <!--
                <li>
                    <a href="http://www.weimob.com/Webnewmemannounce/notice?pid=1071&wechatid=osXr8jo2_7zz3s0O5jzstVIlfmNc">
                        <p id="Js-msg-num" class="msg"></p>
                        <span>消息</span>
                    </a>
                </li>
                -->
                <li>
                    <a href="http://www.weimob.com/Webnewmemintegral/signin?pid=1071&wechatid=osXr8jo2_7zz3s0O5jzstVIlfmNc">
                        <p class="sign"></p>
                        <span>签到</span>
                    </a>
                </li>
                <!--
                <li>
                    <a href="http://www.weimob.com/Webnewmemberscore/share?pid=1071&wechatid=osXr8jo2_7zz3s0O5jzstVIlfmNc">
                        <p class="share"></p>
                        <span>分享</span>
                    </a>
                </li>
                -->
                <li>
                    <a href="http://www.weimob.com/Webnewmemberscore/my?pid=1071&wechatid=osXr8jo2_7zz3s0O5jzstVIlfmNc" class="my ">
                        <p class="my"></p>
                        <span>我的</span>
                    </a>
                </li>
            </ul>
        </nav>
    </footer>
    <script type="text/javascript">
        document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
            WeixinJSBridge.call('hideToolbar');
        });

        window.shareData = {
            "imgUrl": "",
            "timeLineLink": "http://www.weimob.com/Webnewmemberscore/index?pid=1071&wechatid=fromUsername",
            "sendFriendLink": "http://www.weimob.com/Webnewmemberscore/index?pid=1071&wechatid=fromUsername",
            "weiboLink": "http://www.weimob.com/Webnewmemberscore/index?pid=1071&wechatid=fromUsername",
            "tTitle": "会员卡",
            "tContent": "微时代会员卡，方便携带，永不挂失。",
            "fTitle": "会员卡",
            "fContent": "微时代会员卡，方便携带，永不挂失。",
            "wContent": "微时代会员卡，方便携带，永不挂失。"
        };
    </script></div>
<script type="text/javascript">
    var intervalId,buttonObj;
    //发送下一条短信需要间隔的秒数
    var seconds = 60;
    function getReceiveMemberCardVCode(clickObj){
        var form = document.getElementById("form2");
        var pid = 1071;
        var wechatid = "osXr8jo2_7zz3s0O5jzstVIlfmNc";
        var phone = "18688708215";
        var req = {
            telephone: $.trim(phone),
            pid:pid,
            price:form.money.value,
            wechatid:wechatid
        }
        if(!req.telephone){
            alert("请输入手机号", 1000);return;
        }
        clickObj.setAttribute("disabled", "disabled");
        clickObj.value = "正在发送，请稍候...";
        $.ajax({
            url: "/Webnewmemberscore/SendCardCheckCode",
            type:"post",
            data:req,
            dataType:"JSON",
            success: function(res){
                if(0 == res.errno){
                    clickObj.value = '验证码发送成功';
                    buttonObj = clickObj;
                    intervalId = setInterval("ticker()",1000);
                }else{
                    alert(res.error, 1500);return false;
                }
            }
        });
    }
    function ticker(){
        seconds --;
        if(seconds > 55){
            //提示消息显示5秒钟
        }else if(seconds>0){
            buttonObj.value = seconds+"秒后可重新获取";
        }else{
            clearInterval(intervalId);
            buttonObj.removeAttribute("disabled");
            buttonObj.value = "获取验证码";
            seconds = 60;
            buttonObj = null;
        }
    }

    function SelectCode(obj){
        var val = $(obj).val();
        if(val != 2){
            $("#vcode").hide();
        }else{
            $("#vcode").show();
        }

        if(val == 1){
            $("#vcode").hide();
            $("#password").show();
        }else{
            $("#password").hide();
        }
    }
</script>
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
            "timeLineLink": "http://www.weimob.com/Webnewmemberscore/index?pid=1071&wechatid=fromUsername",
            "sendFriendLink": "http://www.weimob.com/Webnewmemberscore/index?pid=1071&wechatid=fromUsername",
            "weiboLink": "http://www.weimob.com/Webnewmemberscore/index?pid=1071&wechatid=fromUsername",
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
</script><script src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/h.js" type="text/javascript"></script>

</body></html>