<?php /* @var $this Controller */ ?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- blueprint CSS framework -->
    <script src="<?php echo Yii::app()->getBaseUrl(); ?>/js/jquery-1.7.2.min.js"></script>
    <script src="<?php echo Yii::app()->getBaseUrl(); ?>/js/jquery.validator.js"></script>
    <link id="bs-css" href="<?php echo Yii::app()->getBaseUrl(); ?>/css/bootstrap-cerulean.css" rel="stylesheet">
    <style type="text/css">
        body {
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }
    </style>
    <link href="<?php echo Yii::app()->getBaseUrl(); ?>/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->getBaseUrl(); ?>/css/charisma-app.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->getBaseUrl(); ?>/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
    <link href='<?php echo Yii::app()->getBaseUrl(); ?>/css/fullcalendar.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->getBaseUrl(); ?>/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
    <link href='<?php echo Yii::app()->getBaseUrl(); ?>/css/chosen.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->getBaseUrl(); ?>/css/uniform.default.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->getBaseUrl(); ?>/css/colorbox.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->getBaseUrl(); ?>/css/jquery.cleditor.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->getBaseUrl(); ?>/css/jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->getBaseUrl(); ?>/css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->getBaseUrl(); ?>/css/elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->getBaseUrl(); ?>/css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->getBaseUrl(); ?>/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->getBaseUrl(); ?>/css/opa-icons.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->getBaseUrl(); ?>/css/uploadify.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->getBaseUrl(); ?>/css/jquery.validator.css' rel='stylesheet'>
</head>

<body>


<?php echo $content;?>


</body>
</html>
