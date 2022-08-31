<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;
    protected $primaryKey = 'address_id';
    public function user(){

        return $this->belongsTo(User::class,'use_id','user_id');
    }
}
