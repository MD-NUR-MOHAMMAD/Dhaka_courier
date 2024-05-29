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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name');
            $table->string('nid')->unique();
            $table->string('mobile')->unique();
            $table->enum('status', [1, 0])->default(1);
            $table->text('address');
            $table->date('join_date');
            $table->enum('shift', ['A', 'B']);
            $table->string('branch');
            $table->text('designation');
            $table->integer('salary');
            $table->text('leave_absent');
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
