<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GambarSoal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pilihans', function (Blueprint $table) {
            $table->string('gambar')->nullable()->after("soal");
            $table->string('gambar_pembahasan')->nullable()->after("pembahasan");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pilihans', function (Blueprint $table) {
            $table->dropColumn('gambar');
            $table->dropColumn('gambar_pembahasan');
        });
        
    }
    
}
