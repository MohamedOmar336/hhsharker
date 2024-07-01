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
        'key'   => 'products.destroy',
        'name'  => 'app.acl.destroy',
        'route' => 'products.destroy',
        'sort'  => 4,
    ], [
        'key'   => 'products.store',
        'name'  => 'app.acl.store',
        'route' => 'products.store',
        'sort'  => 4,
    ], [
        'key'   => 'products.bulk_delete',
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
        'key'   => 'categories.destroy',
        'name'  => 'app.acl.destroy',
        'route' => 'categories.destroy',
        'sort'  => 3,
    ],[
        'key'   => 'categories.store',
        'name'  => 'app.acl.store',
        'route' => 'categories.store',
        'sort'  => 4,
    ], [
        'key'   => 'categories.bulk_delete',
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
        'key'   => 'blogposts.create',
        'name'  => 'app.acl.create',
        'route' => 'blogposts.create',
        'sort'  => 1,
    ], [
        'key'   => 'blogposts.edit',
        'name'  => 'app.acl.edit',
        'route' => 'blogposts.edit',
        'sort'  => 2,
    ], [
        'key'   => 'blogposts.destroy',
        'name'  => 'app.acl.destroy',
        'route' => 'blogposts.destroy',
        'sort'  => 3,
    ],[
        'key'   => 'blogposts.store',
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
        'key'   => 'comments.create',
        'name'  => 'app.acl.create',
        'route' => 'comments.create',
        'sort'  => 1,
    ], [
        'key'   => 'comments.edit',
        'name'  => 'app.acl.edit',
        'route' => 'comments.edit',
        'sort'  => 2,
    ], [
        'key'   => 'comments.destroy',
        'name'  => 'app.acl.destroy',
        'route' => 'comments.destroy',
        'sort'  => 3,
    ],[
        'key'   => 'comments.store',
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
        'key'   => 'tags.create',
        'name'  => 'app.acl.create',
        'route' => 'tags.create',
        'sort'  => 1,
    ], [
        'key'   => 'tags.edit',
        'name'  => 'app.acl.edit',
        'route' => 'tags.edit',
        'sort'  => 2,
    ], [
        'key'   => 'tags.destroy',
        'name'  => 'app.acl.destroy',
        'route' => 'tags.destroy',
        'sort'  => 3,
    ],[
        'key'   => 'tags.store',
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
        'key'   => 'contacts.create',
        'name'  => 'app.acl.create',
        'route' => 'contacts.create',
        'sort'  => 1,
    ], [
        'key'   => 'contacts.edit',
        'name'  => 'app.acl.edit',
        'route' => 'contacts.edit',
        'sort'  => 2,
    ], [
        'key'   => 'contacts.destroy',
        'name'  => 'app.acl.destroy',
        'route' => 'contacts.destroy',
        'sort'  => 3,
    ],[
        'key'   => 'contacts.store',
        'name'  => 'app.acl.store',
        'route' => 'contacts.store',
        'sort'  => 4,
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
        'key'   => 'users.create',
        'name'  => 'app.acl.create',
        'route' => 'users.create',
        'sort'  => 1,
    ], [
        'key'   => 'users.edit',
        'name'  => 'app.acl.edit',
        'route' => 'users.edit',
        'sort'  => 2,
    ], [
        'key'   => 'users.destroy',
        'name'  => 'app.acl.destroy',
        'route' => 'users.destroy',
        'sort'  => 3,
    ],[
        'key'   => 'users.store',
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
        'key'   => 'profile.update',
        'name'  => 'app.acl.update',
        'route' => 'profile.update',
        'sort'  => 1,
    ], [
        'key'   => 'profile.change_password_form',
        'name'  => 'app.acl.change_password_form',
        'route' => 'profile.change_password_form',
        'sort'  => 2,
    ], [
        'key'   => 'profile.change_password',
        'name'  => 'app.acl.change_password',
        'route' => 'profile.change_password',
        'sort'  => 3,
    ],[
        'key'   => 'categories.store',
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
        'key'   => 'roles.create',
        'name'  => 'app.acl.create',
        'route' => 'roles.create',
        'sort'  => 1,
    ], [
        'key'   => 'roles.edit',
        'name'  => 'app.acl.edit',
        'route' => 'roles.edit',
        'sort'  => 2,
    ], [
        'key'   => 'roles.destroy',
        'name'  => 'app.acl.destroy',
        'route' => 'roles.destroy',
        'sort'  => 3,
    ],[
        'key'   => 'roles.store',
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
        'key'   => 'chat.checkRoom',
        'name'  => 'app.acl.checkRoom',
        'route' => 'chat.checkRoom',
        'sort'  => 1,
    ], [
        'key'   => 'chat.create',
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
        'key'   => 'tickets.create',
        'name'  => 'app.acl.create',
        'route' => 'tickets.create',
        'sort'  => 1,
    ], [
        'key'   => 'tickets.edit',
        'name'  => 'app.acl.edit',
        'route' => 'tickets.edit',
        'sort'  => 2,
    ], [
        'key'   => 'tickets.destroy',
        'name'  => 'app.acl.destroy',
        'route' => 'tickets.destroy',
        'sort'  => 3,
    ],[
        'key'   => 'tickets.store',
        'name'  => 'app.acl.store',
        'route' => 'tickets.store',
        'sort'  => 4,
    ], [
        'key'   => 'tickets.my',
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
        'key'   => 'ticket_priorities',
        'name'  => 'app.acl.ticket_priorities',
        'route' => 'ticket-priorities.index',
        'sort'  => 2,
    ], [
        'key'   => 'ticket_priorities.create',
        'name'  => 'app.acl.create',
        'route' => 'ticket-priorities.create',
        'sort'  => 1,
    ], [
        'key'   => 'ticket_priorities.edit',
        'name'  => 'app.acl.edit',
        'route' => 'ticket-priorities.edit',
        'sort'  => 2,
    ], [
        'key'   => 'ticket_priorities.destroy',
        'name'  => 'app.acl.destroy',
        'route' => 'ticket-priorities.destroy',
        'sort'  => 3,
    ],[
        'key'   => 'ticket_priorities.store',
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
        'key'   => 'ticket_statuses',
        'name'  => 'app.acl.ticket_statuses',
        'route' => 'ticket-statuses.index',
        'sort'  => 2,
    ], [
        'key'   => 'ticket_statuses.create',
        'name'  => 'app.acl.create',
        'route' => 'ticket-statuses.create',
        'sort'  => 1,
    ], [
        'key'   => 'ticket_statuses.edit',
        'name'  => 'app.acl.edit',
        'route' => 'ticket-statuses.edit',
        'sort'  => 2,
    ], [
        'key'   => 'ticket_statuses.destroy',
        'name'  => 'app.acl.destroy',
        'route' => 'ticket-statuses.destroy',
        'sort'  => 3,
    ],[
        'key'   => 'ticket_statuses.store',
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
        'key'   => 'ticket_histories',
        'name'  => 'app.acl.ticket_histories',
        'route' => 'ticket-histories.index',
        'sort'  => 2,
    ], [
        'key'   => 'ticket_histories.create',
        'name'  => 'app.acl.create',
        'route' => 'ticket-histories.create',
        'sort'  => 1,
    ], [
        'key'   => 'ticket_histories.edit',
        'name'  => 'app.acl.edit',
        'route' => 'ticket-histories.edit',
        'sort'  => 2,
    ], [
        'key'   => 'ticket_histories.destroy',
        'name'  => 'app.acl.destroy',
        'route' => 'ticket-histories.destroy',
        'sort'  => 3,
    ],[
        'key'   => 'ticket_histories.store',
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
        'key'   => 'appointments.create',
        'name'  => 'app.acl.create',
        'route' => 'appointments.create',
        'sort'  => 1,
    ], [
        'key'   => 'appointments.edit',
        'name'  => 'app.acl.edit',
        'route' => 'appointments.edit',
        'sort'  => 2,
    ], [
        'key'   => 'appointments.destroy',
        'name'  => 'app.acl.destroy',
        'route' => 'appointments.destroy',
        'sort'  => 3,
    ],[
        'key'   => 'appointments.store',
        'name'  => 'app.acl.store',
        'route' => 'appointments.store',
        'sort'  => 4,
    ], [
        'key'   => 'appointments.myAppointments',
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
        'key'   => 'notifications.markAsRead',
        'name'  => 'app.acl.markAsRead',
        'route' => 'notifications.markAsRead',
        'sort'  => 2,
    ],

];
