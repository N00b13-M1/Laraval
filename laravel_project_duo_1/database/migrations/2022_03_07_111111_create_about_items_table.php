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
        Schema::create('about_items', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('projectsFinished');
            $table->string('happyClients');
            $table->string('awards');
            $table->text('description');
            $table->string('button');
            $table->string('button_link');
            $table->string('span');
            $table->string('span_href');
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
        Schema::dropIfExists('about_items');
    }
};
