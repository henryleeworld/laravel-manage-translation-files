<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ltm_translations', function(Blueprint $table)
        {
	        $table->collation = 'utf8mb4_bin';
            $table->id();
            $table->integer('status')->default(0);
            $table->string('locale');
            $table->string('group');
            $table->text('key');
            $table->text('value')->nullable();
            $table->timestamps();
        });
	}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('ltm_translations');
	}
};
