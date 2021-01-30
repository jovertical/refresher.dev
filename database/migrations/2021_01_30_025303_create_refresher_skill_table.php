<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefresherSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refresher_skill', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('refresher_id');
            $table->unsignedBigInteger('skill_id');
            $table->timestamps();

            $table->unique(['refresher_id', 'skill_id']);

            $table->foreign('refresher_id')
                ->references('id')
                ->on('refreshers')
                ->cascadeOnDelete();

            $table->foreign('skill_id')
                ->references('id')
                ->on('skills')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('refresher_skill');
    }
}
