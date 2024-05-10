<?php

return [
    [
        'title' => __('general.attributes.product'),
        'link' => 'sidebarEcommerce',
        'icon' => 'ti ti-shopping-cart',
        'route' => 'products.index',
        'sub_menu' => [
            [
                'title' => __('general.side.products-list'),
                'route' => 'products.index',
            ],
            [
                'title' => __('general.actions.new'),
                'route' => 'products.create',
            ],
        ],
    ],
    [
        'title' => __('general.side.categories'),
        'link' => 'sidebarCategories',
        'icon' => 'ti ti-categories',
        'route' => 'categories.index',
        'sub_menu' => [
            [
                'title' => __('general.side.categories-list'),
                'route' => 'categories.index',
            ],
            [
                'title' => __('general.actions.new'),
                'route' => 'categories.create',
            ],
        ],
    ],
    [
        'title' => __('general.attributes.user'),
        'link' => 'sidebarUsers',
        'icon' => 'ti ti-user',
        'route' => 'users.index',
        'sub_menu' => [
            [
                'title' => __('general.side.users-list'),
                'route' => 'users.index',
            ],
            [
                'title' => __('general.actions.new'),
                'route' => 'users.create',
            ],
        ],
    ],
    [
        'title' => __('general.side.tags'),
        'link' => 'sidebarTags',
        'icon' => 'ti ti-tag',
        'route' => 'tags.index',
        'sub_menu' => [
            [
                'title' => __('general.side.tags-list'),
                'route' => 'tags.index',
            ],
            [
                'title' => __('general.actions.new'),
                'route' => 'tags.create',
            ],
        ],
    ],
    [
        'title' => __('general.side.blogs'),
        'link' => 'sidebarBlogs',
        'icon' => 'ti ti-book',
        'route' => 'tags.index',
        'sub_menu' => [
            [
                'title' => __('general.side.blogs-list'),
                'route' => 'blogposts.index',
            ],
            [
                'title' => __('general.actions.new'),
                'route' => 'blogposts.create',
            ],
        ],
    ],
    [
        'title' => __('general.side.roles'),
        'link' => 'sidebarRoles',
        'icon' => 'ti ti-book',
        'route' => 'roles.index',
        'sub_menu' => [
            [
                'title' => __('general.side.roles-list'),
                'route' => 'roles.index',
            ],
            [
                'title' => __('general.actions.new'),
                'route' => 'roles.create',
            ],
        ],
    ],
];
