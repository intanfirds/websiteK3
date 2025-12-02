<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TAnnouncement extends Model
{
    use HasFactory;

    protected $table = 't_announcements';
    protected $fillable = ['store_id', 'user_id', 'title', 'content', 'category', 'is_urgent', 'expiry_date'];

    // Relasi: Announcement belongs to a store
    public function store()
    {
        return $this->belongsTo(MStore::class, 'store_id');
    }

    // Relasi: Announcement dibuat oleh user
    public function user()
    {
        return $this->belongsTo(TUser::class, 'user_id');
    }
}