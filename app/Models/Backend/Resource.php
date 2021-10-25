<?php

namespace App\Models\Backend;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resource extends Model
{
    use HasFactory;
    protected $guarded = [];

    // To date format for created_at field
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

     // To date format for asigned_at field    
     public function getAsignedAtAttribute($value)
     {
         return Carbon::parse($value)->format('d/m/Y');
     }

    // Relation many to one inverse (Recourses - Categories Tables)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relation Many to One ( User - Resources Tables )
    public function user()
    {
        return $this->belongsTo(User::class);
    }


   
}
