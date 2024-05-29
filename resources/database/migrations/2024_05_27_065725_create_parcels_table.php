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
        Schema::create('parcels', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('weight');
            $table->integer('width');
            $table->integer('height');
            $table->integer('numberofbox');
            $table->integer('gross_amount');
            $table->integer('discount');
            $table->integer('net_amount');
            $table->date('desiredate');
            $table->string('from');
            $table->string('to');
            $table->text('description');
            $table->set('status', ['processing','received'])->default('processing');
            $table->set('roles', ['regular', 'argent','expensive'])->default('regular');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parcels');
    }
};
