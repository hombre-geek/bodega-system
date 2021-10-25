<?php

namespace App\Models\Backend;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    // To date format for created_at field    
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

    //  Relation Many to Many (Categories - Resources Tables)
    public function resources()
    {
        return $this->hasMany(Resource::class);
    }

    

}
