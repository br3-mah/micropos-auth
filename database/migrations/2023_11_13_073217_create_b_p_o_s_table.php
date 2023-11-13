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
        Schema::create('b_p_o_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name')->nullable();
            $table->string('c_email')->nullable();
            $table->string('c_phone')->nullable();
            $table->text('c_address')->nullable();
            $table->string('c_logo')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('xcode')->nullable();
            $table->string('pin')->nullable();
            $table->string('c_phone2')->nullable();
            $table->string('c_slogan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('b_p_o_s');
    }
};
