<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $table = 'companies';

    protected $fillable = [
        'name',
        'ruc',
        'slogan',
        'description',
        'website',
        'whatsapp',
        'facebook',
        'instagram',
        'logo_path',
        'color_primary',
        'email',
        'phone',
        'address',
        'plan',
        'active',
    ];
}
