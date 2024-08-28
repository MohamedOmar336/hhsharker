<?php
return [
    [
        'title' => __('general.side.Tickets'),
        'link' => 'sidebarTickets',
        'icon' => 'ti ti-book',
        'route' => 'tickets.index',
        'sub_menu' => [
            [
                'title' => __('general.side.Tickets Overview'),
                'route' => 'tickets.index',
            ],
            [
                'title' => __('general.side.Add New'),
                'route' => 'tickets.create',
            ],
            [
                'title' => __('general.side.My Tickets'),
                'route' => 'tickets.my',
            ],
        ],
    ],
    [
        'title' => __('general.side.Customer Interaction'),
        'link' => 'sidebarCustomerInteraction',
        'icon' => 'ti ti-comment',
        'route' => 'chat.index',
        'sub_menu' => [
            [
                'title' => __('general.side.Chat'),
                'route' => 'chat.index',
            ],
            [
                'title' => __('general.side.Group Chat'),
                'route' => 'chat.index',
            ],
            [
                'title' => __('general.side.Bulk Messages'),
                'route' => 'chat.index',
            ],
            [
                'title' => __('general.side.general.attributes.whats_app'),
                'route' => 'whatsapp.chat',
            ],
            [
                'title' => __('general.side.Templates and Buttons'),
                'route' => 'chat.index',
            ],
            [
                'title' => __('general.side.Appointments List'),
                'route' => 'appointments.index',
            ],
            [
                'title' => __('general.side.Add New Appointment'),
                'route' => 'appointments.create',
            ],
            [
                'title' => __('general.side.My Appointments'),
                'route' => 'appointments.myAppointments',
            ],
            [
                'title' => __('general.side.Email'),
                'route' => 'mails.index',
            ],

        ],

    ],
    [
        'title' => __('general.side.Contacts'),
        'link' => 'sidebarContacts',
        'icon' => 'ti ti-user',
        'level' => 3,
        'sub_menu' => [
            [
                'title' => __('general.side.Contact List'),
                'route' => 'contacts.index',
            ],
            [
                'title' => __('general.side.Add New Contact'),
                'route' => 'contacts.create',
            ],
        ],
    ],
    [
        'title' => __('general.side.Tasks'),
        'link' => 'sidebarTasks',
        'icon' => 'ti ti-user',
        'level' => 3,
        'sub_menu' => [
            [
                'title' => __('general.side.Tasks List'),
                'route' => 'tasks.index',
            ],
            [
                'title' => __('general.side.Add New Task'),
                'route' => 'tasks.create',
            ],
        ],
    ],
    [
        'title' => __('general.side.Groups'),
        'link' => 'sidebarGroups',
        'icon' => 'ti ti-layout-grid2-alt',
        'level' => 3,
        'sub_menu' => [
            [
                'title' => __('general.side.Group List'),
                'route' => 'groups.index',
            ],
            [
                'title' => __('general.side.Add New Group'),
                'route' => 'groups.create',
            ],
        ],
    ],
    [
        'title' => __('general.side.Team Settings'),
        'link' => 'sidebarTeamSettings',
        'icon' => 'ti ti-settings',
        'route' => 'users.index',
        'sub_menu' => [
            [
                'title' => __('general.side.Members'),
                'route' => 'users.index',
            ],
            [
                'title' => __('general.side.Add New Members'),
                'route' => 'users.create',
            ],
            [
                'title' => __('general.side.Roles & Permissions'),
                'route' => 'roles.index',
            ],
            [
                'title' => __('general.side.Add New Roles'),
                'route' => 'roles.create',
            ],
        ],
    ],
    [
        'title' => __('general.side.Activity Logs'),
        'link' => 'sidebarActivityLogs',
        'icon' => 'ti ti-file-text',
        'route' => 'activity.logs',
    ],
    [
        'title' => __('general.side.Status Settings'),
        'link' => 'sidebarStatusSettings',
        'icon' => 'ti ti-menu-alt',
        'route' => 'ticket-statuses.index',
        'level' => 3,
        'sub_menu' => [
            [
                'title' => __('general.side.Status List'),
                'route' => 'ticket-statuses.index',
            ],
            [
                'title' => __('general.side.Add New Status'),
                'route' => 'ticket-statuses.create',
            ],
        ],
    ],
    [
        'title' => __('general.side.Priority Settings'),
        'link' => 'sidebarPrioritySettings',
        'icon' => 'ti ti-menu-alt',
        'route' => 'ticket-priorities.index',
        'level' => 3,
        'sub_menu' => [
            [
                'title' => __('general.side.Priority List'),
                'route' => 'ticket-priorities.index',

            ],
            [
                'title' => __('general.side.Add New Priority'),
                'route' => 'ticket-priorities.create',
            ],
        ],
    ],
    [
        'title' => __('general.side.Ticket Categories'),
        'link' => 'sidebarTicketCategories',
        'icon' => 'ti ti-menu-alt',
        'route' => 'ticket_categories.index',
        'level' => 3,
        'sub_menu' => [
            [
                'title' => __('general.side.Ticket Categories List'),
                'route' => 'ticket_categories.index',

            ],
            [
                'title' => __('general.side.Add New'),
                'route' => 'ticket_categories.create',
            ],
        ],
    ],

    [
        'title' => __('general.side.Blog'),
        'link' => 'sidebarBlog',
        'icon' => 'ti ti-menu-alt',
        'route' => 'ticket-statuses.index',
        'level' => 3,
        'sub_menu' => [
            [
                'title' => __('general.side.Blog List'),
                'route' => 'blogposts.index',
            ],
            [
                'title' => __('general.side.Add New'),
                'route' => 'blogposts.create',
            ],
        ],
    ],
    [
        'title' => __('general.side.Tags'),
        'link' => 'sidebarTags',
        'icon' => 'ti ti-tags',
        'route' => 'ticket-priorities.index',
        'level' => 3,
        'sub_menu' => [
            [
                'title' => __('general.side.Tags List'),
                'route' => 'tags.index',
            ],
            [
                'title' => __('general.side.Add New'),
                'route' => 'tags.create',
            ],
        ],
    ],


    [
        'title' => __('general.side.Products'),
        'link' => 'sidebarProducts',
        'icon' => 'ti ti-bag',
        'level' => 3,
        'sub_menu' => [
            [
                'title' => __('general.side.Product List'),
                'route' => 'products.index',
            ],
            [
                'title' => __('general.side.Add New Product'),
                'route' => 'products.create',
            ],
        ],
    ],
    [
        'title' => __('general.side.Characteristics'),
        'link' => 'sidebarCharacteristics',
        'icon' => 'ti ti-bag',
        'level' => 3,
        'sub_menu' => [
            [
                'title' => __('general.side.Characteristics List'),
                'route' => 'characteristics.index',
            ],
            [
                'title' => __('general.side.Add New'),
                'route' => 'characteristics.create',
            ],
        ],
    ],
    [
        'title' => __('general.side.Category'),
        'link' => 'sidebarCategory',
        'icon' => 'ti ti-menu-alt',
        'level' => 3,
        'sub_menu' => [
            [
                'title' => __('general.side.Category List'),
                'route' => 'categories.index',
            ],
            [
                'title' => __('general.side.Add New Category'),
                'route' => 'categories.create',
            ],
        ],
    ],
    [
        'title' => __('general.side.Email Configuration'),
        'link' => 'sidebarEmailConfiguration',
        'route' => 'smtp-settings.edit',
    ],
    [
        'title' => __('general.side.API'),
        'link' => 'sidebarAPI',
        'route' => 'smtp-settings.edit',
    ],
    [
        'title' => __('general.side.WhatsApp Settings'),
        'link' => 'sidebarWhatsAppSettings',
        'route' => 'smtp-settings.edit',
    ],
    [
        'title' => __('general.side.Auth Key Settings'),
        'link' => 'sidebarAuthKeySettings',
        'route' => 'smtp-settings.edit',
    ],
    [
        'title' => __('general.side.Profile'),
        'link' => 'sidebarProfile',
        'route' => 'profile.show',
    ],
    [
        'title' => __('general.side.Change Password'),
        'link' => 'sidebarChangePassword',
        'route' => 'profile.show',
    ],

];
