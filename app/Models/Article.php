<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
class Article extends Model
{
    use HasFactory;
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
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
        $this->save(); // Tambahkan baris ini untuk menyimpan perubahan
    }
    public function category(): BelongsTo{
        return $this->belongsTo(Category::class,'category_id');
    }
    public function teacher(): BelongsTo{
        return $this->belongsTo(Teacher::class,'teacher_id');
    }
}
