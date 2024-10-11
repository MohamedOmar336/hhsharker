<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'user_name',
        'email',
        'password',
        'phone',
        'image',
        'role_id',
        'active',
        'gender',
        'last_activity',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'active' => 'boolean',
    ];

    /**
     * Get the user's full name attribute.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    /**
     * Specifies the user's FCM token
     *
     * @return string|array
     */
    public function routeNotificationForFcm()
    {
        return $this->fcm_token;
    }

    /**
     * Get the role associated with the user.
     */
    public function role()
    {
        return $this->belongsTo(Roles::class);
    }

    /**
     * Checks if admin has permission to perform certain action.
     *
     * @param  String  $permission
     * @return Boolean
     */
    public function hasPermission($permission)
    {
        if (! $this->role->permissions) {
            return false;
        }

        return in_array($permission, $this->role->permissions);
    }

    public function ticketsCreated()
    {
        return $this->hasMany(Ticket::class, 'CreatedBy');
    }

    public function ticketsAssigned()
    {
        return $this->hasMany(Ticket::class, 'AssignedTo');
    }

    public function ticketHistory()
    {
        return $this->hasMany(TicketHistory::class, 'ChangedBy');
    }

    public function sentMails()
    {
        return $this->hasMany(Mail::class, 'sender_id');
    }

    public function receivedMails()
    {
        return $this->hasMany(Mail::class, 'recipient_id');
    }

    /**
     * The groups that the user belongs to.
     */
    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_members', 'user_id', 'group_id')->withTimestamps();
    }

    public function getIsOnlineAttribute()
    {
        // Assuming you have a `last_activity` column and a threshold for online status
        $threshold = now()->subMinutes(5); // User considered online if active in the last 5 minutes
        return $this->last_activity > $threshold;
    }

    public function createdTickets()
    {
        return $this->morphMany(Ticket::class, 'creator');
    }
}
