<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TReport extends Model
{
    use HasFactory;

    protected $table = 't_reports';
    protected $fillable = [
        'store_id', 'reporter_id', 'title', 'description', 'report_type', 
        'location', 'status', 'priority', 'image_path', 'admin_notes', 'resolved_at'
    ];

    protected $casts = [
        'resolved_at' => 'datetime',
    ];

    // Relasi: Report belongs to a store
    public function store()
    {
        return $this->belongsTo(MStore::class, 'store_id');
    }

    // Relasi: Report dibuat oleh reporter (user)
    public function reporter()
    {
        return $this->belongsTo(TUser::class, 'reporter_id');
    }

    // Relasi: Report memiliki banyak comments
    public function comments()
    {
        return $this->hasMany(TReportComment::class, 'report_id');
    }
}