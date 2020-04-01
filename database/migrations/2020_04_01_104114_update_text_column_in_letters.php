<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTextColumnInLetters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('letters', function (Blueprint $table) {
            $table->text('wrath_text')->change();
            $table->text('sad_text')->change();
            $table->text('fear_text')->change();
            $table->text('regret_text')->change();
            $table->text('love_text')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('letters', function (Blueprint $table) {
            //
        });
    }
}
