<?php

return [
    [
        'title' => 'Dashboard',
        'link' => 'dashboard',
        'icon' => 'ti ti-smart-home',
        'route' => 'home',
        'sub_menu' => []
    ],
    [
        'title' => 'External',
        'link' => 'external',
        'icon' => 'ti ti-planet',
        'sub_menu' => [
            [
                'title' => 'Tickets Management',
                'route' => 'tickets.index',
                'sub_menu' => []
            ],
            [
                'title' => 'Customer Interaction',
                'sub_menu' => [
                   /* [
                        'title' => 'Chat',
                        'route' => 'chat.index',
                        //'parameters' => ['user' => auth()->user()->id]  // Example of including a parameter
                    ],
                 /*   [
                        'title' => 'Group Chat',
                        'route' => '#'
                    ],
                    [
                        'title' => 'Bulk Messages',
                        'route' => 'bulk-messages.index'
                    ],
                    [
                        'title' => 'Templates and Buttons',
                        'route' => 'templates-buttons.index'
                    ],*/
                    [
                        'title' => 'Email',
                        'route' => 'mails.index'
                    ],
                  /*  [
                        'title' => 'Logs / Customer History Panel',
                        'route' => 'logs.index'
                    ],
                    [
                        'title' => 'Resource Access',
                        'route' => 'resource-access.index'
                    ],
                    [
                        'title' => 'Appointments',
                        'route' => 'Appointments.index'
                    ],*/
                    [
                        'title' => 'Calendar',
                        'route' => 'calendar.index'
                    ]
                ]
            ],
            [
                'title' => 'Contacts',
                'sub_menu' => [
                    [
                        'title' => 'Contact List',
                        'route' => 'contacts.index'
                    ],
                /*    [
                        'title' => 'Groups',
                        'route' => 'groups.index'
                    ]*/
                ]
            ]
        ]
    ],
    [
        'title' => 'Internal',
        'link' => 'internal',
        'icon' => 'ti ti-apps',
        'sub_menu' => [
            [
                'title' => 'Team Management',
                'sub_menu' => [
                    [
                        'title' => 'Roles',
                        'route' => 'roles.index'
                    ],
                    [
                        'title' => 'Activity Logs',
                        'route' => 'activitylogs.index'
                    ]
                ]
                    ],
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
        ]
    ],
    [
        'title' => 'System Settings',
        'link' => 'settings',
        'icon' => 'ti ti-settings',
        'sub_menu' => [
         /*   [
                'title' => 'Email Configuration',
                'route' => 'email-config.index'
            ],
            [
                'title' => 'API',
                'route' => 'api.index'
            ],
            [
                'title' => 'WhatsApp Accounts',
                'route' => 'whatsapp-accounts.index'
            ],
            [
                'title' => 'Export',
                'route' => 'export.index'
            ],
            [
                'title' => 'File Manager',
                'route' => 'file-manager.index'
            ],
            [
                'title' => 'Departments',
                'route' => 'departments.index'
            ],
            [
                'title' => 'Auth Key Settings',
                'route' => 'auth-keys.index'
            ]*/
        ]
    ],
    [
        'title' => 'Profile',
        'link' => 'profile',
        'icon' => 'ti ti-user',
        'route' => 'profile.show',
        'sub_menu' => []
    ]
];
