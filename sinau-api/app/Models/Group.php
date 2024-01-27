<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    // has many
    public function siswa(){
        return $this->hasMany(Student::class,"group_id","id");
    }
}
