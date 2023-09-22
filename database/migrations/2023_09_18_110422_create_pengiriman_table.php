<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengirimanTable extends Migration
{
    public function up()
    {
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->id('id_pengiriman');
            $table->unsignedBigInteger('id_kurir');
            $table->unsignedBigInteger('id_truck');
            $table->timestamps();

            
            $table->foreign('id_kurir')->references('id_kurir')->on('kurir');
            $table->foreign('id_truck')->references('id_truck')->on('truck');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengiriman');
    }
}