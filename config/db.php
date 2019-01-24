<?php
if ($_SERVER['SERVER_NAME'] != 'new.geco.test') {
    $db = [
        'dsn' => 'mysql:host=localhost;dbname=geco.uz',
        'username' => 'geco',
        'password' => 'KDws8hyxHmWKBaxf',
    ];
} else {
    $db = [
        'dsn' => 'mysql:host=localhost;dbname=new_geco',
        'username' => 'root',
        'password' => '123',
    ];
}

$settings = [
    'class' => 'yii\db\Connection',
    'charset' => 'utf8mb4',

    // Schema cache options (for production environment)
    'enableSchemaCache' => true,
    'schemaCacheDuration' => 60,
    'schemaCache' => 'cache',
];

return \yii\helpers\ArrayHelper::merge($settings, $db);
