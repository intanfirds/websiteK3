<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MCaution extends Model
{
    use HasFactory;

    protected $table = 'm_cautions';
    protected $fillable = ['title', 'meaning', 'potential_danger', 'installation_location', 'image_path'];
}