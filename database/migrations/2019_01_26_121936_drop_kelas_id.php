<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropKelasId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('soals', function (Blueprint $table) {
            $table->dropForeign(['kelas_id']);
            $table->dropColumn('kelas_id');
        });
        
        Schema::table('materis', function (Blueprint $table) {
            $table->dropForeign(['kelas_id']);
            $table->dropColumn('kelas_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('soals', function (Blueprint $table) {
            $table->integer('kelas_id')->unsigned()->nullable()->after('nm_soal');
            $table->foreign('kelas_id')->references('id')->on('kelass')->onDelete('set null');
        });

        Schema::table('materis', function (Blueprint $table) {
            $table->integer('kelas_id')->unsigned()->nullable()->after('file');
            $table->foreign('kelas_id')->references('id')->on('kelass')->onDelete('set null');
        });
    }
}
