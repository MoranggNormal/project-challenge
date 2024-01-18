<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'year',
        'owner_id',
        'image_url'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

        public function revisions()
    {
        return $this->hasMany(Revision::class);
    }
    
}
