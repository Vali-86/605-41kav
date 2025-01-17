<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    // Указываем, какие поля доступны для массового присваивания
    protected $fillable = ['full_name', 'birth_date', 'gender', 'medical_approval'];
}
