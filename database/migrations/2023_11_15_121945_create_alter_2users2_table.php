<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Add global_key column
            $table->string('global_key')->unique()->nullable();
        });

        // Generate and update global_key based on the UUID value
        // Note: This assumes you have a UUID library installed
        DB::table('users')->get()->each(function ($user) {
            DB::table('users')->where('id', $user->id)->update(['global_key' => (string) \Ramsey\Uuid\Uuid::uuid4()]);
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alter_2users2');
    }
};
