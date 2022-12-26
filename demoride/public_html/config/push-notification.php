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
        'apiKey'      => env('ANDROID_PUSH_KEY', 'AAAAKB5GiOE:APA91bGVRAI-Al04AbT8xwW6UsF_Q6tc6C5JJdPDdDbK5fH1KNlY9EnTZqH1x1LHk5fv3GF4mn28dN3ZRPj_bmV6g2evfu3CspxyBCd_LxaJWcOSwTwWrb_2AdSMzTHzu3yUys7zQxU9'),
        'service'     => 'fcm'
    ),
);