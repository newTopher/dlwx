<?php
/**
 * Created by IntelliJ IDEA.
 * User: db
 * Date: 14-2-10
 * Time: 下午3:20
 * To change this template use File | Settings | File Templates.
 */
?>
<!DOCTYPE html>
<!-- saved from url=(0113)http://fl.act.qq.com/34930/addev/h5/60431?openId=1fec9140e5a3dc3ec3b93059c309cafacb9fc484e4d94321490cb225c9454cf9
-->
<html lang="zh-CN">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta content="width=device-width" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="js/domReady" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/domReady.js">
    </script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="js/fl/widget/fl.widget.slider" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/fl.widget.slider.js">
    </script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="zepto_iscroll" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/zepto.iscroll.js">
    </script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="zepto_extend" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/zepto.extend.js">
    </script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="zepto_ui" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/zepto.ui.js">
    </script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="zepto_navigator" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/resource/navigator.js">
    </script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="zepto_navigator_iscroll" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/navigator.iscroll.js">
    </script>
    <!--<base href="http://fl.act.qq.com/">-->

    <title>
        <?php echo $webData->webname_title; ?>
    </title>
    <script>
        var s = new Date().getTime();
        var STATIC_DOMAIN = 'http://appmedia.qq.com/media/act/631007094/20140123v2';
        var pageDomain = 'fl.act.qq.com';
        var actPageId = '60431';
        var isMiniSite = '';
    </script>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/css/fl.normal.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/css/skin.red.css">
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/fl.normal.min.js">
    </script>
    <link type="text/css" rel="stylesheet" href="chrome-extension://cpngackimfmofbokmjmljamhdncknpmg/style.css">
    <script type="text/javascript" charset="utf-8" src="chrome-extension://cpngackimfmofbokmjmljamhdncknpmg/js/page_context.js">
    </script>
    <style>
        html { overflow-x:hidden; }
    </style>
</head>

<body screen_capture_injected="true" youdao="bind">
<div class="main">
<div class="content">
<nav class="widget widget-navigate" id="">
    <section class="js-nav ui-navigator" data-index="1">
        <div class="ui-navigator-wrapper" style="overflow: hidden;">
            <ul class="ui-navigator-list" style="width: 233px; -webkit-transition: -webkit-transform 0ms; transition: -webkit-transform 0ms; -webkit-transform-origin: 0px 0px; -webkit-transform: translate(0px, 0px) translateZ(0px);">
                <li>
                    <a class="cur" href="">
                        <?php echo $webData->webname_title; ?>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <img class="nav-img" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/images/1.gif">
</nav>
<section class="widget widget-mimage slide js-slider" id="">
    <section class="slide-content js-slide-content" id="js-slider">
        <ul style="width: 960px; -webkit-transition: 200ms; transition: 200ms; -webkit-transform: translate(0px, 0px);">
            <?php foreach($slideData as $key=>$val): ?>
            <li>
                <a href="<?php echo $val->url; ?>"><img src="<?php echo Yii::app()->baseUrl; ?>/upload/wxwebsite/<?php echo $val->image;?>"></a>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <section class="slide-progress">
                        <span class="cur js-slide-progress" id="js-slide-progress" style="width: 106.66666666666667px; left: 0px;">
                        </span>
    </section>
    <img class="slide-img marker-img" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/images/1.gif">
</section>
<section class="widget-panel" id="">
    <article class="content">
        <p>

            <!--    <a target="_self" href="<?php echo Yii::app()->request->hostInfo.'/index.php/W/i/sid/'.$webData->uid;?>">
                    首页
                </a>
                &nbsp; -->
                <a target="_self" href="http://www.my4009.cn/query.do">
                    选号
                </a>
                &nbsp;
                <?php foreach($menuData as $k=>$v): ?>
                <a target="_self" href="<?php echo Yii::app()->request->hostInfo.'/index.php/W/Site/sid/'.$webData->uid.'/mid/'.$v->id; ?>">
                    <?php echo $v->menu_name; ?>
                </a>
                &nbsp;
               <?php endforeach; ?>
        </p>
    </article>
