<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Participant extends Authenticatable
{
    use Notifiable;  // для отправки уведомлений

    // Указываем, какие поля доступны для массового присваивания
    protected $fillable = ['full_name', 'birth_date', 'gender', 'medical_approval', 'email', 'password'];
}

