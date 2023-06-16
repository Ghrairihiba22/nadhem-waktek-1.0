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
    {Schema::create('emails', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('form_submission_id');
        $table->string('email');
        $table->timestamps();

        $table->foreign('form_submission_id')->references('id')->on('form_submissions')->onDelete('cascade');
    });
}

public function down()
{
    Schema::dropIfExists('emails');
}
};
