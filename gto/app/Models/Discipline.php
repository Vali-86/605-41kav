<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    use HasFactory;

    // Указываем, какие поля могут быть массово присвоены
    protected $fillable = ['name', 'description', 'max_score'];
}
