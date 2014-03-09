<!DOCTYPE html>
<!-- saved from url=(0101)http://www.weimob.com/Webnewmemberscore/editMemberInfo?pid=1071&wechatid=osXr8jo2_7zz3s0O5jzstVIlfmNc -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/member/main.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/member/dialog.css" media="all">
    <script type="text/javascript" async="" src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/wtj.js"></script><script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/jquery_min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/mymain.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/aSelect.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/aLocation.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/dialog_min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/dater_min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/member/main.js"></script>
    <title>完善会员资料</title>

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
$().ready(function(){
    new dater({
        selectYear:document.getElementById("selectYear"),
        selectMonth:document.getElementById("selectMonth"),
        selectDate:document.getElementById("selectDate"),
        minDat: new Date("1900/1/1"),
        maxDat: new Date(),
        curDat: new Date("1970/01/01")
    }).init();
});

function bd(){
    var d = new iDialog();
    d.open({
        classList: "valid_phone bd",
        title:"",
        close:"",
        content:'<ul class="list_ul_card">\
				<form action="javascript:;" method="post">\
					<li data-card>\
						<table>\
							<tr class="input wrapInput">\
								<td>\
									<label class="pre" style="color:#333333;"> 实体卡手机号：</label> \
								</td>\
								<td style="width:100%;">\
									<input type="tel" placeholder="请输入手机号码" maxlength="15" class="input" />\
								</td>\
							</tr>\
							<tr class="input wrapInput">\
								<td style="width:100%;">\
									<input type="text" placeholder="验证码：" maxlength="10" class="input" />\
								</td>\
								<td>\
									<a href="javascript:;" class="button pre"> 获取验证码 </a>\
								</td>\
							</tr>\
						</table>\
					</li>\
				</form>\
			</ul>',
        btns:[
            {id:"", name:"确定", onclick:"fn.call();", fn: function(self){
                alert("queding");
            }},
            {id:"", name:"取消", onclick:"fn.call();", fn: function(self){
                self.die();
            }}
        ]
    });
}

function bd1(){
    var d = new iDialog();
    d.open({
        classList: "valid_phone pay",
        title:"",
        close:"",
        content:'<ul class="list_ul_card">\
				<form id="form2" action="javascript:;" method="post">\
					<li data-card>\
						<table>\
							<tr class="input wrapInput">\
								<td style="width:70%;"><input type="number" name="code" placeholder="验证码：" maxlength="30" class="input"></td>\
								<td>\
									<input type="button" onclick="getReceiveMemberCardVCode(this,event,\'form1\',\'telephone\');" class="button vcode" value="获取验证码" />\
								</td>\
							</tr>\
						</table>\
					</li>\
				</form>\
			</ul>',
        btns:[
            {id:"", name:"确定", onclick:"fn.call();", fn: function(self){
                var form2 = document.getElementById("form2");
                var obj = {
                    code: form2.code.value
                }
                if(obj.code.length<1){
                    alert("请输入验证码", 1500);
                    return;
                }
                loading(true);
                $.ajax({
                    url: "/Webnewmemberscore/BindPhoneNumber?pid=1071&bid=&wechatid=osXr8jo2_7zz3s0O5jzstVIlfmNc",
                    type:"POST",
                    data:{'telephone':$("#telephone").val(),'pid':'1071','wechatid':'osXr8jo2_7zz3s0O5jzstVIlfmNc','validCode':obj.code},
                    dataType:"JSON",
                    success: function(res){
                        if(res.errno == 0){
                            alert("绑定手机号码成功", 1500);
                            redirect('/Webnewmemberscore/editMemberInfo?pid=1071&bid=&id=&wechatid=osXr8jo2_7zz3s0O5jzstVIlfmNc',1500);
                        }else{
                            alert(res.error, 1500);
                        }
                    }
                });
            }},
            {id:"", name:"取消", onclick:"fn.call();", fn: function(self){
                self.die();
            }}
        ]
    });
}

