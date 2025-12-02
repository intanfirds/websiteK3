<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('t_announcements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('store_id')->constrained('m_stores')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('t_users')->onDelete('cascade');
            $table->string('title');
            $table->text('content');
            $table->string('category');
            $table->boolean('is_urgent')->default(false);
            $table->timestamp('expiry_date')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('t_announcements');
    }
};