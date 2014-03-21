<!DOCTYPE html>
<!-- saved from url=(0066)http://www.ptweixin.com/api/197196ec4a/web/?wxref=mp.weixin.qq.com -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <meta content="telephone=no" name="format-detection">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <title><?php echo $webData->webname_title; ?></title>
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/css/global.css" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/css/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/global.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/web.js"></script>
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/css/style(1).css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/fireworks.js"></script>
    <script language="javascript">
        $(document).ready(web_obj.page_init);
        var links=new Array('/api/197196ec4a/web/index/');
    </script>
    <style>
        .flex-control-nav {
            display: none;
        }
    </style>
</head>

<body scroll=no style="overflow:hidden">
<div id="web_page_contents_loading"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/images/loading.gif"></div><div id="header" class="wrap" style="display: none;">
    <ul>
        <li class="home first" style="width: 33.33233333333334%;"><a href="<?php echo Yii::app()->request->baseUrl.'/W/I/sid/'.$webData->uid; ?>" target="_self"></a></li>
        <li class="back" style="width: 33.33233333333334%;"><a href="javascript:;" target="_self"></a></li>
        <li class="lbs" style="width: 33.33233333333334%;">
            <a ajax_url="/api/197196ec4a/web/lbs/" target="_self" href="http://www.ptweixin.com/api/197196ec4a/web/lbs/"></a>
        </li>
    </ul>