function bd2(){
    var d = new iDialog();
    d.open({
        classList: "valid_phone pay",
        title:"",
        close:"",
        content:'<ul class="list_ul_card">\
				<form id="form3" action="javascript:;" method="post">\
					<li data-card>\
						<table>\
							<tr class="input wrapInput">\
								<td style="width:70%;"><input type="telephone" placeholder="发送至原手机号" maxlength="30" name="old_telephone_code" class="input"></td>\
								<td>\
									<input type="button" class="button vcode" onclick="sendToOldPhone(this,event,\'form1\',\'telephone\');" value="获取验证码" />\
								</td>\
							</tr>\
							<tr class="input wrapInput">\
								<td>\
									<label class="pre ml_5" style="color:#333333;"> 新手机号码：</label> \
								</td>\
								<td style="width:100%;">\
									<input type="tel" name="new_telephone" placeholder="请输入手机号码" maxlength="15" class="input" />\
								</td>\
							</tr>\
							<tr class="input wrapInput">\
								<td style="width:70%;"><input type="number" placeholder="发送至新手机号" name="new_telephone_code" maxlength="30" class="input"></td>\
								<td>\
									<input type="button" class="button vcode" onclick="sendToNewPhone(this,event,\'form3\',\'new_telephone\');" value="获取验证码" />\
								</td>\
							</tr>\
						</table>\
					</li>\
				</form>\
			</ul>',
        btns:[
            {id:"", name:"确定", onclick:"fn.call();", fn: function(self){
                var form3 = document.getElementById("form3");
                loading(true);
                $.ajax({
                    url: "/Webnewmemberscore/ModifyBindPhoneNumber?pid=1071&bid=&wechatid=osXr8jo2_7zz3s0O5jzstVIlfmNc",
                    type:"post",
                    data:{
                        'old_telephone':'18688708215',
                        'old_telephone_code':form3.old_telephone_code.value,
                        'new_telephone': form3.new_telephone.value,
                        'new_telephone_code':form3.new_telephone_code.value,
                        'pid':'1071',
                        'wechatid':'osXr8jo2_7zz3s0O5jzstVIlfmNc'
                    },
                    dataType:"JSON",
                    success: function(res){
                        loading(false);
                        if(1 == res.errno){
                            self.die();
                            alert(res.error, 1500);
                        }else{
                            alert("更新手机号码绑定成功。", 1500);
                            redirect('/Webnewmemberscore/editMemberInfo?pid=1071&bid=&id=&wechatid=osXr8jo2_7zz3s0O5jzstVIlfmNc',1500);
                        }
                    }
                });
            }},
            {id:"", name:"取消", onclick:"fn.call();", fn: function(self){
                self.die();
            }}
        ]
    });
}


