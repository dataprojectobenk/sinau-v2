<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Student extends Authenticatable
{
    use HasFactory,Notifiable,HasApiTokens;


    // belongsto 
    public function ayah(){
        return $this->belongsTo(Parent::class,"ayah_id","id");
    }
    public function ibu(){
        return $this->belongsTo(Parent::class,"ibu_id","id");
    }
    public function wali(){
        return $this->belongsTo(Parent::class,"wali_id","id");
    }
    public function kelas(){
        return $this->belongsTo(Group::class,"group_id","id");
    }
}
