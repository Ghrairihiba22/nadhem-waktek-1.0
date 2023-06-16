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
       Schema::create('email_form_submission', function (Blueprint $table) {
            $table->unsignedBigInteger('email_id');
            $table->unsignedBigInteger('form_submission_id');
             $table->string('status')->default('non');
            $table->timestamps();

            $table->foreign('email_id')->references('id')->on('emails')->onDelete('cascade');
            $table->foreign('form_submission_id')->references('id')->on('form_submissions')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    
    {
        Schema::dropIfExists('email_form_submission');
    }
    
};
