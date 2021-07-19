<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndecesBankbooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bankbooks', function(Blueprint $table) {
            $table->index('bank_id');
            $table->index('trans_date');
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
            $table->dropIndex('bank_id');
            $table->index('trans_date');
        });
    }
}
