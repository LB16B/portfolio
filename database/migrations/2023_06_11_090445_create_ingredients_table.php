<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recipe_id')->constrained();
            $table->text('ingredient1');
            $table->text('ingredient2');
            $table->text('ingredient3');
            $table->text('ingredient4');
            $table->text('ingredient5');
            $table->text('ingredient6');
            $table->text('ingredient7');
            $table->text('ingredient8');
            $table->text('amount1');
            $table->text('amount2');
            $table->text('amount3');
            $table->text('amount4');
            $table->text('amount5');
            $table->text('amount6');
            $table->text('amount7');
            $table->text('amount8');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredients');
    }
};
