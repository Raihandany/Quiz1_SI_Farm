<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cart;
class Product extends Model
{
  
    protected $fillable = [
        'name', 'desc', 'price','qty','type','img'
    ];

    public function carts()
    {
        return $this->belongsToMany(Cart::class)->withPivot('qty','total_price');
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('qty','total_price','shipping_address','phone_number','buyer_id');
    }
    public function profiles(){
        return $this->belongsToMany('App\Profile');
    }
  
}