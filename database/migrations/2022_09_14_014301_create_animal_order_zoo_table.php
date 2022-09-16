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
        Schema::create('animal_order_zoo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('animal_order_id')
                ->constrained('animal_orders')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('zoo_id')
                ->constrained('zoos')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
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
        Schema::dropIfExists('animal_order_zoo');
    }
};
