<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class InsertRolesIntoRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('roles')->truncate();
        // Insert roles into the roles table
        DB::table('roles')->insert([
            [
                'id' => 1,
                'name' => 'super_admin',
                'permission_type' => null,
                'permissions' => json_encode([
                    "activitylogs.index", "appointments.index", "appointments.create", "appointments.destroy",
                    "appointments.edit", "appointments.myAppointments", "appointments.store", "blogposts.index",
                    "blogposts.create", "blogposts.destroy", "blogposts.edit", "blogposts.store", "calendar.index",
                    "categories.index", "categories.bulk-delete", "categories.create", "categories.destroy",
                    "categories.edit", "categories.store", "ticket-priorities.index", "ticket-priorities.create",
                    "ticket-priorities.destroy", "ticket-priorities.edit", "ticket-priorities.store", "chat.index",
                    "chat.checkRoom", "chat.create", "comments.index", "comments.create", "comments.destroy",
                    "comments.edit", "comments.store", "contacts.index", "contacts.create", "contacts.destroy",
                    "contacts.edit", "contacts.store", "notifications.markAsRead", "products.index",
                    "products.bulkdelete", "products.create", "products.destroy", "products.edit", "products.store",
                    "profile.show", "profile.change_password", "profile.change_password_form", "profile.update",
                    "roles.index", "roles.create", "roles.destroy", "roles.edit", "roles.store", "tags.index",
                    "tags.create", "tags.destroy", "tags.edit", "tags.store", "ticket-histories.index",
                    "ticket-histories.create", "ticket-histories.destroy", "ticket-histories.edit",
                    "ticket-histories.show_by_ticket", "ticket-histories.store", "ticket-priorities.index",
                    "ticket-priorities.create", "ticket-priorities.destroy", "ticket-priorities.edit",
                    "ticket-priorities.store", "ticket-statuses.index", "ticket-statuses.create", "ticket-statuses.destroy",
                    "ticket-statuses.edit", "ticket-statuses.store", "tickets.index", "tickets.create", "tickets.destroy",
                    "tickets.edit", "tickets.my", "tickets.store", "users.index", "users.create", "users.destroy",
                    "users.edit", "users.store"
                ]),
                'created_at' => '2024-09-16 07:12:30',
                'updated_at' => '2024-09-19 07:21:05',
                'description' => 'super admin'
            ],
            [
                'id' => 2,
                'name' => 'website_manger',
                'permission_type' => null,
                'permissions' => json_encode([
                    "blogposts.index", "blogposts.create", "blogposts.destroy", "blogposts.edit", "blogposts.store",
                    "calendar.index", "appointments.index", "appointments.create", "appointments.destroy",
                    "appointments.edit", "appointments.myAppointments", "appointments.store", "categories.index",
                    "categories.bulk-delete", "categories.create", "categories.destroy", "categories.edit",
                    "categories.store", "products.index", "products.bulkdelete", "products.create", "products.destroy",
                    "products.edit", "products.store", "profile.show", "profile.change_password",
                    "profile.change_password_form", "profile.update"
                ]),
                'created_at' => '2024-09-19 07:23:20',
                'updated_at' => '2024-09-19 07:23:20',
                'description' => 'website manger'
            ],
            [
                'id' => 3,
                'name' => 'member',
                'permission_type' => null,
                'permissions' => json_encode([
                    "appointments.create", "appointments.edit", "appointments.myAppointments", "appointments.store",
                    "profile.show", "profile.change_password", "profile.change_password_form", "profile.update",
                    "appointments.destroy"
                ]),
                'created_at' => '2024-09-19 07:24:53',
                'updated_at' => '2024-09-19 07:24:53',
                'description' => 'member'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Optionally, you can define how to revert the insertion if needed
        DB::table('roles')->whereIn('id', [1, 2, 3])->delete();
    }
}
