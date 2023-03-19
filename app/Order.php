<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class Order extends Model
{
    protected $guarded = [];
    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('qty','total_price','id','shipping_address','phone_number','buyer_id');
    }
}