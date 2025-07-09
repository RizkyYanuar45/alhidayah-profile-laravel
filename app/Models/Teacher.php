<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Teacher extends Authenticatable
{
    use HasFactory;

    protected $table = 'teacher';
    protected $fillable = [
        'name',
        'jabatan',
        'email',
        'password',
        'avatar',
        'slug',
    ];
    // Mutator untuk mengatur nama dan slug
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    public function news(): HasMany {
        return $this->hasMany(Article::class);
    }
}
