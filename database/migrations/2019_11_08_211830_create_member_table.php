<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->bigInteger('mem_no');
            $table->string('name',32);
            $table->date('dom');
            $table->string('address',200);
            $table->string('aadhar',14);
            $table->string('gender',6);
            $table->bigInteger('mobile');
            $table->string('category',6);
            $table->string('occupation',100);
            $table->string('bgroup',4);
            $table->boolean('mc');
            $table->integer('age');
            $table->string('acc_no',32);
            $table->float('amt',10,4);

            $table->primary('mem_no');
            $table->unique('mobile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member');
    }
}
