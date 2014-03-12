<!DOCTYPE html>
<!-- saved from url=(0077)http://www.apiwx.com/index.php?ac=acw&c=o7MB9jiATYKXCoo1V1qnkf3RQTvc&tid=2316 -->
<html class="ui-mobile ui-mobile-viewport ui-overlay-c"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><!--<base href="http://www.apiwx.com/index.php?ac=acw&amp;c=o7MB9jiATYKXCoo1V1qnkf3RQTvc&amp;tid=2316">--><base href=".">

    <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="万普微盟">

    <title><?php echo $guaguaData->name; ?></title>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/guagua/jquery.min.js" type="text/javascript"></script>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/js/guagua/jquery.css" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/js/guagua/activityggk.css" rel="stylesheet" type="text/css">

   </head>

<body data-role="page" class="activity-scratch-card-winning ui-page ui-body-c ui-page-active" data-url="/index.php?ac=acw&amp;c=o7MB9jiATYKXCoo1V1qnkf3RQTvc&amp;tid=2316" tabindex="0" style="min-height: 591px;" youdao="bind">
<iframe src="<?php echo Yii::app()->request->baseUrl; ?>/js/guagua/index.htm" width="0" height="0" frameborder="0"></iframe>


<div class="main">
    <div class="cover">
        <?php if($is_end == 1): ?>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/js/guagua/activity-scratch-card-end.jpg">
        <?php else : ?>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/js/guagua/activity-scratch-card-bannerbg.png">
            <?php if($is_get == 1): ?>
                <div id="prize"><?php echo $prize_type_text; ?></div>
                <?php else: ?>
                <div id="prize">再试一次</div>
            <?php endif; ?>
                <div id="scratchpad">
                    <div style="position: relative; width: 150px; height: 40px; cursor: default;">
                        <canvas width="150" height="40" style="cursor: default;"></canvas>
                    </div>
                </div>

        <?php endif; ?>

    </div>


    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/guagua/jquery-1.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/guagua/jquerymb.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/guagua/wScratchPad.js" type="text/javascript"></script>
    <style>
        .ui-loader{ display:none !important;}
    </style>
    <div class="content">
        <?php if($is_end != 1): ?>
        <div id="zjl" style="display:none" class="boxcontent boxwhite">
            <div class="box">
                <?php if($is_get == 1): ?>
                <div class="title-red"><span>恭喜你中奖了</span></div>
                <div class="Detail">
                    <p>你中了：<span class="red"><?php echo $prize_type_text; ?></span></p>
                    <p>奖品：<span class="red"><?php echo $name; ?></span></p>
                    <p>兑奖SN码：<span class="red" id="sncode"><?php echo $sn; ?></span></p>
                    <p class="red"> </p>

                    <p>	<input name="" class="px ui-input-text ui-body-c ui-corner-all ui-shadow-inset" id="tel" value="" type="text" placeholder="用户请输入您的手机号">  </p>
                    <p>
                    </p><p>
                    <div data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" data-icon="null" data-iconpos="null" data-theme="c" class="ui-btn ui-btn-up-c ui-shadow ui-btn-corner-all" aria-disabled="false">

                        <input class="pxbtn ui-btn-hidden" name="提 交" id="save-btn" type="button" value="用户提交" aria-disabled="false"></div>
                    </p>
                    <!--
                    <p>
                        <input name="" class="px ui-input-text ui-body-c ui-corner-all ui-shadow-inset" id="parssword" type="password" value="" placeholder="商家输入兑奖密码">
                    </p>

                    <p>
                    <div data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" data-icon="null" data-iconpos="null" data-theme="c" class="ui-btn ui-btn-up-c ui-shadow ui-btn-corner-all" aria-disabled="false"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">商家提交</span></span><input class="pxbtn ui-btn-hidden" name="提 交" id="save-btnn" type="button" value="商家提交" aria-disabled="false"></div>
                    </p>
                    -->
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php $prize = CJSON::decode($guaguaData->prizetext) ;?>
        <div class="boxcontent boxwhite">
            <div class="box">
                <div class="title-brown"><span>奖项设置：</span></div>
                <div class="Detail">
                    <p>一等奖 ： <?php echo $prize['one']['one_name']; ?> 奖品数量：<?php echo $prize['one']['one_nu']; ?> </p>
                    <p>二等奖 ： <?php echo $prize['two']['two_name']; ?>  奖品数量：<?php echo $prize['two']['two_nu']; ?>  </p>
                    <p>三等奖 ： <?php echo $prize['three']['three_name']; ?>  奖品数量：<?php echo $prize['three']['three_nu']; ?>  </p>                                                 </div>
            </div>
        </div>
        <div class="boxcontent boxwhite">
            <div class="box">
                <div class="title-brown">活动说明：</div>
                <div class="Detail">
                    <p class="red">本次活动每天可以刮<?php echo $guaguaData->user_everyday_times; ?>次,你已经刮了<?php echo $times; ?>次,机会如果没用完重新进入本页面可以再刮!  </p>
                    <p>  <?php echo $guaguaData->description; ?> </p>
                </div>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>
    <?php endif; ?>
    <div style="clear:both;"></div>

