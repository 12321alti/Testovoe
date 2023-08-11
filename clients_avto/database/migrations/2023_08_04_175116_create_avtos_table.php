<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avtos', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('marka');
            $table->string('color');
            $table->string('gos_number');
            $table->boolean('parking')->default(0);
            $table->timestamps();

            $table->softDeletes();

            $table->unsignedBigInteger('client_id')->nullable();
            $table->index('client_id', 'avto_client_idx');
            $table->foreign('client_id', 'avto_client_fk')->on('clients')->references('id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avtos');
    }
};
