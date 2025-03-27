<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('apprentices', function (Blueprint $table) {
            $table->id();

            $table->string ('name');
            $table->string('email');
            $table->integer('cell_number');

            $table->unsignedBiginteger('course_id')->nullable();
            $table->unsignedBiginteger('computer_id')->nullable();


            $table-> foreign('course_id')->references('id')->on ('courses')
            -> ondelete('cascade')
            -> onupdate('cascade');
            $table-> foreign('computer_id')->references('id')->on ('computers')
            -> ondelete('cascade')
            -> onupdate('cascade');


            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('apprentices');
    }
};
