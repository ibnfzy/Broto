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
        Schema::create('broto_account', function (Blueprint $table) {
            $table->id('id_account');
            $table->string('username', 13);
            $table->text('fullname');
            $table->text('password');
            $table->date('last_login');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('broto_account');
    }
};
