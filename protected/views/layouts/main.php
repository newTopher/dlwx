<?php /* @var $this Controller */ ?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- blueprint CSS framework -->
    <script src="<?php echo Yii::app()->getBaseUrl(); ?>/js/jquery-1.7.2.min.js"></script>
    <link id="bs-css" href="<?php echo Yii::app()->getBaseUrl(); ?>/css/bootstrap-cerulean.css" rel="stylesheet">
    <style type="text/css">
        body {
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }
    </style>

    <link href="<?php echo Yii::app()->getBaseUrl(); ?>/css/charisma-app.css" rel="stylesheet">
    <link href='<?php echo Yii::app()->getBaseUrl(); ?>/css/uniform.default.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->getBaseUrl(); ?>/css/notifIt.css' rel='stylesheet'>
</head>

<body>


<?php echo $content;?>


</body>
</html>
