<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkPertanyaans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pertanyaans', function (Blueprint $table) {
            $table->unsignedBigInteger('jawaban_tepat_id');
            $table->unsignedBigInteger('profil_id');

            $table->foreign('jawaban_tepat_id')->references('id')->on('jawabans')->onDelete('cascade');
            $table->foreign('profil_id')->references('id')->on('profils')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pertanyaans', function (Blueprint $table) {
            $table->dropForeign('jawaban_tepat_id');
            $table->dropForeign('profil_id');
            
            $table->dropColumn('jawaban_tepat_id');
            $table->dropColumn('profil_id');
        });
    }
}
