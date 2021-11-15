<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignsToFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('formations', function (Blueprint $table) {
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users');

            $table
                ->foreign('categorie_id')
                ->references('id')
                ->on('categories');

            $table
                ->foreign('type_formation_id')
                ->references('id')
                ->on('type_formations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('formations', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['categorie_id']);
            $table->dropForeign(['type_formation_id']);
        });
    }
}
