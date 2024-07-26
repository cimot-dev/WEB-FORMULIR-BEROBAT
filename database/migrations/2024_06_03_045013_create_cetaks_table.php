<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PDF;

class CreatecetaksTable extends Migration
{
    public function up()
    {
        Schema::create('cetaks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim');
            $table->text('alamat');
            $table->string('jurusan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cetaks');
    }
}