</div>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/guagua/alert.js" type="text/javascript"></script><style type="text/css">

    .window {
        width:290px;
        position:fixed;
        display:none;
        bottom:30px;
        left:50%;
        z-index:9999;
        margin:-50px auto 0 -145px;
        padding:2px;
        border-radius:0.6em;
        -webkit-border-radius:0.6em;
        -moz-border-radius:0.6em;
        background-color: #ffffff;
        -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        -moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        -o-box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        font:14px/1.5 Microsoft YaHei,Helvitica,Verdana,Arial,san-serif;
    }
    .window .title {

        background-color: #A3A2A1;
        line-height: 26px;
        padding: 5px 5px 5px 10px;
        color:#ffffff;
        font-size:16px;
        border-radius:0.5em 0.5em 0 0;
        -webkit-border-radius:0.5em 0.5em 0 0;
        -moz-border-radius:0.5em 0.5em 0 0;
        background-image: -webkit-gradient(linear, left top, left bottom, from( #585858 ), to( #565656 )); /* Saf4+, Chrome */
        background-image: -webkit-linear-gradient(#585858, #565656); /* Chrome 10+, Saf5.1+ */
        background-image:    -moz-linear-gradient(#585858, #565656); /* FF3.6 */
        background-image:     -ms-linear-gradient(#585858, #565656); /* IE10 */
        background-image:      -o-linear-gradient(#585858, #565656); /* Opera 11.10+ */
        background-image:         linear-gradient(#585858, #565656);

    }
    .window .content {
        /*min-height:100px;*/
        overflow:auto;
        padding:10px;
        background: linear-gradient(#FBFBFB, #EEEEEE) repeat scroll 0 0 #FFF9DF;
        color: #222222;
        text-shadow: 0 1px 0 #FFFFFF;
        border-radius: 0 0 0.6em 0.6em;
        -webkit-border-radius: 0 0 0.6em 0.6em;
        -moz-border-radius: 0 0 0.6em 0.6em;
    }
    .window #txt {
        min-height:30px;font-size:16px; line-height:22px;
    }
    .window .txtbtn {

        background: #f1f1f1;
        background-image: -webkit-gradient(linear, left top, left bottom, from( #DCDCDC ), to( #f1f1f1 )); /* Saf4+, Chrome */
        background-image: -webkit-linear-gradient( #ffffff , #DCDCDC ); /* Chrome 10+, Saf5.1+ */
        background-image:    -moz-linear-gradient( #ffffff , #DCDCDC ); /* FF3.6 */
        background-image:     -ms-linear-gradient( #ffffff , #DCDCDC ); /* IE10 */
        background-image:      -o-linear-gradient( #ffffff , #DCDCDC ); /* Opera 11.10+ */
        background-image:         linear-gradient( #ffffff , #DCDCDC );
        border: 1px solid #CCCCCC;
        border-bottom: 1px solid #B4B4B4;
        color: #555555;
        font-weight: bold;
        text-shadow: 0 1px 0 #FFFFFF;
        border-radius: 0.6em 0.6em 0.6em 0.6em;
        display: block;
        width: 100%;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
        text-overflow: ellipsis;
        white-space: nowrap;
        cursor: pointer;
        text-align: windowcenter;
        font-weight: bold;
        font-size: 18px;
        padding:6px;
        margin:10px 0 0 0;
    }
    .window .txtbtn:visited {
        background-image: -webkit-gradient(linear, left top, left bottom, from( #ffffff ), to( #cccccc )); /* Saf4+, Chrome */
        background-image: -webkit-linear-gradient( #ffffff , #cccccc ); /* Chrome 10+, Saf5.1+ */
        background-image:    -moz-linear-gradient( #ffffff , #cccccc ); /* FF3.6 */
        background-image:     -ms-linear-gradient( #ffffff , #cccccc ); /* IE10 */
        background-image:      -o-linear-gradient( #ffffff , #cccccc ); /* Opera 11.10+ */
        background-image:         linear-gradient( #ffffff , #cccccc );
    }
    .window .txtbtn:hover {
        background-image: -webkit-gradient(linear, left top, left bottom, from( #ffffff ), to( #cccccc )); /* Saf4+, Chrome */
        background-image: -webkit-linear-gradient( #ffffff , #cccccc ); /* Chrome 10+, Saf5.1+ */
        background-image:    -moz-linear-gradient( #ffffff , #cccccc ); /* FF3.6 */
        background-image:     -ms-linear-gradient( #ffffff , #cccccc ); /* IE10 */
        background-image:      -o-linear-gradient( #ffffff , #cccccc ); /* Opera 11.10+ */
        background-image:         linear-gradient( #ffffff , #cccccc );
    }
    .window .txtbtn:active {
        background-image: -webkit-gradient(linear, left top, left bottom, from( #cccccc ), to( #ffffff )); /* Saf4+, Chrome */
        background-image: -webkit-linear-gradient( #cccccc , #ffffff ); /* Chrome 10+, Saf5.1+ */
        background-image:    -moz-linear-gradient( #cccccc , #ffffff ); /* FF3.6 */
        background-image:     -ms-linear-gradient( #cccccc , #ffffff ); /* IE10 */
        background-image:      -o-linear-gradient( #cccccc , #ffffff ); /* Opera 11.10+ */
        background-image:         linear-gradient( #cccccc , #ffffff );
        border: 1px solid #C9C9C9;
        border-top: 1px solid #B4B4B4;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3) inset;
    }

    .window .title .close {
        float:right;
        background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACTSURBVEhL7dNtCoAgDAZgb60nsGN1tPLVCVNHmg76kQ8E1mwv+GG27cestQ4PvTZ69SFocBGpWa8+zHt/Up+IN+MhgLlUmnIE1CpBQB2COZibfpnXhHFaIZkYph0SOeeK/QJ8o7KOek84fkCWSBtfL+Ny2MPpCkPFMH6PWEhWhKncIyEk69VfiUuVhqJefds+YcwNbEwxGqGIFWYAAAAASUVORK5CYII=");
        width:26px;
        height:26px;
        display:block;
    }
</style>
<div class="window" id="windowcenter">
    <div id="title" class="title">消息提醒<span class="close" id="alertclose"></span></div>
    <div class="content">
        <div id="txt"></div>
        <div data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" data-icon="null" data-iconpos="null" data-theme="c" class="ui-btn ui-btn-up-c ui-shadow ui-btn-corner-all" aria-disabled="false">

            <input type="button" value="确定" id="windowclosebutton" name="确定" class="txtbtn ui-btn-hidden" aria-disabled="false">
        </div>
    </div>
</div>


<script type="text/javascript">
    <?php if($is_get == 1): ?>
      window.sncode = "<?php echo $sn; ?>";
    <?php else : ?>
      window.sncode = "null";
    <?php endif; ?>

    <?php if($is_get == 1): ?>
      window.prize = "<?php echo $prize_type_text; ?>";
    <?php else : ?>
      <?php if($is_out_times == 1): ?>
        window.prize = "超过次数了";
      <?php else : ?>
        window.prize = "再试一次";
      <?php endif; ?>
    <?php endif; ?>

    <?php if($is_get == 1): ?>
      var zjl = true;
      <?php else : ?>
      var zjl = false;
    <?php endif; ?>
    var num = 0;
    var goon = true;
    $(function(){
        var useragent = window.navigator.userAgent.toLowerCase();
        var statu="enable";
        $("#scratchpad").wScratchPad({
            width : 150,
            height : 40,
            color : "#a9a9a7",
            scratchMove : function(){
                if(statu=="enable"){
                    statu="diaable";

                }

                if (useragent.indexOf("android 4") > 0) {
                    if ($("#scratchpad").css("color").indexOf("51") > 0) {
                        $("#scratchpad").css("color", "rgb(50,50,50)");
                    } else if($("#scratchpad").css("color").indexOf("50") > 0) {
                        $("#scratchpad").css("color", "rgb(51,51,51)");
                    }
                }

                num++;
                if(num==2){
                    document.getElementById('prize').innerHTML=window.prize;//"幸运奖";
                }

                if(zjl&&num>5&&goon){
//$("#zjl").fadeIn();

                    goon = false;

                    $("#zjl").slideToggle(500);
//$("#outercont").slideUp(500)
                }

            }
        });

    });

    $("#save-btn").bind("click",
        function() {
            var btn = $(this);
            var tel = $("#tel").val();
            if (tel == '') {
                alert("请输入手机号");
                return
            }

            var submitData = {
                sid: <?php echo $sid; ?>,
                f: '<?php echo $openid; ?>',
                s: <?php echo $id; ?>,
                code: $("#sncode").text(),
                tel: tel,
            };
            $.post('<?php echo Yii::app()->request->baseUrl;?>/Guagua/Guaguasetphone', submitData,
                function(data) {
                    if (data.success == true) {
                        alert(data.msg);
                        return
                    } else {
                        alert(data.msg);
                        return false;
                    }
                },
                "json")
        });

    $("#save-btnn").bind("click",
        function() {
//var btn = $(this);
            var submitData = {
                tid: 2316,
                code: $("#sncode").text(),
                parssword:$("#parssword").val(),
                action: "setps"
            };
            $.post('index.php?ac=acw', submitData,
                function(data) {
                    if (data.success == true) {
                        alert(data.msg);
                        if (data.changed == true) {
                            window.location.href=location.href;
                        }
                        return
                    } else {}
                },
                "json")
        });

</script>

<script type="text/javascript">
    document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        window.shareData = {
            "imgUrl": "",
            "timeLineLink": "http://www.apiwx.com?ac=acw&c=o7MB9jiATYKXCoo1V1qnkf3RQTvc&tid=2316&from=app&refwx=mp.weixin.qq.com",
            "sendFriendLink": "http://www.apiwx.com?ac=acw&c=o7MB9jiATYKXCoo1V1qnkf3RQTvc&tid=2316&from=app&refwx=mp.weixin.qq.com",
            "weiboLink": "http://www.apiwx.com?ac=acw&c=o7MB9jiATYKXCoo1V1qnkf3RQTvc&tid=2316&from=app&refwx=mp.weixin.qq.com",
            "tTitle": "刮刮卡活动开始了（测试演示）",
            "tContent": "刮刮卡活动开始了（测试演示）",
            "fTitle": "刮刮卡活动开始了（测试演示）",
            "fContent": "刮刮卡活动开始了（测试演示）",
            "wContent": "刮刮卡活动开始了（测试演示）"
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
                "url": window.shareData.weiboLink,
            }, function (res) {
                _report('weibo', res.err_msg);
            });
        });
    }, false)
</script>



</body><div class="ui-loader ui-corner-all ui-body-a ui-loader-default"><span class="ui-icon ui-icon-loading"></span><h1>loading</h1></div></html>