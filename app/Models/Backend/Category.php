<?php

namespace App\Models\Backend;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];


    //  Relation Many to Many (Categories - Resources)
    public function resources()
    {
        return $this->hasMany(Resource::class);
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

}
