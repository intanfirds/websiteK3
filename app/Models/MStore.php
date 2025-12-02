<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MStore extends Model
{
    use HasFactory;

    protected $table = 'm_stores';
    protected $fillable = ['code', 'name', 'address', 'is_active'];

    // Relasi: 1 store memiliki banyak users
    public function users()
    {
        return $this->hasMany(TUser::class, 'store_id');
    }

    // Relasi: 1 store memiliki banyak announcements
    public function announcements()
    {
        return $this->hasMany(TAnnouncement::class, 'store_id');
    }

    // Relasi: 1 store memiliki banyak reports
    public function reports()
    {
        return $this->hasMany(TReport::class, 'store_id');
    }
}