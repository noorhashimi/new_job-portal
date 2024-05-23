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
        Schema::create('submit_info', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Father name');
            $table->string('Phone number');
            $table->string('email');
            $table->string('Gender');
       
            $table->string('city');
            $table->string('experience');
            $table->text('skills')->nullable();
            $table->string('cv_file')->nullable();
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
        Schema::dropIfExists('submit_info');
    }
};