function submit1(){
    var form = document.getElementById("form1");
    var obj = {
        username: form.username.value,
        gender:form.gender.value,
        telephone: form.telephone.value,
        birthday: [form.birth_year.value, form.birth_month.value, form.birth_date.value].join("-"),
        address:form.address.value
    }
    if(obj.username.length<=0){
        alert("请输入姓名", 1500);
        return;
    }
    if(!( /^\d{11}$/g.test(obj.telephone))){
        alert("手机号格式错误!",1500);
        return;
    }

    //loading(true);
    $.ajax({
        url: "<?php echo Yii::app()->request->baseUrl; ?>/Member/Updatedetail/sid/<?php echo $sid; ?>/f/<?php echo $openid;?>/i/<?php echo $member->id; ?>",
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
            }
        }
    });

}
$(function () {
    var sel = aSelect({data: aLocation});
    sel.bind('#selectProvince', '');
    sel.bind('#selectCity', '');
    sel.bind('#selectArea', '');
})
</script>
<div class="container info_tx">
    <div class="body pt_10">
        <ul class="list_ul_card">
            <form id="form1" action="javascript:;" method="post">
                <input type="hidden" name="member_id" value="216450">
                <input type="hidden" name="pid" value="">
                <li data-card="">
                    <header class="center">
                        <label style="display:inline-block;">完善会员卡资料</label>
                    </header>
                    <div class="forms">
                        <dl>
                            <dt>姓 名： </dt>
                            <dd>
                                <input type="text" name="username" id="username" value="<?php echo $member->username; ?>" placeholder="请输入姓名" maxlength="30" class="input">
                            </dd>
                        </dl>
                        <dl>
                            <dt>手机号码： </dt>
                            <dd>
                                <input type="text" name="telephone" id="telephone" value="<?php echo $member->phone; ?>" placeholder="请输入手机号" maxlength="30" class="input">
                            </dd>
                        </dl>
                        <!--
                        <dl>
                            <dd>
                                <div class="group_input input">
                                    <table>
                                        <tbody><tr>
                                            <td><input type="tel" name="telephone" id="telephone" placeholder="请输入手机号" maxlength="30" class="input" value="18688708215"></td>
                                            <td style="width:100px;">
                                                <a href="javascript:bd1();" class="button">绑定</a>
                                            </td>
                                        </tr>
                                        </tbody></table>
                                </div>
                            </dd>
                        </dl>
                        -->
                        <!-- 系统字段性别可修改-->
                        <dl>
                            <dt>性 别： </dt>
                            <dd>
                                <select name="gender" id="gender" class="select" style="width:100%;">
                                    <option value="1" <?php if($member->sex == 1){ echo 'selected';}?>>男</option>
                                    <option value="2" <?php if($member->sex == 2){ echo 'selected';}?>>女</option>
                                </select>
                            </dd>
                        </dl>
                        <!-- 系统字段性别是否可修改-->
                        <dl>
                            <dt>生 日：</dt>
                            <dd>
                                <div class="box select_box">
                                    <div>
                                        <select name="birth_year" readonly="readonly" class="select" id="selectYear" value=""><!--auth Eric_wu--><option value="1926">1926年</option><option value="1927">1927年</option><option value="1928">1928年</option><option value="1929">1929年</option><option value="1930">1930年</option><option value="1931">1931年</option><option value="1932">1932年</option><option value="1933">1933年</option><option value="1934">1934年</option><option value="1935">1935年</option><option value="1936">1936年</option><option value="1937">1937年</option><option value="1938">1938年</option><option value="1939">1939年</option><option value="1940">1940年</option><option value="1941">1941年</option><option value="1942">1942年</option><option value="1943">1943年</option><option value="1944">1944年</option><option value="1945">1945年</option><option value="1946">1946年</option><option value="1947">1947年</option><option value="1948">1948年</option><option value="1949">1949年</option><option value="1950">1950年</option><option value="1951">1951年</option><option value="1952">1952年</option><option value="1953">1953年</option><option value="1954">1954年</option><option value="1955">1955年</option><option value="1956">1956年</option><option value="1957">1957年</option><option value="1958">1958年</option><option value="1959">1959年</option><option value="1960">1960年</option><option value="1961">1961年</option><option value="1962">1962年</option><option value="1963">1963年</option><option value="1964">1964年</option><option value="1965">1965年</option><option value="1966">1966年</option><option value="1967">1967年</option><option value="1968">1968年</option><option value="1969">1969年</option><option value="1970">1970年</option><option value="1971">1971年</option><option value="1972">1972年</option><option value="1973">1973年</option><option value="1974">1974年</option><option value="1975">1975年</option><option value="1976">1976年</option><option value="1977">1977年</option><option value="1978">1978年</option><option value="1979">1979年</option><option value="1980">1980年</option><option value="1981">1981年</option><option value="1982">1982年</option><option value="1983">1983年</option><option value="1984">1984年</option><option value="1985">1985年</option><option value="1986">1986年</option><option value="1987">1987年</option><option value="1988">1988年</option><option value="1989">1989年</option><option value="1990">1990年</option><option value="1991">1991年</option><option value="1992">1992年</option><option value="1993">1993年</option><option value="1994">1994年</option><option value="1995">1995年</option><option value="1996">1996年</option><option value="1997">1997年</option><option value="1998">1998年</option><option value="1999">1999年</option><option value="2000">2000年</option><option value="2001">2001年</option><option value="2002">2002年</option><option value="2003">2003年</option><option value="2004">2004年</option><option value="2005">2005年</option><option value="2006">2006年</option><option value="2007">2007年</option><option value="2008">2008年</option><option value="2009">2009年</option><option value="2010">2010年</option><option value="2011">2011年</option><option value="2012">2012年</option><option value="2013">2013年</option><option value="2014">2014年</option></select>
                                    </div>
                                    <div>
                                        <select name="birth_month" readonly="readonly" class="select" id="selectMonth" value=""><!--auth Eric_wu--><option value="01">1月</option><option value="02">2月</option><option value="03">3月</option><option value="04">4月</option><option value="05">5月</option><option value="06">6月</option><option value="07">7月</option><option value="08">8月</option><option value="09">9月</option><option value="10">10月</option><option value="11">11月</option><option value="12">12月</option></select>
                                    </div>
                                    <div>
                                        <select name="birth_date" readonly="readonly" class="select" id="selectDate" value=""><!--auth Eric_wu--><option value="01">1日</option><option value="02">2日</option><option value="03">3日</option><option value="04">4日</option><option value="05">5日</option><option value="06">6日</option><option value="07">7日</option><option value="08">8日</option><option value="09">9日</option><option value="10">10日</option><option value="11">11日</option><option value="12">12日</option><option value="13">13日</option><option value="14">14日</option><option value="15">15日</option><option value="16">16日</option><option value="17">17日</option><option value="18">18日</option><option value="19">19日</option><option value="20">20日</option><option value="21">21日</option><option value="22">22日</option><option value="23">23日</option><option value="24">24日</option><option value="25">25日</option><option value="26">26日</option><option value="27">27日</option><option value="28">28日</option><option value="29">29日</option><option value="30">30日</option><option value="31">31日</option></select>
                                    </div>
                                </div>
                            </dd>
                        </dl>
                        <!-- 系统字段性别可修改-->
                        <!--
                        <dl>
                            <dt>地区:</dt>
                            <dd>
                                <div class="box select_box">
                                    <div>
                                        <select name="addr_prov" class="select" id="selectProvince" selectedindex="0" style="width: 190px;"><option value="">请选择</option><option value="110000">北京</option><option value="120000">天津</option><option value="130000">河北省</option><option value="140000">山西省</option><option value="150000">内蒙古自治区</option><option value="210000">辽宁省</option><option value="220000">吉林省</option><option value="230000">黑龙江省</option><option value="310000">上海</option><option value="320000">江苏省</option><option value="330000">浙江省</option><option value="340000">安徽省</option><option value="350000">福建省</option><option value="360000">江西省</option><option value="370000">山东省</option><option value="410000">河南省</option><option value="420000">湖北省</option><option value="430000">湖南省</option><option value="440000">广东省</option><option value="450000">广西壮族自治区</option><option value="460000">海南省</option><option value="500000">重庆</option><option value="510000">四川省</option><option value="520000">贵州省</option><option value="530000">云南省</option><option value="540000">西藏自治区</option><option value="610000">陕西省</option><option value="620000">甘肃省</option><option value="630000">青海省</option><option value="640000">宁夏回族自治区</option><option value="650000">新疆维吾尔自治区</option><option value="710000">台湾省</option><option value="810000">香港特别行政区</option><option value="820000">澳门特别行政区</option><option value="990000">海外</option></select>
                                    </div>
                                    <div>
                                        <select name="addr_city" class="select" id="selectCity"><option value="">请选择</option></select>
                                    </div>
                                    <div>
                                        <select name="addr_area" class="select" id="selectArea"><option value="">请选择</option></select>
                                    </div>
                                </div>
                            </dd>
                        </dl>
                        -->
                        <dl>
                            <dt>详细地址:</dt>
                            <dd><input type="text" name="address" id="Js-address" value="<?php echo $member->address; ?>" placeholder="请输入详细地址" maxlength="100" class="input"></dd>
                        </dl>
                        <!-- 自定义字段必填项-->

                    </div></li>
                <div class="pt_10 pb_10">
                    <a href="javascript:submit1();" class="button">提&nbsp;&nbsp;&nbsp;交</a>
                </div>
                <!--<div class="pt_10 pb_10">
                    <a href="javascript:bd();" class="link">绑定已有实体卡</a>
                </div>-->
            </form>
        </ul>
    </div>
