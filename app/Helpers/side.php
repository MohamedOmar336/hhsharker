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
        'title' => __('general.side.mails'),
        'link' => 'sidebarMails',
        'icon' => 'ti ti-mail',
        'route' => 'mails.index',
        'sub_menu' => [
            [
                'title' => __('general.side.inbox'),
                'route' => 'mails.index',
            ],
            [
                'title' => __('general.actions.compose'),
                'route' => 'mails.compose',
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
    [
        'title' => __('general.attributes.contacts'),
        'link' => 'sidebarContacts',
        'icon' => 'ti ti-book',
        'route' => 'contacts.index',
        'sub_menu' => [
            [
                'title' => __('general.side.contacts-list'),
                'route' => 'contacts.index',
            ],
            [
                'title' => __('general.actions.new'),
                'route' => 'contacts.create',
            ],
        ],
    ],[
        'title' => __('general.side.tickets'),
        'link' => 'sidebartickets',
        'icon' => 'ti ti-book',
        'route' => 'tickets.index',
        'sub_menu' => [
            [
                'title' => __('general.side.tickets-list'),
                'route' => 'tickets.index',
            ],
            [
                'title' => __('general.actions.new'),
                'route' => 'tickets.create',
            ],
        ],
    ],[
        'title' => __('general.attributes.status'),
        'link' => 'sidebarstatus',
        'icon' => 'ti ti-book',
        'route' => 'ticket-statuses.index',
        'sub_menu' => [
            [
                'title' => __('general.side.status-list'),
                'route' => 'ticket-statuses.index',
            ],
            [
                'title' => __('general.actions.new'),
                'route' => 'ticket-statuses.create',
            ],
        ],
    ],[
        'title' => __('general.attributes.priorities'),
        'link' => 'sidebarpriorities',
        'icon' => 'ti ti-book',
        'route' => 'ticket-priorities.index',
        'sub_menu' => [
            [
                'title' => __('general.side.priorities-list'),
                'route' => 'ticket-priorities.index',
            ],
            [
                'title' => __('general.actions.new'),
                'route' => 'ticket-statuses.create',
            ],
        ],
    ],[
        'title' => __('general.side.logs'),
        'link' => 'sidebarLogs',
        'icon' => 'ti ti-book',
        'route' => 'activitylogs.index',
        'sub_menu' => [
            [
                'title' => __('general.side.logs-list'),
                'route' => 'activitylogs.index',
            ]
        ],
    ]
];
