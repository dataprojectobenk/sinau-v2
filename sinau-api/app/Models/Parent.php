<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parent extends Model
{
    use HasFactory;



    // has many
    public function anak_ayah(){
        return $this->hasMany(Student::class,"ayah_id","id");
    }
    public function anak_ibu(){
        return $this->hasMany(Student::class,"ibu_id","id");
    }
    public function anak_wali(){
        return $this->hasMany(Student::class,"wali_id","id");
    }
}
