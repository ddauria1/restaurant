<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public $timestamps = false;
    protected $table = 'restaurants';
    protected $fillable = ['name','address','addressTwo','city','postcode','countryID','owner','email','telephone'];
}



