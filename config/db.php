<?php

return [
    'class' => 'yii\db\Connection',
//    'dsn' => 'mysql:host=127.0.0.1;dbname=new_geco',
    'dsn' => 'mysql:host=localhost;dbname=geco.uz',
    'username' => 'geco',
    'password' => 'KDws8hyxHmWKBaxf',
    'charset' => 'utf8mb4',

    // Schema cache options (for production environment)
    'enableSchemaCache' => true,
    'schemaCacheDuration' => 60,
    'schemaCache' => 'cache',
];
