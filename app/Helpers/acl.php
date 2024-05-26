<?php

return [

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
        'route' => 'users.index',
        'sort'  => 8,
    ], [
        'key' => 'users',
        'name' => 'app.items.users',
        'route' => 'users.index',
        'sort' => 5,
    ], [
        'key' => 'users.create',
        'name' => 'app.acl.create',
        'route' => 'users.create',
        'sort' => 1,
    ], [
        'key' => 'users.edit',
        'name' => 'app.acl.edit',
        'route' => 'users.edit',
        'sort' => 2,
    ], [
        'key' => 'users.delete',
        'name' => 'app.acl.delete',
        'route' => 'users.delete',
        'sort' => 3,
    ], [
        'key' => 'roles',
        'name' => 'app.users.roles.title',
        'route' => 'roles.index',
        'sort' => 5,
    ], [
        'key' => 'roles.create',
        'name' => 'app.acl.create',
        'route' => 'roles.create',
        'sort' => 1,
    ], [
        'key' => 'roles.edit',
        'name' => 'app.acl.edit',
        'route' => 'roles.edit',
        'sort' => 2,
    ], [
        'key' => 'roles.delete',
        'name' => 'app.acl.delete',
        'route' => 'roles.delete',
        'sort' => 3,
    ], [
        'key' => 'blogs',
        'name' => 'app.users.blogs.title',
        'route' => 'blogs.index',
        'sort' => 5,
    ], [
        'key' => 'blogs.create',
        'name' => 'app.acl.create',
        'route' => 'blogs.create',
        'sort' => 1,
    ], [
        'key' => 'blogs.edit',
        'name' => 'app.acl.edit',
        'route' => 'blogs.edit',
        'sort' => 2,
    ], [
        'key' => 'blogs.delete',
        'name' => 'app.acl.delete',
        'route' => 'blogs.delete',
        'sort' => 3,
    ], [
        'key' => 'contacts',
        'name' => 'app.users.contacts.title',
        'route' => 'contacts.index',
        'sort' => 5,
    ], [
        'key' => 'contacts.create',
        'name' => 'app.acl.create',
        'route' => 'contacts.create',
        'sort' => 1,
    ], [
        'key' => 'contacts.edit',
        'name' => 'app.acl.edit',
        'route' => 'contacts.edit',
        'sort' => 2,
    ], [
        'key' => 'contacts.delete',
        'name' => 'app.acl.delete',
        'route' => 'contacts.delete',
        'sort' => 3,
    ], [
        'key' => 'tickets',
        'name' => 'app.users.tickets.title',
        'route' => 'tickets.index',
        'sort' => 5,
    ], [
        'key' => 'tickets.create',
        'name' => 'app.acl.create',
        'route' => 'tickets.create',
        'sort' => 1,
    ], [
        'key' => 'tickets.edit',
        'name' => 'app.acl.edit',
        'route' => 'tickets.edit',
        'sort' => 2,
    ], [
        'key' => 'tickets.delete',
        'name' => 'app.acl.delete',
        'route' => 'tickets.delete',
        'sort' => 3,
    ]
];
