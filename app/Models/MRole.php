<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MRole extends Model
{
    use HasFactory;

    protected $table = 'm_roles';
    protected $fillable = ['name', 'description'];

    // Relasi: Many-to-Many dengan users melalui pivot table
    public function users()
    {
        return $this->belongsToMany(TUser::class, 't_role_user', 'role_id', 'user_id');
    }
}