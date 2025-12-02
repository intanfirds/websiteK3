<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('t_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('store_id')->constrained('m_stores')->onDelete('cascade');
            $table->foreignId('reporter_id')->constrained('t_users')->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->enum('report_type', ['insiden', 'near_miss', 'kondisi_tidak_aman', 'saran']);
            $table->string('location');
            $table->enum('status', ['dilaporkan', 'diverifikasi', 'diproses', 'selesai', 'ditolak'])->default('dilaporkan');
            $table->enum('priority', ['rendah', 'sedang', 'tinggi', 'kritis'])->default('rendah');
            $table->string('image_path')->nullable();
            $table->text('admin_notes')->nullable();
            $table->timestamp('resolved_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('t_reports');
    }
};