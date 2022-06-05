<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'name' => 'Movie Space',
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'site/index', 
                'about' => 'site/about',  
                'schedule' => 'site/schedule',
                'discounts' => 'site/discounts', 
                'contact' => 'site/contact',
                'signup' => 'site/signup',
                'login' => 'site/login',
                'red_notice|film1' => 'site/film1',
                'secrets_dumbledore|film2' => 'site/film2',
                'doctor_strange|film3' => 'site/film3',
                'brave|film4' => 'site/film4',
                'lion_king|film5' => 'site/film5',
                'raya|film6' => 'site/film6',
                'morbius|film7' => 'site/film7',
                'moonfall|film8' => 'site/film8',
                'the_lost_city|film9' => 'site/film9',


                'schedule1|schedule_red_notice' => 'site/schedule1',
                'schedule2|schedule_secrets_dumbledore' => 'site/schedule2',
                'schedule3|schedule_doctor_strange' => 'site/schedule3',
                'schedule4|schedule_brave' => 'site/schedule4',
                'schedule5|schedule_lion_king' => 'site/schedule5',
                'schedule6|schedule_raya' => 'site/schedule6',
                

                'addfeedbacks' => 'site/addfeedback',
                'userfeedbacks' => 'site/userfeedbacks',




                'test1' => 'site/test1',
                'test2' => 'site/test2',
                'test3' => 'site/test3',
                'test4' => 'site/test4',

                'account' => 'site/account',
                'question_page|questionpage' => 'site/questionpage',
                

                                           
            '<controller:\w+>/<action:\w+>/' => '<controller>/<action>',
            ],
        ],
        
    ],
    'params' => $params,
];
