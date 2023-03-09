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
        Schema::create('webinars', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->required();
            $table->string('description', 255)->required();
            $table->string('speaker', 255)->required();
            $table->string('moderator', 255)->required();
            $table->integer('quota')->unsigned()->default(0);
            $table->dateTime('registration_date')->nullable();
            $table->dateTime('end_registration_date')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->foreignId('category_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('set NULL');
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
        Schema::dropIfExists('webinars');
    }
};
