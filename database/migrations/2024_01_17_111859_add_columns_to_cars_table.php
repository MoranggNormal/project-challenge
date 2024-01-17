<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->string('brand');
            $table->string('model');
            $table->year('year');
            $table->foreignId('owner_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn('brand');
            $table->dropColumn('model');
            $table->dropColumn('year');
            $table->dropForeign(['owner_id']);
            $table->dropColumn('owner_id');
        });
    }
}