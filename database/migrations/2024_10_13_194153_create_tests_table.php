<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->string('name');
            $table->bigInteger('phone');
            $table->text('email');
            $table->dateTime('updated_at');
            $table->dateTime('created_at');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
};
