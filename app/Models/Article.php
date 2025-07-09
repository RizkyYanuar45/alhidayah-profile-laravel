<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;
    protected $table = 'article';
    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'category_id',
        'teacher_id',
        'is_featured',
        'content'
    ];

    public function setNameAttribute($value)
    {
        $slug = Str::slug($value);
        $originalSlug = $slug;
        $count = 1;

        // Cek apakah slug sudah ada di database
        while (static::where('slug', $slug)->where('id', '!=', $this->id)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        $this->attributes['name'] = $value;
        $this->attributes['slug'] = $slug; // Gunakan slug yang sudah unik
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}
