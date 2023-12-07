<?php

use App\Models\Entitas;
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
        Schema::create('entitas_detail', function (Blueprint $table) {
            $table->id('id_entitas_detail');
            $table->foreignIdFor(Entitas::class, 'id_entitas');
            $table->string('kolom', 60);
            $table->char('tipe_data', 7);
            $table->char('pk', 5);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entitas_detail');
    }
};
