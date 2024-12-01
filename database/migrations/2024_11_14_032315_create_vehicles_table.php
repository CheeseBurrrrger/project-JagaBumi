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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id_vehicle');
            $table->string('manufacturer', 20); 
            $table->string('vehicle_type', 20);
            $table->string('vehicle_category', 20);            
            $table->integer('engine_capacity');
            $table->integer('vehicle_year');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      
            // $table->dropColumn('id_vehicle');
            Schema::dropIfExists('vehicles');
      
        
    }
};
