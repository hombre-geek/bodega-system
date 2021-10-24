<?php

namespace App\Models\Backend;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resource extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Relation many to many inverse (Recourses - Categories)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }
}
