<?php
return array(
    /** 默认数据库 */
    'db'=>array(
        'class'=>'CDbConnection',
        'connectionString' => 'mysql:host=localhost;dbname=wapwei',
        'emulatePrepare' => true,
        'username' => 'root',
        'password' => '09270815',
        'charset' => 'utf8',
        'tablePrefix'=>''
    ),
    'weixinshop'=>array(
        'class'=>'CDbConnection',
        'connectionString' => 'mysql:host=localhost;dbname=weixinshop',
        'emulatePrepare' => true,
        'username' => 'root',
        'password' => '09270815',
        'charset' => 'utf8',
        'tablePrefix'=>''
    ),
);