<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TReportComment extends Model
{
    use HasFactory;

    protected $table = 't_report_comments';
    protected $fillable = ['report_id', 'user_id', 'comment'];

    // Relasi: Comment belongs to a report
    public function report()
    {
        return $this->belongsTo(TReport::class, 'report_id');
    }

    // Relasi: Comment dibuat oleh user
    public function user()
    {
        return $this->belongsTo(TUser::class, 'user_id');
    }
}