<!DOCTYPE html>
<!-- saved from url=(0075)http://www.apiwx.com/?ac=alw&id=650&tid=7470&c=o7MB9jiATYKXCoo1V1qnkf3RQTvc -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="万普微盟">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title> <?php echo $zhuanData->name; ?></title>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/js/zhuan/activity-style.css" rel="stylesheet" type="text/css">
</head>

<body class="activity-lottery-winning" youdao="bind" style="">
<div class="main">

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/zhuan/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/zhuan/alert.js" type="text/javascript"></script><style type="text/css">

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
            <input type="button" value="确定" id="windowclosebutton" name="确定" class="txtbtn">
        </div>
    </div>
    <?php if($is_end != 1): ?>
        <div id="outercont" style="display:block;">
            <div id="outer-cont">
                <div id="outer">  <img src="<?php echo Yii::app()->request->baseUrl; ?>/js/zhuan/activity-lottery-3.png">  </div>
            </div>
            <div id="inner-cont">
                <div id="inner"><img src="<?php echo Yii::app()->request->baseUrl; ?>/js/zhuan/activity-lottery-2.png"></div>
            </div>
        </div>
    <?php endif; ?>
    <div class="content">
        <?php if($is_end != 1): ?>
            <div class="boxcontent boxyellow" id="result" style="display: none;">
                <div class="box">
                    <div class="title-orange"><span>恭喜你中奖了</span></div>
                    <div class="Detail">

                        <p>你中了：<span class="red" id="prizetype"></span></p>
                        <p>兑奖SN码：<span class="red" id="sncode"></span></p>
                        <p class="red" id="red"></p>
                        <p>	<input name="" class="px" id="tel" value="" type="text" placeholder="用户请输入您的手机号">  </p>

                        <p>



                        </p><p>
                            <input class="pxbtn" name="提 交" id="save-btn" type="button" value="用户提交">
                        </p>




                        <!--

                        <p>

                            <input name="" class="px" id="parssword" type="password" value="" placeholder="商家输入兑奖密码">
                        </p>

                        <p>
                            <input class="pxbtn" name="提 交" id="save-btnn" type="button" value="商家提交">
                        </p>
                        -->
                    </div>
                </div>
            </div>
            <?php $prize = CJSON::decode($zhuanData->prizetext) ;?>
            <div class="boxcontent boxyellow">
                <div class="box">
                    <div class="title-green"><span>奖项设置：</span></div>

                    <div class="Detail">


                        <p>一等奖： <?php echo $prize['one']['one_name']; ?>。 数量：<?php echo $prize['one']['one_nu']; ?></p>
                        <p>二等奖： <?php echo $prize['two']['two_name']; ?> 。 数量：<?php echo $prize['two']['two_nu']; ?></p>
                        <p>三等奖： <?php echo $prize['three']['three_name']; ?> 。 数量：<?php echo $prize['three']['three_nu']; ?>  </p>
                    </div>
                </div>
            </div>
            <div class="boxcontent boxyellow">
                <div class="box">
                    <div class="title-green">活动说明：</div>
                    <div class="Detail">
                        <p class="red">本次活动每天可以刮<?php echo $zhuanData->user_everyday_times; ?>次,你已经刮了<?php echo $times; ?>次,机会如果没用完重新进入本页面可以再刮!  </p>
                        <p>  <?php echo $zhuanData->description; ?> </p>
                    </div>
                </div>
            </div>
            <?php else : ?>
            <div>  <img src="<?php echo Yii::app()->request->baseUrl; ?>/js/zhuan/activity-lottery-end.jpg">  </div>
        <?php endif; ?>
    </div>

</div>


