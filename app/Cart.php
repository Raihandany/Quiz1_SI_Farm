<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class Cart extends Model
{
    protected $guarded = [];
    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('qty','total_price','id');
    }
}