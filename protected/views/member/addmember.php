<!DOCTYPE html>
<!-- saved from url=(0095)http://www.weimob.com/Webnewmembercard/AddMember?pid=1071&wechatid=osXr8jhymnvcdSxA8m-QhNX6HwUI -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/member/main.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/member/dialog.css" media="all">
    <script type="text/javascript" async="" src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/wtj.js"></script><script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/jquery_min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/mymain.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/dialog_min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/dater_min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/main.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/aSelect.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/aLocation.js"></script>
    <title><?php echo $vipdata->vip_name; ?></title>

    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta name="Keywords" content="万普微盟">
    <meta name="Description" content="万普微盟,微信推广营销行业领导者">
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

    $().ready(function(){
        <!-- 系统字段生日是否必填-->
    });

    function bd(){
        var d = new iDialog();
        d.open({
            classList: "valid_phone bd",
            title:"",
            close:"",
            content:'<ul class="list_ul_card">\
				<form id="form2" action="javascript:;" method="post">\
					<li data-card>\
						<table>\
							<tr class="input wrapInput">\
								<td>\
									<label class="pre" style="color:#333333;"> 实体卡手机号：</label> \
								</td>\
								<td style="width:100%;">\
									<input type="tel" name="entry_telephone" placeholder="请输入手机号码" maxlength="15" class="input" />\
								</td>\
							</tr>\
							<tr class="input wrapInput">\
								<td style="width:100%;">\
									<input type="number" placeholder="验证码：" name="entry_checkcode" maxlength="10" class="input" />\
								</td>\
								<td>\
								<input type="button" onclick="getReceiveMemberCardVCode(this, event,\'form2\', \'entry_telephone\');" class="button vcode" value="获取验证码" />\
								</td>\
							</tr>\
						</table>\
					</li>\
				</form>\
			</ul>',
            btns:[
                {id:"", name:"确定", onclick:"fn.call();", fn: function(self){
                    //alert("queding");
                    submit2();
                }},
                {id:"", name:"取消", onclick:"fn.call();", fn: function(self){
                    self.die();
                }}
            ]
        });
    }

    function submit2(){
        var form = document.getElementById("form2");
        if(form.entry_telephone.value == ""){
            alert("请输入手机号码。");
            return;
        }

        if(form.entry_checkcode.value == "" || form.entry_checkcode.value.length != 6){
            alert("验证码格式不正确。");
            return;
        }

        loading(true);
        $.ajax({
            url: "/Webnewmembercard/BindEntityCard?pid=1071&wechatid=osXr8jhymnvcdSxA8m-QhNX6HwUI",
            type:"POST",
            data:$("#form2").serialize(),
            dataType:"json",
            success: function(res){
                //loading(false);
                if(res.errno == 0){
                    alert(res.error, 1500);
                    redirect(res.url,1500);
                }else{
                    alert(res.error, 1500);
                    loading(false);
                }
            }
        });

    }

    function submit1(){
        var form = document.getElementById("form1");
        var obj = {
            username: form.username.value,
            telephone: form.telephone.value
        }
        if(obj.username.length<2){
            alert("请输入姓名,不少于2个字符", 1500);
            return;
        }
        if(obj.telephone.length==0){
            alert("请输入正确的手机号", 1500);
            return;
        }
        if(!( /^\d{11}$/g.test(obj.telephone))){
            alert("手机号格式错误!",1500);
            return;
        }

        loading(true);
        $.ajax({
            url: "<?php echo Yii::app()->request->baseUrl; ?>/Member/InsertMember/sid/<?php echo $sid; ?>/f/<?php echo $openid;?>",
            type:"POST",
            data:$("#form1").serialize(),
            dataType:"json",
            success: function(res){
                //loading(false);
                if(res.errno == 0){
                    alert(res.error, 1500);
                    redirect(res.url,1500);
                }else{
                    alert(res.error, 1500);
                    loading(false);
                }
            }
        });

    }
