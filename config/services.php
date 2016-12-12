<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '1209488922450101',
        'client_secret' => '432280b551f8af6de95bd9dcfa236bd3',
        'redirect' => 'http://testvocacional.tk/auth/facebook/callback',
    ],

    'twitter' => [
        'client_id' => 'tERFsTNgpBC0ai98qbG7JvFZU',
        'client_secret' => 'EWh6hTN5rdNesROuT6MlWUtkmD2HUfupgka3vBRA2Z3tBz33W9',
        'redirect' => 'http://testvocacional.tk/auth/twitter/callback',
    ],

    'google' => [
        'client_id' => '476932156832-rrkevhc4imflm8ba6m4rmb6pb9umdki7.apps.googleusercontent.com',
        'client_secret' => 'k1L0Z0fz9KOpzWNq-OtEdq7F',
        'redirect' => 'http://testvocacional.tk/auth/google/callback',
    ],

];
