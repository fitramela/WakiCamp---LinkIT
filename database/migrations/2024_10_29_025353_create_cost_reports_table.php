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
        Schema::create('cost_reports', function (Blueprint $table) {
            $table->id();
            $table->string('adnet');
            $table->integer('conversion1');
            $table->integer('conversion2');
            $table->decimal('cost1', 10, 2);
            $table->decimal('cost2', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cost_reports');
    }
};
