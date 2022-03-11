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
        Schema::create('business_items', function (Blueprint $table) {
            $table->id();
            $table->string("span");
            $table->string("h2");
            $table->string("p_description");
            $table->string("img_path");
            $table->text("p_lorem");
            $table->string("href");
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
        Schema::dropIfExists('business_items');
    }
};
