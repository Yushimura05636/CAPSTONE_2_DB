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
        Schema::create('miscellaneous_payments', function (Blueprint $table) {
            $table->id()->primary(); #MAO NING PRIMARY KEY NA COLUMN
            $table->string('Description');
            $table->date('Date');
            $table->double('Amount');
            $table->double('Retention');


            #DIN HI DAPIT TONG MGA CONSTRAINT SA FOREIGN KEY



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('miscellaneous_payments');
    }
};
