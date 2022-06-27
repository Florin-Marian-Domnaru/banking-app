<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

Class Transaction extends Authenticatable
{
    protected $fillable = [
        'id',
        'sender',
        'amount',
        'receiver',
        'created_at',
        'updated_at',
    ];
}