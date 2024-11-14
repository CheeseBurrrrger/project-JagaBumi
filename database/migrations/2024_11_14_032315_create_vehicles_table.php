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
            $table->string('manufacturer',length: 20); 
            $table->string('vehicle_type',length: 20);
            $table->string('vehicle_category',length: 20);            
            $table->integer('engine_capacity');
            $table->integer('vehicle_year');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('vehicles',function (Blueprint $table){
            $table->dropColumn('id_vehicle');
            Schema::dropIfExists('cehicles');
        });
        
    }
};
