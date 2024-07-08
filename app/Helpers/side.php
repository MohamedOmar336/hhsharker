<?php
return [
    [
        'title' => __('Tickets'),
        'link' => 'sidebarTickets',
        'icon' => 'ti ti-book',
        'route' => 'tickets.index',
        'sub_menu' => [
            [
                'title' => __('Tickets Overview'),
                'route' => 'tickets.index',
            ],
            [
                'title' => __('Add New'),
                'route' => 'tickets.create',
            ],
            [
                'title' => __('My Tickets'),
                'route' => 'tickets.my',
            ],
        ],
    ],
    [
        'title' => __('Customer Interaction'),
        'link' => 'sidebarCustomerInteraction',
        'icon' => 'ti ti-comment',
        'route' => 'chat.index',
        'sub_menu' => [
            [
                'title' => __('Chat'),
                'route' => 'chat.index',
            ],
            [
                'title' => __('Group Chat'),
                'route' => 'chat.index',
            ],
            [
                'title' => __('Bulk Messages'),
                'route' => 'chat.index',
            ],
            [
                'title' => __('Templates and Buttons'),
                'route' => 'chat.index',
            ],
            [
                'title' => __('Appointments List'),
                'route' => 'appointments.index',
            ],
            [
                'title' => __('Add New Appointment'),
                'route' => 'appointments.create',
            ],
            [
                'title' => __('My Appointments'),
                'route' => 'appointments.myAppointments',
            ],
            [
                'title' => __('Email'),
                'route' => 'mails.index',
            ],

        ],

    ],
    [
        'title' => __('Contacts'),
        'link' => 'sidebarContacts',
        'icon' => 'ti ti-user',
        'level' => 3,
        'sub_menu' => [
            [
                'title' => __('Contact List'),
                'route' => 'contacts.index',
            ],
            [
                'title' => __('Add New Contact'),
                'route' => 'contacts.create',
            ],
        ],
    ],
    [
        'title' => __('Groups'),
        'link' => 'sidebarGroups',
        'icon' => 'ti ti-layout-grid2-alt',
        'level' => 3,
        'sub_menu' => [
            [
                'title' => __('Group List'),
                'route' => 'groups.index',
            ],
            [
                'title' => __('Add New Group'),
                'route' => 'groups.create',
            ],
        ],
    ],
    [
        'title' => __('Team Settings'),
        'link' => 'sidebarTeamSettings',
        'icon' => 'ti ti-settings',
        'route' => 'groups.index',
        'sub_menu' => [
            [
                'title' => __('Members'),
                'route' => 'groups.index',
            ],
            [
                'title' => __('Roles & Permissions'),
                'route' => 'groups.index',
            ],
        ],
    ],
    [
        'title' => __('Activity Logs'),
        'link' => 'sidebarActivityLogs',
        'icon' => 'ti ti-file-text',
        'route' => 'activity.logs',
    ],
    [
        'title' => __('Status Settings'),
        'link' => 'sidebarStatusSettings',
        'icon' => 'ti ti-menu-alt',
        'route' => 'ticket-statuses.index',
        'sub_menu' => [
            [
                'title' => __('Status List'),
                'route' => 'ticket-statuses.index',
            ],
            [
                'title' => __('Add New Status'),
                'route' => 'ticket-statuses.create',
            ],
        ],
    ],
    [
        'title' => __('Priority Settings'),
        'link' => 'sidebarPrioritySettings',
        'icon' => 'ti ti-menu-alt',
        'route' => 'ticket-priorities.index',
        'sub_menu' => [
            [
                'title' => __('Priority List'),
                'route' => 'ticket-priorities.index',

            ],
            [
                'title' => __('Add New Priority'),
                'route' => 'ticket-priorities.create',
            ],
        ],
    ],






    //     [
//         'title' => __('Logs / Customer History Panel'),
//         'link' => 'sidebarLogs',
//         'icon' => 'ti ti-file',
//         'route' => 'logs.index',
//     ],
//     [
//         'title' => __('Appointment / Calendar'),
//         'link' => 'sidebarAppointment',
//         'icon' => 'ti ti-calendar',
//         'route' => 'appointments.index',
//         'sub_menu' => [
//             [
//                 'title' => __('Appointments List'),
//                 'route' => 'appointments.index',
//             ],
//             [
//                 'title' => __('Add New Appointment'),
//                 'route' => 'appointments.create',
//             ],
//             [
//                 'title' => __('My Appointments'),
//                 'route' => 'appointments.myAppointments',
//             ],
//         ],
//     ],
//     [
//         'title' => __('Contacts'),
//         'link' => 'sidebarContacts',
//         'icon' => 'ti ti-user',
//         'sub_menu' => [
//             [
//                 'title' => __('Contact List'),
//                 'route' => 'contacts.index',
//             ],
//             [
//                 'title' => __('Add New Contact'),
//                 'route' => 'contacts.create',
//             ],
//         ],
//     ],
//     [
//         'title' => __('Groups'),
//         'link' => 'sidebarGroups',
//         'icon' => 'ti ti-layout-grid2-alt',
//         'sub_menu' => [
//             [
//                 'title' => __('Group List'),
//                 'route' => 'groups.index',
//             ],
//             [
//                 'title' => __('Add New Group'),
//                 'route' => 'groups.create',
//             ],
//         ],
//     ],
//     [
//         'title' => __('Reports and Analytics'),
//         'route' => 'internal.reports',
//     ],
//     [
//         'title' => __('Team Settings'),
//         'link' => 'sidebarTeamSettings',
//         'icon' => 'ti ti-settings',
//         'sub_menu' => [
//             [
//                 'title' => __('Members'),
//                 'route' => 'team.members',
//             ],
//             [
//                 'title' => __('Roles & Permissions'),
//                 'route' => 'team.roles_permissions',
//             ],
//         ],
//     ],
//     [
//         'title' => __('Activity Logs'),
//         'link' => 'sidebarActivityLogs',
//         'icon' => 'ti ti-file-text',
//         'route' => 'activity.logs',
//     ],
//     [
//         'title' => __('Status Settings'),
//         'link' => 'sidebarStatusSettings',
//         'icon' => 'ti ti-menu-alt',
//         'sub_menu' => [
//             [
//                 'title' => __('Status List'),
//                 'route' => 'ticket.statuses.index',
//             ],
//             [
//                 'title' => __('Add New Status'),
//                 'route' => 'ticket.statuses.create',
//             ],
//         ],
//     ],
//     [
//         'title' => __('Priority Settings'),
//         'link' => 'sidebarPrioritySettings',
//         'icon' => 'ti ti-menu-alt',
//         'sub_menu' => [
//             [
//                 'title' => __('Priority List'),
//                 'route' => 'ticket.priorities.index',
// 
//             [
//                 'title' => __('Add New Priority'),
//                 'route' => 'ticket.priorities.create',
//             ],
//         ],
//     ],
//     [
//         'title' => __('Blog'),
//         'link' => 'sidebarBlog',
//         'icon' => 'ti ti-layout-grid2',
//         'sub_menu' => [
//             [
//                 'title' => __('Blog List'),
//                 'route' => 'blogs.index',
//             ],
//             [
//                 'title' => __('Add New Blog'),
//                 'route' => 'blogs.create',
//             ],
//             [
//                 'title' => __('Tags'),
//                 'link' => 'sidebarBlogTags',
//                 'icon' => 'ti ti-tag',
//                 'sub_menu' => [
//                     [
//                         'title' => __('Tags List'),
//                         'route' => 'tags.index',
//                     ],
//                     [
//                         'title' => __('Add New Tag'),
//                         'route' => 'tags.create',
//                     ],
//                 ],
//             ],
//         ],
//     ],
//     [
//         'title' => __('Products'),
//         'link' => 'sidebarProducts',
//         'icon' => 'ti ti-bag',
//         'sub_menu' => [
//             [
//                 'title' => __('Product List'),
//                 'route' => 'products.index',
//             ],
//             [
//                 'title' => __('Add New Product'),
//                 'route' => 'products.create',
//             ],
//         ],
//     ],
//     [
//         'title' => __('Category'),
//         'link' => 'sidebarCategory',
//         'icon' => 'ti ti-menu-alt',
//         'sub_menu' => [
//             [
//                 'title' => __('Category List'),
//                 'route' => 'categories.index',
//             ],
//             // [
//             //     'title' => __('Sub-category'),
//             //     'route' => 'categories.subcategories',
//             // ],
//             [
//                 'title' => __('Add New Category'),
//                 'route' => 'categories.create',
//             ],
//         ],
//     ],
[
    'title' => __('Email Configuration'),
    'link' => 'sidebarEmailConfiguration',
    'route' => 'smtp-settings',
],
[
    'title' => __('API'),
    'link' => 'sidebarAPI',
    'route' => 'smtp-settings',
],
[
    'title' => __('WhatsApp Settings'),
    'link' => 'sidebarWhatsAppSettings',
    'route' => 'smtp-settings',
],
[
    'title' => __('Auth Key Settings'),
    'link' => 'sidebarAuthKeySettings',
    'route' => 'smtp-settings',
],

];