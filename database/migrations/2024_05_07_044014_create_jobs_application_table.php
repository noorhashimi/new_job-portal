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
        Schema::create('jobs_application', function (Blueprint $table) {
            $table->id();
            $table->string('job_id');
            $table->string('user_id');
            $table->string('employer_id');
            $table->timestamp('applied_date');
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
        Schema::dropIfExists('jobs_application');
    }
};
