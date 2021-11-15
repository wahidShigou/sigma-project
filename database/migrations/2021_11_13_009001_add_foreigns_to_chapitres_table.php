<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignsToChapitresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chapitres', function (Blueprint $table) {
            $table
                ->foreign('formation_id')
                ->references('id')
                ->on('formations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chapitres', function (Blueprint $table) {
            $table->dropForeign(['formation_id']);
        });
    }
}
