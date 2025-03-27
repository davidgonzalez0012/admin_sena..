<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            
            $table->unsignedBigInteger('area_id')->nullable();
            $table->unsignedBigInteger('training_center_id')->nullable();
            
            $table->foreign('area_id')
                  ->references('id')
                  ->on('areas')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            
            $table->foreign('training_center_id')
                  ->references('id')
                  ->on('training_centers')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');


           
            
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
