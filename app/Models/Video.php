<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'main_title', 'title', 'video', 'file', 'course_id', 'created_at', 'updated_at'];
}
