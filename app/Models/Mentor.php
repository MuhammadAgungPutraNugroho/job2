<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
    ];
    use HasFactory;
}
