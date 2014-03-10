<?php /* @var $this Controller */ ?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- blueprint CSS framework -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.7.2.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.form.js"></script>
    <link id="bs-css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-cerulean.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/uploadify.css"></script>
    <style type="text/css">

        .sidebar-nav {
            padding: 9px 0;
        }
    </style>

    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/charisma-app.css" rel="stylesheet">
    <link href='<?php echo Yii::app()->request->baseUrl; ?>/css/uniform.default.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->request->baseUrl; ?>/css/notifIt.css' rel='stylesheet'>
</head>

<body>


<?php  echo $content;?>


</body>
</html>
