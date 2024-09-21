<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerkuliahanTable extends Migration
{
    public function up()
    {
        Schema::create('perkuliahan', function (Blueprint $table) {
            $table->id('id_perkuliahan');
            $table->string('nim', 10);
            $table->string('nip', 20)->nullable();
            $table->string('kode_mk', 10);
            $table->decimal('nilai', 4, 2);
            $table->timestamps();

            $table->foreign('nim')->references('nim')->on('mahasiswa')->onDelete('cascade');
            $table->foreign('nip')->references('nip')->on('dosen')->onDelete('set null');
            $table->foreign('kode_mk')->references('kode_mk')->on('mata_kuliah')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('perkuliahan');
    }
};
