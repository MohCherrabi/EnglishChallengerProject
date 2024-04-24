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
        Schema::create("teachers",function(Blueprint $table){
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('picture');
            $table->string('phone');
            $table->string('linkdin');
            $table->string('city');
            $table->string('description_education_background');
            $table->integer('year_experience');
            $table->string('cv');
            $table->boolean('isAdmin')->default(1);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->softDeletes();

            $table->timestamps();

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
