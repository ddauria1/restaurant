<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public $timestamps = false;
    protected $table = 'restaurants_link_staff';
    protected $fillable = ['id','restaurantID','uid','active','created','updated'];
}



