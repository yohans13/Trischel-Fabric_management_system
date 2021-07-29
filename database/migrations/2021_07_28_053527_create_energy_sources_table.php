<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnergySourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('energy_sources', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->string('jan')->nullable();
            $table->string('feb')->nullable();
            $table->string('mar')->nullable();
            $table->string('aprl')->nullable();
            $table->string('may')->nullable();
            $table->string('june')->nullable();
            $table->string('july')->nullable();
            $table->string('aug')->nullable();
            $table->string('sep')->nullable();
            $table->string('oct')->nullable();
            $table->string('nov')->nullable();
            $table->string('dec')->nullable(); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('energy_sources');
    }
}
