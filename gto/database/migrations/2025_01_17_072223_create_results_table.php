<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('participant_id')->nullable()->constrained('participants');
            $table->foreignId('discipline_id')->nullable()->constrained('disciplines');
            $table->foreignId('event_id')->nullable()->constrained('events');
            $table->integer('score');
            $table->string('status', 50);
            $table->foreignId('award_id')->nullable()->constrained('awards');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('results');
    }
}