</div>
<script type="text/javascript">
    var intervalId,buttonObj,intervalId2,buttonObj2;
    //发送下一条短信需要间隔的秒数
    var seconds = 60;
    var seconds2 = 60;
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
            url: "/Webnewmemberscore/SendBindTelephone?pid=1071&wechatid=osXr8jo2_7zz3s0O5jzstVIlfmNc",
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
                    clickObj.value = '获取验证码';
                    clickObj.removeAttribute("disabled");
                }
            }
        });
    }

    function sendToOldPhone(clickObj, evt){
        var pid = 1071;
        var req = {
            telephone: '18688708215',
            pid:pid
        }
        clickObj.setAttribute("disabled", "disabled");
        clickObj.value = "正在发送，请稍候...";
        $.ajax({
            url: "/Webnewmemberscore/SendToOldTelephone?pid=1071&wechatid=osXr8jo2_7zz3s0O5jzstVIlfmNc",
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
                    clickObj.value = '获取验证码';
                    clickObj.removeAttribute("disabled");
                }
            }
        });
    }

    function sendToNewPhone(clickObj, evt, formId, teleName){
        var pid = 1071;
        var form = document.getElementById(formId);
        var req = {
            telephone: $.trim(form[teleName].value),
            pid:pid
        }
        if(!req.telephone){
            alert("请输入手机号", 1000);
            return;
        }
        clickObj.setAttribute("disabled", "disabled");
        clickObj.value = "正在发送，请稍候...";
        $.ajax({
            url: "/Webnewmemberscore/SendToNewTelephone?pid=1071&wechatid=osXr8jo2_7zz3s0O5jzstVIlfmNc",
            type:"post",
            data:req,
            dataType:"JSON",
            success: function(res){
                if(0 == res.errno){
                    clickObj.value = '验证码发送成功';
                    buttonObj2 = clickObj;
                    intervalId2 = setInterval("ticker2()",1000);
                }else{
                    alert(res.error, 1500);
                    clickObj.value = '获取验证码';
                    clickObj.removeAttribute("disabled");
                }
            }
        });
    }

    function ticker(){
        seconds --;
        if(seconds > 55){
            //提示消息显示5秒钟
        }else if(seconds>0){
            buttonObj.value = seconds + "秒后可重新获取";
        }else{
            clearInterval(intervalId);
            buttonObj.removeAttribute("disabled");
            buttonObj.value = "获取验证码";
            seconds = 60;
            buttonObj = null;
        }
    }

    function ticker2(){
        seconds2 --;
        if(seconds2 > 55){
            //提示消息显示5秒钟
        }else if(seconds2>0){
            buttonObj2.value = seconds2 + "秒后可重新获取";
        }else{
            clearInterval(intervalId2);
            buttonObj2.removeAttribute("disabled");
            buttonObj2.value = "获取验证码";
            seconds = 60;
            buttonObj2 = null;
        }
    }
</script>

<script type="text/javascript">
    document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        WeixinJSBridge.call('hideToolbar');
    });

    window.shareData = {
        "imgUrl": "",
        "timeLineLink": "http://www.weimob.com/Webnewmemberscore/editMemberInfo?pid=1071&wechatid=fromUsername",
        "sendFriendLink": "http://www.weimob.com/Webnewmemberscore/editMemberInfo?pid=1071&wechatid=fromUsername",
        "weiboLink": "http://www.weimob.com/Webnewmemberscore/editMemberInfo?pid=1071&wechatid=fromUsername",
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
            "timeLineLink": "http://www.weimob.com/Webnewmemberscore/editMemberInfo?pid=1071&wechatid=fromUsername",
            "sendFriendLink": "http://www.weimob.com/Webnewmemberscore/editMemberInfo?pid=1071&wechatid=fromUsername",
            "weiboLink": "http://www.weimob.com/Webnewmemberscore/editMemberInfo?pid=1071&wechatid=fromUsername",
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