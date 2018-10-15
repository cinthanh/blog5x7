<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //$table->integer('product_id')->unsigned()->index();
        //$table->integer('user_id')->unsigned()->index();
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('account_id')->unsigned();
            $table->index('account_id'); // index field
            $table->string('name');
            $table->string('url');
            $table->string('icon')->nullable();
            $table->timestamps();
            $table->foreign('account_id')->references('id')->on('accounts');// create a relationship
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
