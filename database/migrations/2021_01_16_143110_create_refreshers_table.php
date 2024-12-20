<?php

use App\Enums\RefresherStatus;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefreshersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refreshers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('slug');
            $table->string('title');
            $table->text('description');
            $table->tinyInteger('difficulty');
            $table->tinyInteger('private')->default(false);
            $table->tinyInteger('status')->default(RefresherStatus::Draft);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('refreshers');
    }
}
