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
        Schema::create('parcel_transport', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('parcel_id')->unsigned()->nullable();
            $table->foreign('parcel_id')->references('id')->on('parcels')->onDelete('cascade');
            $table->bigInteger('transport_id')->unsigned()->nullable();
            $table->foreign('transport_id')->references('id')->on('transports')->onDelete('cascade');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parcel_transport');
    }
};
