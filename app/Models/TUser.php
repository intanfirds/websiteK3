<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class TUser extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 't_users';
    protected $fillable = ['store_id', 'name', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];

    // Relasi: User belongs to a store
    public function store()
    {
        return $this->belongsTo(MStore::class, 'store_id');
    }

    // Relasi: User memiliki banyak roles (Many-to-Many)
    public function roles()
    {
        return $this->belongsToMany(MRole::class, 't_role_user', 'user_id', 'role_id');
    }

    // Relasi: User membuat banyak announcements
    public function announcements()
    {
        return $this->hasMany(TAnnouncement::class, 'user_id');
    }

    // Relasi: User membuat banyak reports
    public function reports()
    {
        return $this->hasMany(TReport::class, 'reporter_id');
    }

    // Relasi: User membuat banyak comments
    public function reportComments()
    {
        return $this->hasMany(TReportComment::class, 'user_id');
    }

    // Method untuk cek role user
    public function hasRole($roleName)
    {
        return $this->roles()->where('name', $roleName)->exists();
    }

    // Method untuk cek apakah admin
    public function isAdmin()
    {
        return $this->hasRole('admin_area');
    }

    // Method untuk cek apakah store manager
    public function isStoreManager()
    {
        return $this->hasRole('store_manager');
    }

    // Method untuk cek apakah staff
    public function isStaff()
    {
        return $this->hasRole('staff');
    }
}