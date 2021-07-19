<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyBankbook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bankbooks', function(Blueprint $table) {
            $table->unsignedBigInteger('meibo_id')->nullable()->change();
            $table->foreign('meibo_id')->references('id')->on('kaiins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bankbooks', function(Blueprint $table) {
            $table->dropForeign('meibo_id')->references('id')->on('kaiins');
        });
    }
}
