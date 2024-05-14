<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'title', 'slug', 'about', 'duration', 'language', 'skill_level', 'deadline', 'certificate', 'categorie', 'price', 'discount', 'description', 'learn', 'requirements', 'user_id', 'created_at', 'updated_at'];
    public function vids(){
        return $this->hasMany(Video::class,'course_id');
    }
}
