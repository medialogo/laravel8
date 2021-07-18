<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bankbooks', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('bank_id')->default(0);
            $table->integer('transact_id')->default(1);
            $table->date('trans_date');
            $table->string('trans_type',5);
            $table->integer('amount')->default(0);
            $table->string('trans_text',100)->nullable();
            $table->string('kumi',30)->nullable();
            $table->string('name_sei',30)->nullable();
            $table->string('name_mei',30)->nullable();
            $table->string('phone',30)->nullable();
            $table->integer('balance')->nullable();
            $table->tinyInteger('notice')->nullable();
            $table->tinyInteger('done')->nullable();
            $table->integer('meibo_id')->nullable();
            $table->integer('notice_id')->nullable();
            $table->string('bank_from',20)->nullable();
            $table->string('branch_from',20)->nullable();
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
        Schema::dropIfExists('bankbooks');
    }
}
