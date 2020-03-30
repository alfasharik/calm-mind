<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('letters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');

            $table->string('wrath_text');
            $table->string('sad_text');
            $table->string('fear_text');
            $table->string('regret_text');
            $table->string('love_text');

            $table->string('to_whom');

            $table->string('date_created_at');
            $table->string('is_open');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('letters');
    }
}
