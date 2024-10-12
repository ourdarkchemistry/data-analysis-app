<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('data_records', function (Blueprint $table) {
            $table->id();
            $table->string('field1');
            $table->string('field2');
            $table->integer('field3');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_records');
    }
}
