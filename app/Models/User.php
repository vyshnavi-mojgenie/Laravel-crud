<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    


    protected $primaryKey = 'user_id';

    protected $appends = ['DOB','status_text','name'];

    // protected $dates = ['DOB'];

    protected $table = 'users'; 

    // protected $fillable = [
    //     'name',
    //     'email',
    //     'phone',
    //     'DOB',
    //     'status'
    // ];

    protected $guarded = [''];

    protected $hidden = ['user_id'];

    public function address(){

    return $this->hasOne(UserAddress::class,'user_id','user_id');

  }       

    public function scopeActive($query){
        return $query->where('status',1);

        }

//    public function getDOBAttribute(){
//     //  dd($value);
//     return date('Y-m-d',strtotime('DOB-formatted'));
//    }

   public function getStatusTextAttribute(){
if($status = 1) return  "Active";
else return "inactive";
}

public function setDOBAttribute($value){
$this->attributes['dob'] = date('Y-m-d',strtotime($value));
// dd(date('Y-m-d',strtotime($value)));
}




}
