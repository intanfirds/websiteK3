<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MRegulation extends Model
{
    use HasFactory;

    protected $table = 'm_regulations';
    protected $fillable = ['title', 'category', 'body', 'file_path'];
}