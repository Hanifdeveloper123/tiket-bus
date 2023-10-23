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
        Schema::create('trayek', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bus_id')->unsigned();
            $table->date('tanggal');
            $table->string('asal');
            $table->string('tujuan');
            $table->string('jam_berangkat');
            $table->string('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trayek');
    }
};
