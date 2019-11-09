<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claim', function (Blueprint $table) {
            $table->integer('mem_no');
            $table->string('name',32);
            $table->string('aadhar',14);
            $table->string('hname',100);
            $table->string('dname',100);
            $table->bigInteger('dcode');
            $table->date('doa');
            $table->date('dod');
            $table->float('amt',10,4);
            $table->float('bamt',10,4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('claim');
    }
}
