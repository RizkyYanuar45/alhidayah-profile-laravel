<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $table = 'major';
    protected $fillable = [
        
        'name',
        'image',
        'description',
        'elearning',
    ];
}
