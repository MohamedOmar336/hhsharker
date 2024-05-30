<?php
return [
    [
        'title' => __('general.attributes.product'),
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
    ],
    [
        'title' => __('general.side.tickets'),
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
    ],
    [
        'title' => __('general.attributes.status'),
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
    ],
    [
        'title' => __('general.attributes.priorities'),
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
    ],
    [
        'title' => __('general.side.logs'),
        'route' => 'activitylogs.index',
        'sub_menu' => [
            [
                'title' => __('general.side.logs-list'),
                'route' => 'activitylogs.index',
            ]
        ],
    ]
];