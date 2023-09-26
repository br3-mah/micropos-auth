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
        Schema::create('user_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('business_type')->nullable();
            $table->string('fullname')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->date('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('languages')->nullable();
            $table->string('employement')->nullable();
            $table->string('service')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