</section>
<section class="widget-panel" id="">
    <h1 class="title">
                        <span>
                            靓号推荐
                        </span>
    </h1>
    <article class="content">
        <p>
                            <span style="color:#ff0000;">
                                4000-888-238 &nbsp;4000-888-126 &nbsp;4000-666-126
                            </span>
        </p>
        <p>
                            <span style="color:#ff0000;">
                                4009-123-068 &nbsp;400-6326-128 &nbsp;4000-237-128
                            </span>
        </p>
        <p>
                            <span style="color:#ff0000;">
                                400-886-3126 &nbsp;400-688-3126 &nbsp;400-882-3126
                            </span>
        </p>
        <p>
                            <span style="color:#ff0000;">
                                400-668-3126 &nbsp;400-666-2703 &nbsp;400-876-2268
                            </span>
        </p>
        <p>
                            <span style="color:#ff0000;">
                                400-882-3655 &nbsp;400-626-8622 &nbsp;400-993-2886
                            </span>
        </p>
        <p>
                            <span style="color:#ff0000;">
                                400-812-6636 &nbsp;400-636-2368 &nbsp;400-8363-128
                            </span>
        </p>
        <p>
                            <span style="color:#FF0000;">
                                400-855-0128 &nbsp;4008-123-286 &nbsp;400-888-2480
                            </span>
        </p>
    </article>
</section>

<section class="widget-panel" id="">
    <h1 class="title">
                        <span>
                            温馨提示：
                        </span>
    </h1>
    <article class="content">
        <p>
                            <span style="color:#f79646;">
                                1、本公司为中国联通、中国电信的核心合作伙伴
                                <br>
                                2、多项国家专利技术，持续不断的新服务
                            </span>
        </p>
        <p>
                            <span style="color:#f79646;">
                                3、7天X24小时客户支持队伍，我们将在你 提交资料24小时内联系您，请保持电话畅通
                            </span>
        </p>
    </article>
</section>

<section class="widget-box" id="">
    <a href="wtai://wp/mc;4000-666-168">
        <div>
            <i class="icon2 phone">
            </i>
                            <span style="font-size:22px">
                              <?php echo $webData->tel; ?>
                            </span>
        </div>
    </a>
</section>
<section class="widget-panel" id="">
    <h1 class="title">
                        <span>
                            亲，赶快办理吧！
                        </span>
    </h1>
    <article class="content">
        <form action="http://fl.act.qq.com/message/message/submit?sid=" method="POST"
              data-ajax="false">
            <input type="hidden" name="app" value="addev">
            <input type="hidden" name="tpl" value="h5">
            <input type="hidden" name="v" value="">
            <input type="hidden" name="index" value="14">
            <input type="hidden" name="act_page_id" value="60431">
            <input type="hidden" name="return_url" value="http://fl.act.qq.com/34930/addev/h5/60431?openId=1fec9140e5a3dc3ec3b93059c309cafacb9fc484e4d94321490cb225c9454cf9">
            <input type="hidden" name="g_tk" value="177621">
            <label>
                您的姓名
            </label>
            <div class="input text">
                <input type="text" name="FUserName" id="username" value="" placeholder="请输入您的姓名">
            </div>
            <label>
                联系电话*
            </label>
            <div class="input text">
                <input type="tel" name="FTel" id="tel" value="" placeholder="请输入您的联系电话">
            </div>
            <label>
                电子邮件
            </label>
            <div class="input text">
                <input type="email" name="FEmail" id="email" value="" placeholder="请输入您的邮箱地址">
            </div>
            <label>
                留言正文
            </label>
            <div class="input text textarea-wrapper">
                <textarea name="FMessage" placeholder="请输入留言">
                </textarea>
            </div>
            <div class="button-row">
                <button type="submit" name="submit" value="submit-value">
                    提 交
                </button>
            </div>
        </form>
    </article>
</section>

</div>
<footer class="footer">
    <section class="f-content center">
                    <span class="back-top left">
                        <a href="www.wapwei.com">
                            本页面由万普科技·万普微盟支持
                        </a>
                    </span>

    </section>
</footer>
</div>
</body>

</html>