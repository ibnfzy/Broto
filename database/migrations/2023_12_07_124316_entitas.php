<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('entitas', function (Blueprint $table) {
            $table->id('id_entitas');
            $table->string('nama_entitas', 60);
            $table->char('editable', 5);
            $table->char('type_entitas', 6);
            $table->timestamp('create_datetime')->default(date('Y-m-d H:i:s'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entitas');
    }
};
