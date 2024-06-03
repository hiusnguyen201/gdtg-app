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
        Schema::create('user_otp', function (Blueprint $table) {
            $table->id();
            $table->string('otp', 15);
            $table->string('token', 64);
            $table->foreignId("user_id")->references("id")->on("users");
            $table->timestamp("expire_at");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_otp');
    }
};
