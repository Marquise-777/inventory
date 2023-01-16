<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class items extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'desc',
        'unit',
        'price',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
