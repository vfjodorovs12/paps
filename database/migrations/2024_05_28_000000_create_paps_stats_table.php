<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('paps_stats', function (Blueprint $table) {
            $table->id();
            $table->string('forum_name');
            $table->integer('paps_90d')->nullable();
            $table->integer('paps_60d')->nullable();
            $table->integer('paps_30d')->nullable();
            $table->timestamp('last_on_forums')->nullable();
            $table->timestamp('last_on_jabber')->nullable();
            $table->timestamp('last_on_mumble')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('paps_stats');
    }
};
