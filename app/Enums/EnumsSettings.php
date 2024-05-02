<?php

namespace App\Enums;

class EnumsSettings
{
    const Paginate = 10;
    const limit = 10;
    const ExpiredMinutes = 15;
    const abilities = ['view', 'add', 'edit', 'delete', 'restore', 'forceDelete'];

    const ability = [
        'index' => 'view',
        'edit' => 'edit',
        'show' => 'view',
        'update' => 'edit',
        'create' => 'add',
        'store' => 'add',
        'destroy' => 'delete',
        'restore' => 'restore',
        'forceDelete' => 'forceDelete',
    ];
    const firebase = [
        'server_key' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'
    ];
}
