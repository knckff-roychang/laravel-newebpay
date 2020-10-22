<?php
return [
    'env' => env('NEWEBPAY_ENV', 'dev'),
    'merchant_id' => env('NEWEBPAY_MERCHANT_ID', ''),
    'hash_key' => env('NEWEBPAY_HASH_KEY', ''),
    'hash_iv' => env('NEWEBPAY_HASH_IV', ''),
    'customer_blade' => env('NEWEBPAY_CUSTOMER_BLADE', ''),
];
