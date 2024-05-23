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
        Schema::create('Candidates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone-number');

            $table->text('education history');
            $table->text('work experience');
            $table->text('skills');
            $table->string('Languages');
            $table->string('Certifications')->nullable();
            $table->string('Publications')->nullable();
            $table->string('Awards and Honors')->nullable();
            $table->string('References')->nullable();
            $table->string('soft_delete')->nullable()->default(0);
           
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
        Schema::dropIfExists('Candidates');
    }
};
