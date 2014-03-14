<!DOCTYPE html>
<!-- saved from url=(0117)http://www.ptweixin.com/api/7231634c2a/businesscard/detail/1081/?wxref=mp.weixin.qq.com&from=message&isappinstalled=0 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="telephone=no" name="format-detection">
    <title><?php echo $list->name?$list->name:'';?>的微名片</title>
    <link href="<?php echo Yii::app()->request->baseUrl;?>/js/callingcard/global.css" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::app()->request->baseUrl;?>/js/callingcard/businesscard.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/callingcard/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/callingcard/global.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/callingcard/businesscard.js"></script>
    <script language="javascript">$(document).ready(businesscard_obj.businesscard_init);</script>
</head>
<?php if(!empty($list->background_path)):?>
<body style="background:url('<?php echo Yii::app()->request->baseUrl.'/upload/slider/'.$list->background_path;?>') no-repeat;">
<?php else:?>
<body>
<?php endif;?>
<div id="businesscard">
    <div class="logo"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/slider/<?php echo $list->head_image_path;?>"></div>
    <div class="toper">
        <h1><?php echo $list->name;?></h1>
        <label><?php echo $list->job;?></label>
        <div class="clear"></div>
    </div>
    <ul>
        <li class="t"></li>
        <li class="c">
            <dl>
                <dt><?php echo $list->company;?></dt>
                <dd class="bn"><label><img src="<?php echo Yii::app()->request->baseUrl;?>/js/callingcard/phone.jpg"></label><a href="tel:<?php echo $list->mobilephone?$list->mobilephone:'';?>"><?php echo $list->mobilephone?$list->mobilephone:'';?></a></dd>
                <dd><label><img src="<?php echo Yii::app()->request->baseUrl;?>/js/callingcard/tel.jpg"></label><a href="tel:<?php echo $list->tel1?$list->tel1:'';?>"><?php echo $list->tel1?$list->tel1:'';?></a></dd>
                <dd><label><img src="<?php echo Yii::app()->request->baseUrl;?>/js/callingcard/fax.jpg"></label><a href="tel:<?php echo $list->tel2?$list->tel2:'';?>"><?php echo $list->tel2?$list->tel2:'';?></a></dd>
                <dd><label><img src="<?php echo Yii::app()->request->baseUrl;?>/js/callingcard/qq.jpg"></label><?php echo $list->qq?$list->qq:'';?></dd>
                <dd><label><img src="<?php echo Yii::app()->request->baseUrl;?>/js/callingcard/mail.jpg"></label><?php echo $list->email?$list->email:'';?></dd>
                <dd><label><img src="<?php echo Yii::app()->request->baseUrl;?>/js/callingcard/e.jpg"></label><?php echo $list->website?$list->website:'';?></dd>
                <dd><label><img src="<?php echo Yii::app()->request->baseUrl;?>/js/callingcard/locate.jpg"></label><?php echo $list->address?$list->address:'';?></dd>
            </dl>
        </li>
        <li class="b"></li>
    </ul>
    <div class="bottom">
        <?php $a=json_decode($list->nav_data);?>
        <a href="<?php echo Yii::app()->request->baseUrl.'/W/I/sid/'.$list->uid;?>"><?php echo $a[0]?$a[0]:'进入微网站';?></a>
        <a href="#share"><?php echo $a[1]?$a[1]:'分享给好友'?></a>
        <a href="tel:<?php echo $list->mobilephone?$list->mobilephone:$list->tel1;?>"><?php echo $a[2]?$a[2]:'招商加盟';?></a>
    </div>
</div>
<div id="share"><img src="<?php Yii::app()->request->baseUrl;?>/js/callingcard/share.png"></div>

</body>
</html>