<script type="text/javascript">


    $(function() {
        window.requestAnimFrame = (function() {
            return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame ||
                function(callback) {
                    window.setTimeout(callback, 1000 / 60)
                }
        })();
        var totalDeg = 360 * 3 + 0;
        var steps = [];
        var lostDeg = [36, 96, 156, 216, 276,336];
        var prizeDeg = [6, 66, 126,186,246,306];
        var prize, sncode;
        var count = <?php echo $times; ?>;
        var now = 0;
        var a = 0.01;
        var outter, inner, timer, running = false;
        function countSteps() {
            var t = Math.sqrt(2 * totalDeg / a);
            var v = a * t;
            for (var i = 0; i < t; i++) {
                steps.push((2 * v * i - a * i * i) / 2)
            }
            steps.push(totalDeg)
        }
        function step() {
            outter.style.webkitTransform = 'rotate(' + steps[now++] + 'deg)';
            outter.style.MozTransform = 'rotate(' + steps[now++] + 'deg)';
            if (now < steps.length) {
                running = true;
                requestAnimFrame(step)
            } else {
                running = false;
                setTimeout(function() {
                        if (prize != null) {
                            $("#sncode").text(sncode);
                            var type = "";
                            if (prize == 1) {
                                type = "一等奖"
                            } else if (prize == 2) {
                                type = "二等奖"
                            } else if (prize == 3) {
                                type = "三等奖"
                            }
                            else if (prize == 4) {
                                type = "四等奖"
                            }
                            else if (prize == 5) {
                                type = "五等奖"
                            }
                            else if (prize == 6) {
                                type = "六等奖"
                            }
                            $("#prizetype").text(type);
                            $("#result").slideToggle(500);
                            $("#outercont").slideUp(500)
                        } else {
                            alert("亲，继续努力哦！")
                        }
                    },
                    200)
            }
        }
        function start(deg) {
            deg = deg || lostDeg[parseInt(lostDeg.length * Math.random())];
            running = true;
            clearInterval(timer);
            totalDeg = 360 * 5 + deg;
            steps = [];
            now = 0;
            countSteps();
            requestAnimFrame(step)
        }
        window.start = start;
        outter = document.getElementById('outer');
        inner = document.getElementById('inner');
        i = 10;
        $("#inner").click(function() {

            if (running) return;
            if (count >= <?php echo $zhuanData->user_everyday_times; ?>) {
                alert("您已经抽了 <?php echo $zhuanData->user_everyday_times; ?> 次奖,不能再抽了,明天再来吧!");
                return
            }
            if (prize != null) {
                alert("亲，你不能再参加本次活动了喔！明天再来吧~");
                return
            }
            $.ajax({
                url: "<?php echo Yii::app()->request->baseUrl;?>/Zhuan/Startgame",
                dataType: "json",
                data: {
                    sid: <?php echo $sid; ?>,
                    f: '<?php echo $openid; ?>',
                    s: <?php echo $id; ?>
                },
                beforeSend: function() {
                    running = true;
                    timer = setInterval(function() {
                            i += 5;
                            outter.style.webkitTransform = 'rotate(' + i + 'deg)';
                            outter.style.MozTransform = 'rotate(' + i + 'deg)'
                        },
                        1)
                },
                success: function(data) {
                    if (data.error == "invalid") {
                        alert(data.msg);
                        count = 1;
                        clearInterval(timer);
                        return
                    }
                    if (data.error == "getsn") {
                        start(prizeDeg[data.prizetype - 1]);
                        if(data.state==2){
                            $("#closedj").css("display","none");

                        }
                        $("#red").text(data.msg);
                        alert(data.msg + data.sn);
                        count = 1;
                        clearInterval(timer);
                        prize = data.prizetype;
                        sncode = data.sn;
                        return
                    }
                    if (data.success) {
                        prize = data.prizetype;
                        sncode = data.sn;
                        start(prizeDeg[data.prizetype - 1])
                    } else {
                        prize = null;
                        start()
                    }
                    running = false;
                    count++
                },
                error: function() {
                    prize = null;
                    start();
                    running = false;
                    count++
                },
                timeout: 1000
            })
        })
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
                tel: tel
            };
            $.post('<?php echo Yii::app()->request->baseUrl;?>/Zhuan/Zhuansetphone', submitData,
                function(data) {
                    if (data.success == true) {
                        alert(data.msg);
                        return
                    } else {}
                },
                "json")
        });

    $("#save-btnn").bind("click",
        function() {
            var submitData = {
                tid: 7470,
                code: $("#sncode").text(),
                formhash: "5ffbdf0a",
                parssword:$("#parssword").val(),
                action: "setps"
            };
            $.post('index.php?ac=activityuser', submitData,
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
            "timeLineLink": "http://www.apiwx.com?ac=alw&c=o7MB9jiATYKXCoo1V1qnkf3RQTvc&tid=7470&from=app&refwx=mp.weixin.qq.com",
            "sendFriendLink": "http://www.apiwx.com?ac=alw&c=o7MB9jiATYKXCoo1V1qnkf3RQTvc&tid=7470&from=app&refwx=mp.weixin.qq.com",
            "weiboLink": "http://www.apiwx.com?ac=alw&c=o7MB9jiATYKXCoo1V1qnkf3RQTvc&tid=7470&from=app&refwx=mp.weixin.qq.com",
            "tTitle": "幸运大转盘活动开始了",
            "tContent": "幸运大转盘活动开始了",
            "fTitle": "幸运大转盘活动开始了",
            "fContent": "幸运大转盘活动开始了",
            "wContent": "幸运大转盘活动开始了"
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

<iframe src="<?php echo Yii::app()->request->baseUrl; ?>/js/zhuan/saved_resource.htm" width="0" height="0" frameborder="0"></iframe>


</body></html>