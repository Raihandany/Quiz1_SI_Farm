<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::created(function($profile){
            $profile->cart()->create();
            $profile->order()->create();
        });
        static::deleted(function($profile){
            $profile->cart()->delete();
            $profile->order()->delete();
        });
    }


    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function cart()
    {
        return $this->hasOne('App\Cart');
    }
    public function order() /** Has One Order Table where order table consists of products (like cart) */
    {
        return $this->hasOne('App\Order');
    }
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}