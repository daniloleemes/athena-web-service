<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuildEmblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guild_emblems', function (Blueprint $table) {
            $table->integer('guild_id');
            $table->string('world_name');
            $table->string('file_name');
            $table->integer('version');

            $table->index('guild_id');
            $table->index('world_name');
            $table->unique([
                'guild_id', 'world_name'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guild_emblems');
    }
}
