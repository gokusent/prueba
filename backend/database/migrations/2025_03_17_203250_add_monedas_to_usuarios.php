<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->integer('monedas')->default(0)->after('password'); // Agregar monedas con un valor inicial de 0
        });
    }

    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->dropColumn('monedas');
        });
    }
};
