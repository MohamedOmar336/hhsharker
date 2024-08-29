<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatsAppTemplate extends Model
{
    use HasFactory;
    protected $table = 'whatsapp_templates'; // Ensure this matches your actual database table name

    protected $fillable = ['name', 'language_code', 'components'];

}
