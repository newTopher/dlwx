<?php
return array(
    /** 默认数据库 */
    'db'=>array(
        'connectionString' => 'mysql:host=localhost;dbname=wapwei',
        'emulatePrepare' => true,
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
        'tablePrefix'=>''
    ),
    'wxfood'=>array(
        'connectionString' => 'mysql:host=localhost;dbname=wxfood',
        'emulatePrepare' => false,
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
        'tablePrefix'=>''
    ),
);