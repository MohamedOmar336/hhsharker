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
    // [
    //     'key' => 'manage language',
    //     'name' => 'app.acl.manage_language', // Translation key for the permission name
    //     'route' => 'change.lang', // The route associated with the permission
    //     'sort' => 1, // Sorting order for permissions
    // ],
    [
        'key'   => 'products',
        'name'  => 'app.acl.products',
        'route' => 'products.index',
        'sort'  => 2,
    ], [
        'key'   => 'create products ',
        'name'  => 'app.acl.create',
        'route' => 'products.create',
        'sort'  => 2,
    ],[
        'key'   => 'edit products ',
        'name'  => 'app.acl.edit',
        'route' => 'products.edit',
        'sort'  => 3,
    ], [
        'key'   => ' destroy products',
        'name'  => 'app.acl.destroy',
        'route' => 'products.destroy',
        'sort'  => 4,
    ], [
        'key'   => 'store products',
        'name'  => 'app.acl.store',
        'route' => 'products.store',
        'sort'  => 4,
    ], [
        'key'   => 'bulk delete products',
        'name'  => 'app.acl.bulk_delete',
        'route' => 'products.bulkdelete',
        'sort'  => 5,
    ],

    /*
    |--------------------------------------------------------------------------
    | Categories
    |--------------------------------------------------------------------------
    |
    | All ACLs related to categories will be placed here.
    |
    */
    [
        'key'   => 'categories',
        'name'  => 'app.acl.categories',
        'route' => 'categories.index',
        'sort'  => 2,
    ], [
        'key'   => 'create categories',
        'name'  => 'app.acl.create',
        'route' => 'categories.create',
        'sort'  => 1,
    ], [
        'key'   => 'edit categories',
        'name'  => 'app.acl.edit',
        'route' => 'categories.edit',
        'sort'  => 2,
    ], [
        'key'   => 'destroy categories ',
        'name'  => 'app.acl.destroy',
        'route' => 'categories.destroy',
        'sort'  => 3,
    ],[
        'key'   => 'store categories ',
        'name'  => 'app.acl.store',
        'route' => 'categories.store',
        'sort'  => 4,
    ], [
        'key'   => 'bulk delete categories',
        'name'  => 'app.acl.bulk_delete',
        'route' => 'categories.bulk-delete',
        'sort'  => 5,
    ],

    /*
    |--------------------------------------------------------------------------
    | Blog Posts
    |--------------------------------------------------------------------------
    |
    | All ACLs related to blog posts will be placed here.
    |
    */
    [
        'key'   => 'blogposts',
        'name'  => 'app.acl.blogposts',
        'route' => 'blogposts.index',
        'sort'  => 2,
    ], [
        'key'   => 'create blogposts ',
        'name'  => 'app.acl.create',
        'route' => 'blogposts.create',
        'sort'  => 1,
    ], [
        'key'   => 'edit blogposts ',
        'name'  => 'app.acl.edit',
        'route' => 'blogposts.edit',
        'sort'  => 2,
    ], [
        'key'   => 'destroy blogposts ',
        'name'  => 'app.acl.destroy',
        'route' => 'blogposts.destroy',
        'sort'  => 3,
    ],[
        'key'   => 'store blogposts',
        'name'  => 'app.acl.store',
        'route' => 'blogposts.store',
        'sort'  => 4,
    ],

    /*
    |--------------------------------------------------------------------------
    | Comments
    |--------------------------------------------------------------------------
    |
    | All ACLs related to comments will be placed here.
    |
    */
    [
        'key'   => 'comments',
        'name'  => 'app.acl.comments',
        'route' => 'comments.index',
        'sort'  => 2,
    ], [
        'key'   => 'create comments ',
        'name'  => 'app.acl.create',
        'route' => 'comments.create',
        'sort'  => 1,
    ], [
        'key'   => 'edit comments ',
        'name'  => 'app.acl.edit',
        'route' => 'comments.edit',
        'sort'  => 2,
    ], [
        'key'   => 'destroy comments',
        'name'  => 'app.acl.destroy',
        'route' => 'comments.destroy',
        'sort'  => 3,
    ],[
        'key'   => 'store comments',
        'name'  => 'app.acl.store',
        'route' => 'comments.store',
        'sort'  => 4,
    ],

    /*
    |--------------------------------------------------------------------------
    | Tags
    |--------------------------------------------------------------------------
    |
    | All ACLs related to tags will be placed here.
    |
    */
    [
        'key'   => 'tags',
        'name'  => 'app.acl.tags',
        'route' => 'tags.index',
        'sort'  => 2,
    ], [
        'key'   => 'create tags ',
        'name'  => 'app.acl.create',
        'route' => 'tags.create',
        'sort'  => 1,
    ], [
        'key'   => 'edit tags ',
        'name'  => 'app.acl.edit',
        'route' => 'tags.edit',
        'sort'  => 2,
    ], [
        'key'   => 'destroy tags',
        'name'  => 'app.acl.destroy',
        'route' => 'tags.destroy',
        'sort'  => 3,
    ],[
        'key'   => 'store tags ',
        'name'  => 'app.acl.store',
        'route' => 'tags.store',
        'sort'  => 4,
    ],

    /*
    |--------------------------------------------------------------------------
    | Contacts
    |--------------------------------------------------------------------------
    |
    | All ACLs related to contacts will be placed here.
    |
    */
    [
        'key'   => 'contacts',
        'name'  => 'app.acl.contacts',
        'route' => 'contacts.index',
        'sort'  => 2,
    ], [
        'key'   => 'create contacts',
        'name'  => 'app.acl.create',
        'route' => 'contacts.create',
        'sort'  => 1,
    ], [
        'key'   => ' edit contacts',
        'name'  => 'app.acl.edit',
        'route' => 'contacts.edit',
        'sort'  => 2,
    ], [
        'key'   => ' destroy contacts',
        'name'  => 'app.acl.destroy',
        'route' => 'contacts.destroy',
        'sort'  => 3,
    ],[
        'key'   => 'store contacts',
        'name'  => 'app.acl.store',
        'route' => 'contacts.store',
        'sort'  => 4,
    ],
    [
        'key'   => 'contacts_bulk_delete',
        'name'  => 'app.acl.contacts_bulk_delete',
        'route' => 'contacts.bulkDelete',
        'sort'  => 7,
    ],

    /*
    |--------------------------------------------------------------------------
    | Users
    |--------------------------------------------------------------------------
    |
    | All ACLs related to users will be placed here.
    |
    */
    [
        'key'   => 'users',
        'name'  => 'app.acl.users',
        'route' => 'users.index',
        'sort'  => 2,
    ], [
        'key'   => 'create users',
        'name'  => 'app.acl.create',
        'route' => 'users.create',
        'sort'  => 1,
    ], [
        'key'   => 'edit users ',
        'name'  => 'app.acl.edit',
        'route' => 'users.edit',
        'sort'  => 2,
    ], [
        'key'   => 'destroy users ',
        'name'  => 'app.acl.destroy',
        'route' => 'users.destroy',
        'sort'  => 3,
    ],[
        'key'   => 'store users ',
        'name'  => 'app.acl.store',
        'route' => 'users.store',
        'sort'  => 4,
    ],

    /*
    |--------------------------------------------------------------------------
    | Profile
    |--------------------------------------------------------------------------
    |
    | All ACLs related to profile will be placed here.
    |
    */
    [
        'key'   => 'profile',
        'name'  => 'app.acl.profile',
        'route' => 'profile.show',
        'sort'  => 2,
    ], [
        'key'   => 'update profile',
        'name'  => 'app.acl.update',
        'route' => 'profile.update',
        'sort'  => 1,
    ], [
        'key'   => 'change password form',
        'name'  => 'app.acl.change_password_form',
        'route' => 'profile.change_password_form',
        'sort'  => 2,
    ], [
        'key'   => 'change password',
        'name'  => 'app.acl.change_password',
        'route' => 'profile.change_password',
        'sort'  => 3,
    ],[
        'key'   => 'store categories',
        'name'  => 'app.acl.store',
        'route' => 'categories.store',
        'sort'  => 4,
    ],

    /*
    |--------------------------------------------------------------------------
    | Roles
    |--------------------------------------------------------------------------
    |
    | All ACLs related to roles will be placed here.
    |
    */
    [
        'key'   => 'roles',
        'name'  => 'app.acl.roles',
        'route' => 'roles.index',
        'sort'  => 2,
    ], [
        'key'   => 'create roles',
        'name'  => 'app.acl.create',
        'route' => 'roles.create',
        'sort'  => 1,
    ], [
        'key'   => 'edit roles',
        'name'  => 'app.acl.edit',
        'route' => 'roles.edit',
        'sort'  => 2,
    ], [
        'key'   => 'destroy roles',
        'name'  => 'app.acl.destroy',
        'route' => 'roles.destroy',
        'sort'  => 3,
    ],[
        'key'   => 'store roles',
        'name'  => 'app.acl.store',
        'route' => 'roles.store',
        'sort'  => 4,
    ],

    /*
    |--------------------------------------------------------------------------
    | Chat
    |--------------------------------------------------------------------------
    |
    | All ACLs related to chat will be placed here.
    |
    */
    [
        'key'   => 'chat',
        'name'  => 'app.acl.chat',
        'route' => 'chat.index',
        'sort'  => 2,
    ], [
        'key'   => 'chat checkRoom',
        'name'  => 'app.acl.checkRoom',
        'route' => 'chat.checkRoom',
        'sort'  => 1,
    ], [
        'key'   => 'create chat',
        'name'  => 'app.acl.create',
        'route' => 'chat.create',
        'sort'  => 2,
    ],

    /*
    |--------------------------------------------------------------------------
    | Tickets
    |--------------------------------------------------------------------------
    |
    | All ACLs related to tickets will be placed here.
    |
    */
    [
        'key'   => 'tickets',
        'name'  => 'app.acl.tickets',
        'route' => 'tickets.index',
        'sort'  => 2,
    ], [
        'key'   => 'create tickets',
        'name'  => 'app.acl.create',
        'route' => 'tickets.create',
        'sort'  => 1,
    ], [
        'key'   => 'edit tickets',
        'name'  => 'app.acl.edit',
        'route' => 'tickets.edit',
        'sort'  => 2,
    ], [
        'key'   => 'destroy tickets',
        'name'  => 'app.acl.destroy',
        'route' => 'tickets.destroy',
        'sort'  => 3,
    ],[
        'key'   => 'store tickets',
        'name'  => 'app.acl.store',
        'route' => 'tickets.store',
        'sort'  => 4,
    ], [
        'key'   => 'my tickets',
        'name'  => 'app.acl.my',
        'route' => 'tickets.my',
        'sort'  => 5,
    ],

    /*
    |--------------------------------------------------------------------------
    | Ticket Priorities
    |--------------------------------------------------------------------------
    |
    | All ACLs related to ticket priorities will be placed here.
    |
    */
    [
        'key'   => 'ticket priorities',
        'name'  => 'app.acl.ticket_priorities',
        'route' => 'ticket-priorities.index',
        'sort'  => 2,
    ], [
        'key'   => 'create ticket priorities',
        'name'  => 'app.acl.create',
        'route' => 'ticket-priorities.create',
        'sort'  => 1,
    ], [
        'key'   => 'edit ticket priorities',
        'name'  => 'app.acl.edit',
        'route' => 'ticket-priorities.edit',
        'sort'  => 2,
    ], [
        'key'   => 'destroy ticket priorities',
        'name'  => 'app.acl.destroy',
        'route' => 'ticket-priorities.destroy',
        'sort'  => 3,
    ],[
        'key'   => 'store ticket priorities',
        'name'  => 'app.acl.store',
        'route' => 'ticket-priorities.store',
        'sort'  => 4,
    ],

    /*
    |--------------------------------------------------------------------------
    | Ticket Statuses
    |--------------------------------------------------------------------------
    |
    | All ACLs related to ticket statuses will be placed here.
    |
    */
    [
        'key'   => 'ticket statuses',
        'name'  => 'app.acl.ticket_statuses',
        'route' => 'ticket-statuses.index',
        'sort'  => 2,
    ], [
        'key'   => 'create ticket statuses',
        'name'  => 'app.acl.create',
        'route' => 'ticket-statuses.create',
        'sort'  => 1,
    ], [
        'key'   => 'edit ticket statuses',
        'name'  => 'app.acl.edit',
        'route' => 'ticket-statuses.edit',
        'sort'  => 2,
    ], [
        'key'   => 'destroy ticket statuses',
        'name'  => 'app.acl.destroy',
        'route' => 'ticket-statuses.destroy',
        'sort'  => 3,
    ],[
        'key'   => 'store ticket statuses',
        'name'  => 'app.acl.store',
        'route' => 'ticket-statuses.store',
        'sort'  => 4,
    ],

    /*
    |--------------------------------------------------------------------------
    | Ticket Histories
    |--------------------------------------------------------------------------
    |
    | All ACLs related to ticket histories will be placed here.
    |
    */
    [
        'key'   => 'ticket histories',
        'name'  => 'app.acl.ticket_histories',
        'route' => 'ticket-histories.index',
        'sort'  => 2,
    ], [
        'key'   => ' create ticket histories',
        'name'  => 'app.acl.create',
        'route' => 'ticket-histories.create',
        'sort'  => 1,
    ], [
        'key'   => 'edit ticket histories',
        'name'  => 'app.acl.edit',
        'route' => 'ticket-histories.edit',
        'sort'  => 2,
    ], [
        'key'   => 'destroy ticket histories',
        'name'  => 'app.acl.destroy',
        'route' => 'ticket-histories.destroy',
        'sort'  => 3,
    ],[
        'key'   => 'store ticket histories ',
        'name'  => 'app.acl.store',
        'route' => 'ticket-histories.store',
        'sort'  => 4,
    ], [
        'key'   => 'ticket_histories.show_by_ticket',
        'name'  => 'app.acl.show_by_ticket',
        'route' => 'ticket-histories.show_by_ticket',
        'sort'  => 5,
    ],

    /*
    |--------------------------------------------------------------------------
    | Appointments
    |--------------------------------------------------------------------------
    |
    | All ACLs related to appointments will be placed here.
    |
    */
    [
        'key'   => 'appointments',
        'name'  => 'app.acl.appointments',
        'route' => 'appointments.index',
        'sort'  => 2,
    ], [
        'key'   => 'create appointments ',
        'name'  => 'app.acl.create',
        'route' => 'appointments.create',
        'sort'  => 1,
    ], [
        'key'   => 'edit appointments',
        'name'  => 'app.acl.edit',
        'route' => 'appointments.edit',
        'sort'  => 2,
    ], [
        'key'   => 'destroy appointments',
        'name'  => 'app.acl.destroy',
        'route' => 'appointments.destroy',
        'sort'  => 3,
    ],[
        'key'   => 'store appointments',
        'name'  => 'app.acl.store',
        'route' => 'appointments.store',
        'sort'  => 4,
    ], [
        'key'   => 'my Appointments',
        'name'  => 'app.acl.myAppointments',
        'route' => 'appointments.myAppointments',
        'sort'  => 5,
    ],

    /*
    |--------------------------------------------------------------------------
    | Calendar
    |--------------------------------------------------------------------------
    |
    | All ACLs related to calendar will be placed here.
    |
    */
    [
        'key'   => 'calendar',
        'name'  => 'app.acl.calendar',
        'route' => 'calendar.index',
        'sort'  => 2,
    ],

    /*
    |--------------------------------------------------------------------------
    | Activity Logs
    |--------------------------------------------------------------------------
    |
    | All ACLs related to activity logs will be placed here.
    |
    */
    [
        'key'   => 'activitylogs',
        'name'  => 'app.acl.activitylogs',
        'route' => 'activitylogs.index',
        'sort'  => 2,
    ],

    /*
    |--------------------------------------------------------------------------
    | Notifications
    |--------------------------------------------------------------------------
    |
    | All ACLs related to notifications will be placed here.
    |
    */
    [
        'key'   => 'mark As Read notifications ',
        'name'  => 'app.acl.markAsRead',
        'route' => 'notifications.markAsRead',
        'sort'  => 2,
    ],


    [
        'key'   => ' ticket category',
        'name'  => 'app.acl.category-ticket',
        'route' => 'ticket-priorities.index',
        'sort'  => 2,
    ], [
        'key'   => 'create ticket category',
        'name'  => 'app.acl.create',
        'route' => 'ticket-priorities.create',
        'sort'  => 1,
    ], [
        'key'   => 'edit ticket category ',
        'name'  => 'app.acl.edit',
        'route' => 'ticket-priorities.edit',
        'sort'  => 2,
    ], [
        'key'   => 'destroy ticket category ',
        'name'  => 'app.acl.destroy',
        'route' => 'ticket-priorities.destroy',
        'sort'  => 3,
    ],[
        'key'   => 'store ticket category ',
        'name'  => 'app.acl.store',
        'route' => 'ticket-priorities.store',
        'sort'  => 4,
    ],



    [
        'key'   => 'home',
        'name'  => 'app.acl.home',
        'route' => 'home',
        'sort'  => 1,
    ],
    [
        'key'   => 'analytics',
        'name'  => 'app.acl.analytics',
        'route' => 'analytics',
        'sort'  => 2,
    ],



];
