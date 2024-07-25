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
        Schema::create('tcred', function (Blueprint $table) {
            $table->id('creid');
            $table->integer('crenrparc');
            $table->dateTime('credtinc');
            $table->boolean('crepag');
            $table->float('creval');
            $table->string('creprod', 100);
            $table->string('creloja', 100);
            $table->integer('cretotparc');
            $table->integer('creidresp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tcred');
    }
};
