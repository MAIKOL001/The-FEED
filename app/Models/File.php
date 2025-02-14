<?php

namespace App\Models;

use App\Providers\RouteServiceProvider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

    class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'size',
        'location',
        'course_id',
        'user_id',
        'semester',
        'category',
        'year',
        'due_date',
        'cat_name',
        'unit_code',
        'unit_name',
    ];

   
}