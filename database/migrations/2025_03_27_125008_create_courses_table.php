<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->integer('course_number');
            $table->string('day');

            $table->unsignedBiginteger('area_id')->nullable();
            $table->unsignedBiginteger('training_center_id')->nullable();
            $table->foreign('area_id')
            ->references('id')
            ->on ('areas')
            -> ondelete('cascade')
            ->onupdate('cascade');
            $table->foreign('training_center_id')
            ->references('id')
            ->on ('training_centers')
            -> ondelete('cascade')
            ->onupdate('cascade');
            
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