</div><div id="web_page_contents"><link href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/css/flexslider.css" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/css/index.css" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/resource/css/index_media.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/flexslider.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/resource/js/index.js"></script>
    <script language="javascript">
        var web_skin_data=[{"PId":"63296","SId":"39","TradeId":"0","MemberId":"193","ContentsType":"1","Title":"[\"\"]","ImgPath":"[\"\\\/api\\\/web\\\/skin\\\/037\\\/images\\\/0\\\/banner.jpg\"]","Url":"[\"\\\/api\\\/197196ec4a\\\/web\\\/\"]","Postion":"t01","Width":"640","Height":"1010","NeedLink":"0"},{"PId":"63297","SId":"39","TradeId":"0","MemberId":"193","ContentsType":"0","Title":"品牌服务","ImgPath":"\/api\/web\/skin\/037\/images\/0\/i0.png","Url":"\/api\/197196ec4a\/web\/","Postion":"t02","Width":"160","Height":"160","NeedLink":"1"},{"PId":"63298","SId":"39","TradeId":"0","MemberId":"193","ContentsType":"0","Title":"功能介绍","ImgPath":"\/api\/web\/skin\/037\/images\/0\/i1.png","Url":"\/api\/197196ec4a\/web\/","Postion":"t03","Width":"160","Height":"160","NeedLink":"1"},{"PId":"63299","SId":"39","TradeId":"0","MemberId":"193","ContentsType":"0","Title":"关于我们","ImgPath":"\/api\/web\/skin\/037\/images\/0\/i2.png","Url":"\/api\/197196ec4a\/web\/","Postion":"t04","Width":"160","Height":"160","NeedLink":"1"},{"PId":"63300","SId":"39","TradeId":"0","MemberId":"193","ContentsType":"0","Title":"体验预约","ImgPath":"\/api\/web\/skin\/037\/images\/0\/i3.png","Url":"\/api\/197196ec4a\/web\/","Postion":"t05","Width":"160","Height":"160","NeedLink":"1"},{"PId":"63301","SId":"39","TradeId":"0","MemberId":"193","ContentsType":"0","Title":"会员卡","ImgPath":"\/api\/web\/skin\/037\/images\/0\/i4.png","Url":"\/api\/197196ec4a\/web\/","Postion":"t06","Width":"160","Height":"160","NeedLink":"1"},{"PId":"63302","SId":"39","TradeId":"0","MemberId":"193","ContentsType":"0","Title":"联系我们","ImgPath":"\/api\/web\/skin\/037\/images\/0\/i5.png","Url":"\/api\/197196ec4a\/web\/","Postion":"t07","Width":"160","Height":"160","NeedLink":"1"}];
        var MusicPath='';
        $(document).ready(index_obj.index_init);
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                animationLoop: true ,
                directionNav: false
            });
        });
    </script><script type="text/javascript">
        var skin_index_init=function(){
            $('#header,#footer, #footer_points, #support').hide();//, #footer, #footer_points, #support
            $('a').filter('[ajax_url]').off().each(function(){
                $(this).attr('href', $(this).attr('ajax_url'));
            });
            $('#web_skin_index .banner *').not('img').height($(window).height());
        };
    </script>
    <div id="web_skin_index">
        <div class="web_skin_index_list banner" rel="edit-t01">
            <div class="img" style="height: 606px;">
                <div class="slider" style="height: 606px;"><div class="flexslider" style="height: 606px;">
                        <ul class="slides" style="height: 606px;">
                            <?php foreach($sliderdata as $k=>$v): ?>
                                <li style="display: list-item;">
                                    <a href="<?php echo $v['link']; ?>" target="_self">
                                        <img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo $v['pic']; ?>" alt="">
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul></div></div></div>
        </div>

        <?php
        $p1 = explode('_',CJSON::decode($webNavData->p1,false)->linkid);
        $p2 = explode('_',CJSON::decode($webNavData->p2,false)->linkid);
        $p3 = explode('_',CJSON::decode($webNavData->p3,false)->linkid);
        $p4 = explode('_',CJSON::decode($webNavData->p4,false)->linkid);
        $p5 = explode('_',CJSON::decode($webNavData->p5,false)->linkid);
        $p6 = explode('_',CJSON::decode($webNavData->p6,false)->linkid);
        ?>

        <div class="web_contents">
            <div class="box">
                <ul>
                    <li>
                        <div class="web_skin_index_list item" rel="edit-t02">
                            <div class="img"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p1[0]).'wapwei/I/id/'.strtoupper($p1[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo CJSON::decode($webNavData->p1,false)->pic;  ?>"></a></div>
                        </div>
                    </li>
                    <li>
                        <div class="web_skin_index_list item" rel="edit-t03">
                            <div class="img"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p2[0]).'wapwei/I/id/'.strtoupper($p2[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo CJSON::decode($webNavData->p2,false)->pic;  ?>"></a></div>
                        </div>
                    </li>
                    <li>
                        <div class="web_skin_index_list item" rel="edit-t04">
                            <div class="img"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p3[0]).'wapwei/I/id/'.strtoupper($p3[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo CJSON::decode($webNavData->p3,false)->pic;  ?>"></a></div>
                        </div>
                    </li>
                    <li>
                        <div class="web_skin_index_list item" rel="edit-t05">
                            <div class="img"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p4[0]).'wapwei/I/id/'.strtoupper($p4[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo CJSON::decode($webNavData->p4,false)->pic;  ?>"></a></div>
                        </div>
                    </li>
                    <li>
                        <div class="web_skin_index_list item" rel="edit-t06">
                            <div class="img"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p5[0]).'wapwei/I/id/'.strtoupper($p5[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo CJSON::decode($webNavData->p5,false)->pic;  ?>"></a></div>
                        </div>
                    </li>

                    <li>
                        <div class="web_skin_index_list item" rel="edit-t07">
                            <div class="img"><a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo strtoupper($p6[0]).'wapwei/I/id/'.strtoupper($p6[1]).'/sid/'.$webData->uid.'/f/'.$openid;?>" target="_self"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo CJSON::decode($webNavData->p6,false)->pic;  ?>"></a></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div><div id="footer_points" style="display: none;"></div>
<footer id="footer" style="display: none;">
    <!--
    <ul>
        <li class="first" style="width: 24.999%;">
            <a href="./爱佳陶瓷_files/爱佳陶瓷.htm" target="_self"><img src="./爱佳陶瓷_files/nav-dot.png">关于爱佳</a>
        </li>
        <li class="" style="width: 24.999%;">
            <a href="./爱佳陶瓷_files/爱佳陶瓷.htm" target="_self"><img src="./爱佳陶瓷_files/nav-dot.png">微官网</a>
        </li>
        <li class="" style="width: 24.999%;">
            <a href="http://www.ptweixin.com/api/197196ec4a/shop/?wxref=mp.weixin.qq.com" target="_self"><img src="./爱佳陶瓷_files/nav-dot.png">微商城</a>
        </li>
        <li class="" style="width: 24.999%;">
            <a ajax_url="/api/197196ec4a/web/lbs/" target="_self" href="http://www.ptweixin.com/api/197196ec4a/web/lbs/"><img src="./爱佳陶瓷_files/nav-dot.png">联系爱佳</a>
        </li>
    </ul>
    -->
</footer>

<div style="position: absolute; z-index: 10000; color: rgb(255, 0, 0); bottom: 221.05366412431655px; left: 1310px;">.<span style="position: absolute; font-size: 6.82606817087993px; left: 70.83213766838026px; top: 0px; color: rgb(0, 255, 0);">*</span><i style="position: absolute; left: 64.66999999999996px; top: 0px; color: rgb(51, 0, 255); font-size: 6.553025444044732px;">*</i><a style="position: absolute; left: 43.11333333333333px; top: 0px; color: rgb(255, 0, 153); font-size: 6.553025444044732px;">*</a><span style="position: absolute; font-size: 6.82606817087993px; left: 46.771643983076366px; top: -53.194032050529216px; color: rgb(255, 0, 153);">*</span><i style="position: absolute; left: 42.70268152214464px; top: -48.56634524872426px; color: rgb(102, 0, 255); font-size: 6.553025444044732px;">*</i><a style="position: absolute; left: 28.46845434809644px; top: -32.377563499149524px; color: rgb(0, 204, 255); font-size: 6.553025444044732px;">*</a><span style="position: absolute; font-size: 6.82606817087993px; left: -9.06394168024221px; top: -70.24981628367111px; color: rgb(255, 0, 102);">*</span><i style="position: absolute; left: -8.275411808204256px; top: -64.13833845216625px; color: rgb(51, 0, 255); font-size: 6.553025444044732px;">*</i><a style="position: absolute; left: -5.516941205469506px; top: -42.75889230144419px; color: rgb(0, 0, 255); font-size: 6.553025444044732px;">*</a><span style="position: absolute; font-size: 6.82606817087993px; left: -58.741788251104076px; top: -39.58022283584094px; color: rgb(0, 255, 0);">*</span><i style="position: absolute; left: -53.63146689125989px; top: -36.136887789234px; color: rgb(51, 0, 255); font-size: 6.553025444044732px;">*</i><a style="position: absolute; left: -35.75431126083995px; top: -24.091258526156015px; color: rgb(255, 0, 204); font-size: 6.553025444044732px;">*</a><span style="position: absolute; font-size: 6.82606817087993px; left: -68.51242682843743px; top: 17.978851374611775px; color: rgb(153, 0, 255);">*</span><i style="position: absolute; left: -62.55209554367194px; top: 16.414756869820874px; color: rgb(0, 255, 153); font-size: 6.553025444044732px;">*</i><a style="position: absolute; left: -41.701397029114645px; top: 10.943171246547255px; color: rgb(255, 0, 255); font-size: 6.553025444044732px;">*</a><span style="position: absolute; font-size: 6.82606817087993px; left: -31.738012063230347px; top: 63.32369475122734px; color: rgb(153, 255, 0);">*</span><i style="position: absolute; left: -28.976920755073415px; top: 57.81476423504804px; color: rgb(0, 102, 255); font-size: 6.553025444044732px;">*</i><a style="position: absolute; left: -19.317947170048953px; top: 38.54317615669871px; color: rgb(204, 255, 0); font-size: 6.553025444044732px;">*</a><span style="position: absolute; font-size: 6.82606817087993px; left: 26.59814752483109px; top: 65.64853596935498px; color: rgb(0, 255, 255);">*</span><i style="position: absolute; left: 24.284205687592653px; top: 59.937352745368116px; color: rgb(0, 0, 255); font-size: 6.553025444044732px;">*</i><a style="position: absolute; left: 16.18947045839511px; top: 39.95823516357877px; color: rgb(153, 0, 255); font-size: 6.553025444044732px;">*</a><span style="position: absolute; font-size: 6.82606817087993px; left: 66.86441450120414px; top: 23.373955593427798px; color: rgb(102, 0, 255);">*</span><i style="position: absolute; left: 61.04745427898012px; top: 21.34050669632347px; color: rgb(255, 0, 102); font-size: 6.553025444044732px;">*</i><a style="position: absolute; left: 40.698302852653434px; top: 14.227004464215653px; color: rgb(255, 102, 0); font-size: 6.553025444044732px;">*</a><span style="position: absolute; font-size: 6.82606817087993px; left: 61.705232639374614px; top: -34.78010913716388px; color: rgb(153, 0, 255);">*</span><i style="position: absolute; left: 56.33710242476162px; top: -31.754366477413992px; color: rgb(102, 0, 255); font-size: 6.553025444044732px;">*</i><a style="position: absolute; left: 37.55806828317443px; top: -21.16957765160934px; color: rgb(51, 255, 0); font-size: 6.553025444044732px;">*</a><span style="position: absolute; font-size: 6.82606817087993px; left: 14.625577694529902px; top: -69.30572994907162px; color: rgb(0, 255, 0);">*</span><i style="position: absolute; left: 13.353205771276237px; top: -63.27638418580782px; color: rgb(0, 255, 255); font-size: 6.553025444044732px;">*</i><a style="position: absolute; left: 8.90213718085083px; top: -42.184256123871904px; color: rgb(255, 0, 153); font-size: 6.553025444044732px;">*</a><span style="position: absolute; font-size: 6.82606817087993px; left: -42.39020600053456px; top: -56.747353787684375px; color: rgb(0, 255, 102);">*</span><i style="position: absolute; left: -38.70241266597166px; top: -51.810540952906784px; color: rgb(0, 255, 255); font-size: 6.553025444044732px;">*</i><a style="position: absolute; left: -25.80160844398112px; top: -34.540360635271206px; color: rgb(0, 102, 255); font-size: 6.553025444044732px;">*</a><span style="position: absolute; font-size: 6.82606817087993px; left: -70.60750027065278px; top: -5.636721760220348px; color: rgb(255, 0, 0);">*</span><i style="position: absolute; left: -64.46490523667303px; top: -5.146347522929212px; color: rgb(153, 255, 0); font-size: 6.553025444044732px;">*</i><a style="position: absolute; left: -42.976603491115384px; top: -3.4308983486194764px; color: rgb(0, 153, 255); font-size: 6.553025444044732px;">*</a><span style="position: absolute; font-size: 6.82606817087993px; left: -50.85641831158631px; top: 49.30331067169142px; color: rgb(51, 0, 255);">*</span><i style="position: absolute; left: -46.43209538032135px; top: 45.01410244126539px; color: rgb(255, 255, 0); font-size: 6.553025444044732px;">*</i><a style="position: absolute; left: -30.954730253547584px; top: 30.00940162751028px; color: rgb(51, 255, 0); font-size: 6.553025444044732px;">*</a><span style="position: absolute; font-size: 6.82606817087993px; left: 3.4448148054715055px; top: 70.74832137675337px; color: rgb(255, 153, 0);">*</span><i style="position: absolute; left: 3.145128479855131px; top: 64.59347542008557px; color: rgb(255, 0, 0); font-size: 6.553025444044732px;">*</i><a style="position: absolute; left: 2.0967523199034215px; top: 43.06231694672373px; color: rgb(255, 255, 0); font-size: 6.553025444044732px;">*</a><span style="position: absolute; font-size: 6.82606817087993px; left: 55.405755857305145px; top: 44.12928669889272px; color: rgb(255, 0, 255);">*</span><i style="position: absolute; left: 50.58565714996664px; top: 40.29019968560621px; color: rgb(102, 0, 255); font-size: 6.553025444044732px;">*</i><a style="position: absolute; left: 33.723771433311114px; top: 26.86013312373749px; color: rgb(0, 102, 255); font-size: 6.553025444044732px;">*</a><span style="position: absolute; font-size: 6.82606817087993px; left: 69.72587784547028px; top: -12.469710716409148px; color: rgb(255, 0, 204);">*</span><i style="position: absolute; left: 63.65998074740405px; top: -11.384891358293235px; color: rgb(0, 51, 255); font-size: 6.553025444044732px;">*</i><a style="position: absolute; left: 42.439987164936056px; top: -7.589927572195494px; color: rgb(0, 51, 255); font-size: 6.553025444044732px;">*</a><span style="position: absolute; font-size: 6.82606817087993px; left: 36.6765684193944px; top: -60.59720336492316px; color: rgb(153, 0, 255);">*</span><i style="position: absolute; left: 33.485840718048074px; top: -55.325467656455544px; color: rgb(255, 0, 255); font-size: 6.553025444044732px;">*</i><a style="position: absolute; left: 22.323893812032065px; top: -36.88364510430372px; color: rgb(0, 255, 0); font-size: 6.553025444044732px;">*</a><span style="position: absolute; font-size: 6.82606817087993px; left: -21.28957598870369px; top: -67.55698099303717px; color: rgb(153, 255, 0);">*</span><i style="position: absolute; left: -19.43746051594987px; top: -61.679770011656856px; color: rgb(0, 255, 255); font-size: 6.553025444044732px;">*</i><a style="position: absolute; left: -12.958307010633254px; top: -41.11984667443793px; color: rgb(0, 102, 255); font-size: 6.553025444044732px;">*</a><span style="position: absolute; font-size: 6.82606817087993px; left: -64.79229389294046px; top: -28.62080325153722px; color: rgb(51, 255, 0);">*</span><i style="position: absolute; left: -59.15560060708067px; top: -26.13089774224283px; color: rgb(0, 51, 255); font-size: 6.553025444044732px;">*</i><a style="position: absolute; left: -39.43706707138714px; top: -17.420598494828564px; color: rgb(0, 51, 255); font-size: 6.553025444044732px;">*</a><span style="position: absolute; font-size: 6.82606817087993px; left: -64.27729245723523px; top: 29.759391812324115px; color: rgb(0, 255, 0);">*</span><i style="position: absolute; left: -58.68540241818817px; top: 27.170433250415954px; color: rgb(255, 0, 0); font-size: 6.553025444044732px;">*</i><a style="position: absolute; left: -39.12360161212547px; top: 18.11362216694398px; color: rgb(0, 255, 0); font-size: 6.553025444044732px;">*</a></div></body></html>