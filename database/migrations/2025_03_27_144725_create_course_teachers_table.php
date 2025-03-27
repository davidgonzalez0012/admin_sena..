<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('course_teachers', function (Blueprint $table) {
            $table->id();
 
        $table->unsignedBigInteger('course_id');
        $table->unsignedBigInteger('teacher_id');
        
        $table->foreign('course_id')
            ->references('id')
            ->on('courses')
            ->onDelete('cascade');
        
        $table->foreign('teacher_id')
            ->references('id')
            ->on('teachers')
            ->onDelete('cascade');
        
        $table->timestamps();
    });
}
      

   
    public function down(): void
    {
        Schema::dropIfExists('course_teachers');
    }
};
