<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'jabatan',
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