</script>
<div class="container info_tx">
    <div class="body pt_10">
        <ul class="list_ul_card">
            <form id="form1" action="javascript:;" method="post">
                <li data-card="">
                    <header class="center">
                        <label style="display:inline-block;"><span>&nbsp;</span>填写会员卡资料</label>
                    </header>
                    <div class="forms">
                        <dl>
                            <dt>姓 名： </dt>
                            <dd><input type="text" name="username" placeholder="请输入姓名" maxlength="30" class="input"></dd>
                        </dl>
                        <dl>
                            <dt>手 机：</dt>
                            <dd><input type="tel" name="telephone" placeholder="请输入手机号码" maxlength="30" class="input"></dd>
                        </dl>
                        <!-- 系统字段性别是否必填-->
                        <!-- 系统字段生日是否必填-->
                        <!-- 系统字段地址是否必填-->
                        <!-- 自定义字段必填项-->
                        <!--
                        <hr>
                        <dl>
                            <dd>
                                <div class="group_input input">
                                    <table>
                                        <tbody><tr>
                                            <td><input type="number" name="validCode" placeholder="验证码：" maxlength="10" class="input"></td>
                                            <td style="width:120px;">
                                                <input type="button" onclick="getReceiveMemberCardVCode(this, event,'form1', 'telephone');" class="button vcode" value="获取验证码">
                                            </td>
                                        </tr>
                                        </tbody></table>
                                </div>
                            </dd>
                        </dl>

                        -->
                    </div>
                </li>
                <ul class="add_op">
                    <li style="padding:10px 0 0;">
                        <a href="javascript:submit1();" style="width:100%;">提&nbsp;&nbsp;&nbsp;交</a>
                    </li>
                    <!--
                    <li>
                        <a href="javascript:bd();" class="btn_2" style="width:100%;">绑定已有实体卡</a>
                    </li>
                    -->
                </ul>
            </form>
        </ul>
    </div>
</div>
<script type="text/javascript">
    var intervalId,buttonObj;
    //发送下一条短信需要间隔的秒数
    var seconds = 60;
    function getReceiveMemberCardVCode(clickObj, evt, formId, teleName){
        var pid = 1071;
        var form = document.getElementById(formId);
        var req = {
            telephone: $.trim(form[teleName].value),
            pid:pid
        }
        if(!req.telephone){
            alert("请输入手机号", 1000);return;
        }
        clickObj.setAttribute("disabled", "disabled");
        clickObj.value = "正在发送，请稍候...";
        $.ajax({
            url: "/Webnewmembercard/sendCardCheckCode?pid=1071&wechatid=osXr8jhymnvcdSxA8m-QhNX6HwUI",
            type:"post",
            data:req,
            dataType:"JSON",
            success: function(res){
                if(0 == res.errno){
                    clickObj.value = '验证码发送成功';
                    buttonObj = clickObj;
                    intervalId = setInterval("ticker()",1000);
                }else{
                    alert(res.error, 1500);
                    return false;
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
</script>
<script type="text/javascript">
    document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        WeixinJSBridge.call('hideToolbar');
    });

    window.shareData = {
        "imgUrl": "",
        "timeLineLink": "http://www.weimob.com/Webnewmembercard/AddMember?pid=1071&wechatid=fromUsername",
        "sendFriendLink": "http://www.weimob.com/Webnewmembercard/AddMember?pid=1071&wechatid=fromUsername",
        "weiboLink": "http://www.weimob.com/Webnewmembercard/AddMember?pid=1071&wechatid=fromUsername",
        "tTitle": "会员卡",
        "tContent": "微时代会员卡，方便携带，永不挂失。",
        "fTitle": "会员卡",
        "fContent": "微时代会员卡，方便携带，永不挂失。",
        "wContent": "微时代会员卡，方便携带，永不挂失。"
    };
</script>        		<div mark="stat_code" style="width:0px; height:0px; display:none;">
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
            "timeLineLink": "http://www.weimob.com/Webnewmembercard/AddMember?pid=1071&wechatid=fromUsername",
            "sendFriendLink": "http://www.weimob.com/Webnewmembercard/AddMember?pid=1071&wechatid=fromUsername",
            "weiboLink": "http://www.weimob.com/Webnewmembercard/AddMember?pid=1071&wechatid=fromUsername",
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
                weimobAfterShare("osXr8jhymnvcdSxA8m-QhNX6HwUI",window.shareData.sendFriendLink,'appmessage');
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
                weimobAfterShare("osXr8jhymnvcdSxA8m-QhNX6HwUI",window.shareData.timeLineLink,'timeline');
                _report('timeline', res.err_msg);
            });
        });

        // 分享到微博
        WeixinJSBridge.on('menu:share:weibo', function (argv) {
            WeixinJSBridge.invoke('shareWeibo', {
                "content": window.shareData.wContent,
                "url": window.shareData.weiboLink
            }, function (res) {
                weimobAfterShare("osXr8jhymnvcdSxA8m-QhNX6HwUI",window.shareData.weiboLink,'weibo');
                _report('weibo', res.err_msg);
            });
        });
    }, false);
</script><script src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/h.js" type="text/javascript"></script>

</body></html>