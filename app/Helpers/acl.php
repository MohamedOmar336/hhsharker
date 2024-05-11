<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    |
    | All ACLs related to dashboard will be placed here.
    |
    */
    [
        'key'   => 'dashboard',
        'name'  => 'app.acl.dashboard',
        'route' => 'home',
        'sort'  => 1,
    ],

    /*
    |--------------------------------------------------------------------------
    | Products
    |--------------------------------------------------------------------------
    |
    | All ACLs related to products will be placed here.
    |
    */
    [
        'key'   => 'products',
        'name'  => 'app.acl.products',
        'route' => 'products.index',
        'sort'  => 2,
    ], [
        'key'   => 'products.create',
        'name'  => 'app.acl.create',
        'route' => 'products.create',
        'sort'  => 2,
    ],[
        'key'   => 'products.edit',
        'name'  => 'app.acl.edit',
        'route' => 'products.edit',
        'sort'  => 3,
    ], [
        'key'   => 'products.delete',
        'name'  => 'app.acl.delete',
        'route' => 'products.delete',
        'sort'  => 4,
    ], [
        'key'   => 'categories',
        'name'  => 'app.acl.categories',
        'route' => 'categories.index',
        'sort'  => 2,
    ], [
        'key'   => 'categories.create',
        'name'  => 'app.acl.create',
        'route' => 'categories.create',
        'sort'  => 1,
    ], [
        'key'   => 'categories.edit',
        'name'  => 'app.acl.edit',
        'route' => 'categories.edit',
        'sort'  => 2,
    ], [
        'key'   => 'categories.delete',
        'name'  => 'app.acl.delete',
        'route' => 'categories.delete',
        'sort'  => 3,
    ],

    /*
    |--------------------------------------------------------------------------
    | User , Roles and Permissions
    |--------------------------------------------------------------------------
    |
    | All ACLs related to settings will be placed here.
    |
    */
    [
        'key'   => 'users',
        'name'  => 'app.acl.settings',
        'route' => 'admin.users.index',
        'sort'  => 8,
    ], [
        'key' => 'users',
        'name' => 'app.items.users',
        'route' => 'admin.users.index',
        'sort' => 5,
    ], [
        'key' => 'users.create',
        'name' => 'app.acl.create',
        'route' => 'admin.users.create',
        'sort' => 1,
    ], [
        'key' => 'users.edit',
        'name' => 'app.acl.edit',
        'route' => 'admin.users.edit',
        'sort' => 2,
    ], [
        'key' => 'users.delete',
        'name' => 'app.acl.delete',
        'route' => 'admin.users.delete',
        'sort' => 3,
    ], [
        'key' => 'roles',
        'name' => 'app.users.roles.title',
        'route' => 'admin.roles.index',
        'sort' => 5,
    ], [
        'key' => 'roles.create',
        'name' => 'app.acl.create',
        'route' => 'admin.roles.create',
        'sort' => 1,
    ], [
        'key' => 'roles.edit',
        'name' => 'app.acl.edit',
        'route' => 'admin.roles.edit',
        'sort' => 2,
    ], [
        'key' => 'roles.delete',
        'name' => 'app.acl.delete',
        'route' => 'admin.roles.delete',
        'sort' => 3,
    ]
];
