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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string("last_name");
            $table->string("given_name");
            $table->integer("age");
            $table->string("telephone");
            $table->string("email");
            $table->string("gender");
            $table->string("country_of_origin");
            $table->foreignId("position_id")->constrained("positions", "id");
            $table->foreignId("team_id")->constrained("teams", "id");
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
        Schema::dropIfExists('players');
    }
};
