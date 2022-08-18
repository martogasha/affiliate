<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('placement')->nullable();
            $table->string('product_name');
            $table->longText('product_desc');
            $table->longText('amazon_link');
            $table->longText('ebay_link');
            $table->longText('product_link')->nullable();
            $table->mediumText('image_one')->nullable();
            $table->mediumText('image_two')->nullable();
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
        Schema::dropIfExists('contents');
    }
}
