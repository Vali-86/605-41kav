<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAwardsTable extends Migration
{
    public function up()
    {
        Schema::create('awards', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->integer('min_score');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('awards');
    }
}
