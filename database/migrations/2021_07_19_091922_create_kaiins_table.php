<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaiinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kaiins', function (Blueprint $table) {
            $table->id();
            $table->string('kumi',3);
            $table->tinyInteger('kumi_no')->default(1);
            $table->string('fullname',30)->nullable();
            $table->string('fullname_kana',50)->nullable();
            $table->date('nyukin_date')->nullable();
            $table->integer('kingaku')->nullable();
            $table->tinyInteger('bank_id')->nullable();
            $table->string('memo1', 100)->nullable();
            $table->string('memo2', 100)->nullable();
            $table->string('name_sei',30)->nullable();
            $table->string('name_mei',10)->nullable();
            $table->string('name_sei_kana',50)->nullable();
            $table->string('name_mei_kana',10)->nullable();

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
        Schema::dropIfExists('kaiins');
    }
}
