<?php

use HuberwayCMS\ACL\Models\User;

return [
    'provider' => [
        'model' => User::class,
        'guard' => 'web',
        'password_broker' => 'users',
        'verify_email' => false,
    ],
];
