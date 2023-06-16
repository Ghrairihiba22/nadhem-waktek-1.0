<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{ /*
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('form_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('color');
            $table->string('message');
            $table->datetime('start_date')->nullable();
            $table->datetime('end_date')->nullable();
             $table->string('lien')->nullable();
              $table->string('email')->nullable();
            
               $table->string('note')->nullable();
              
            $table->timestamps();
        });
    }
    
    /*
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_submissions');
      
    }
};
