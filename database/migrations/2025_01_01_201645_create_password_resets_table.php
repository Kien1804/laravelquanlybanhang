<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tbl_resetpass', function (Blueprint $table) {
            $table->string('email');
            $table->string('token');
            $table->timestamps(); // Tự động tạo cột created_at và updated_at với kiểu timestamp
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_resetpass');
    }
};
