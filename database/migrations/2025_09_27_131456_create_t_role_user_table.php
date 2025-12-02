<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('t_role_user', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('t_users')->onDelete('cascade');
            $table->foreignId('role_id')->constrained('m_roles')->onDelete('cascade');
            $table->primary(['user_id', 'role_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('t_role_user');
    }
};