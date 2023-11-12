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
        Schema::table('users', function (Blueprint $table) {
            $table->string('is_type')->default('buyer');
            $table->string("seller_name")->nullable();
            $table->text("seller_address")->nullable();
            $table->text("seller_address2")->nullable();
            $table->text("seller_address3")->nullable();
            $table->string("seller_size")->nullable();
            $table->string("seller_city")->nullable();
            $table->string("seller_country")->default('Zambia');
            $table->string("seller_phone")->nullable();
            $table->string("seller_phone2")->nullable();
            $table->string("seller_phone3")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
