<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'user_id', 'price', 'description'
    ];

    public function product_images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
