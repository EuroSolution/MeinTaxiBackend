<?php

return array(

    'IOSUser'     => array(
        'environment' => env('IOS_USER_ENV', 'development'),
        'certificate' => app_path().'/apns/user/tranxit_user_live.pem',
        'passPhrase'  => env('IOS_USER_PUSH_PASS', 'appoets123$'),
        'service'     => 'apns'
    ),
    'IOSProvider' => array(
        'environment' => env('IOS_PROVIDER_ENV', 'development'),
        'certificate' => app_path().'/apns/provider/tranxit_provider_live.pem',
        'passPhrase'  => env('IOS_PROVIDER_PUSH_PASS', 'appoets123$'),
        'service'     => 'apns'
    ),
    'Android' => array(
        'environment' => env('ANDROID_ENV', 'production'),
        'apiKey'      => env('ANDROID_PUSH_KEY', 'AAAAomOznTU:APA91bG5TV9xZHAAyH3gzmC569sPjkD0paxdjbexFypH0IEbOgwsHyrLo9S7OjTo4CJoeF8FGsJKEYr7dWjjp6vwq0S2cvanHHa5TVdSY2yyKwckZtdk29UKKoNc9iLbFN_tpz2zIyWa'),
        'service'     => 'fcm'
    ),
);