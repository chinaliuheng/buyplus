<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'OsVbfSyWdafUH_QQXW9ccu2yJ5jv-b9a',
        ],
        'db' => [
            'class' =>  'yii\db\connection',
            'dsn'   =>  'mysql:host=127.0.0.1;port=3306;character=utf8;dbname=buyplus',
            'username'  =>  'root',
            'password'  =>  '123',
        ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
