<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNyuukinRenrakuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nyuukin_renraku', function (Blueprint $table) {
            $table->id();
            $table->string('kumi',3);
            $table->string('setai_name',30)->nullable();
            $table->string('email',100)->nullable();
            $table->string('telephone',20)->nullable();
            $table->date('furikomi_date')->nullable();
            $table->tinyInteger('bank_to')->default(0);
            $table->string('furikomi_name',30)->nullable();
            $table->string('furikomi_kingaku')->nullable();
            $table->integer('kingaku')->nullable();

            $table->tinyInteger('furikomi_method')->default(0);
            $table->tinyInteger('bank_from')->default(0);
            $table->tinyInteger('receipt')->default(0);
            $table->string('memo', 1024)->nullable();

            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nyuukin_renraku');
    }
}
