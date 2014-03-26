<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

$config = array(
    'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'name'=>'万普微盟微信公众号云平台',
    // preloading 'log' component
    'preload'=>array('log'),
    // autoloading model and component classes
    'import'=>array(
        'application.models.*',
        'application.components.*',
        'application.utils.*',
        'application.extensions.image.*',
        'application.extensions.helpers.*',
        'application.weixin.*',
    ),
    'defaultController'=>"Index",
    'modules'=>array(
        // uncomment the following to enable the Gii tool
        /*
        'gii'=>array(
            'class'=>'system.gii.GiiModule',
            'password'=>'123456',
            // If removed, Gii defaults to localhost only. Edit  carefullyto taste.
            'ipFilters'=>array('127.0.0.1','::1'),
        ),
        */
        'wxfood'
    ),

    // application components
    'components'=>array(
        'user'=>array(
            // enable cookie-based authentication
            'allowAutoLogin'=>true,
        ),
        // uncomment the following to enable URLs in path-format
        'session'=>array(
            'autoStart'=>true,
            'sessionName'=>'user'
        ),
        'urlManager'=>array(
            'urlFormat'=>'path',
            'showScriptName'=>false,
            'rules'=>array(
                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ),
        ),
        /*
        'db'=>array(
            'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
        ),
        */
        // uncomment the following to use a MySQL database
        /**/


        'image'=>array(
            'class'=>'application.extensions.image.CImageComponent',
            // GD or ImageMagick
            'driver'=>'GD',
            // ImageMagick setup path
        ),
        'captcha'=>array(
            'class'=>'application.web.widgets.captcha.CCaptchaAction'
            // ImageMagick setup path
        ),

        'errorHandler'=>array(
            // use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
        'log'=>array(
            'class'=>'CLogRouter',
            'routes'=>array(
                array(
                    'class'    => 'CFileLogRoute',
                    'levels'   => 'error, warning, info, trace',
                    'logFile' => 'console.log',
                ),
                // uncomment the following to show log messages on web pages
                /*
                array(
                    'class'=>'CWebLogRoute',
                ),
                */
                array(
                    'class' => 'CWebLogRoute',
                    'levels' => 'trace', //级别为trace
                    'categories' => 'system.db.*' //只显示关于数据库信息,包括数据库连接,数据库执行语句
                ),
            ),
        ),
    ),

    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params'=>array(
        // this is used in contact page
        'adminEmail'=>'webmaster@example.com',
    )

);
$database   = @include_once dirname(__FILE__).'/database.php';
if(!empty($database)){
    $config['components'] = @array_merge($config['components'], $database);
}
return $config;


