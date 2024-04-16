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
        Schema::create('compare_list', function (Blueprint $table) {
            $table->id('compare_item_id');
            $table->string('compare_item_name');
            $table->string('compare_item_brand');
            $table->text('compare_item_description');
            $table->string('compare_item_price');
            $table->text('compare_item_image');
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
        Schema::dropIfExists('compare_list');
    }
};
