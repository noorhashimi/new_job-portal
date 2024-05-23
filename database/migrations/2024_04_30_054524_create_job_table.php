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
        Schema::create('job', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('category_id');
            $table->string('job_type_id');
            $table->string('announced_date');
            $table->string('job_location');
            $table->string('nationality');
            $table->string('salary')->nullable();
            $table->string('vacancy_number');
            $table->integer('no_of_Jobs');
            $table->string('city');
            $table->string('organization')->nullable();
            $table->text('company_info')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_location');
            $table->string('company_website')->nullable();
            $table->text('responsibility')->nullable();
            $table->string('close_date')->nullable();
            $table->string('experience')->nullable();
            $table->string('contact_duration')->nullable();
            $table->string('gender');
            $table->text('education')->nullable();
            $table->text('job_description')->nullable();
            $table->text('job_requirement')->nullable();
            $table->text('submission_guide_line');
            $table->string('submission_email');
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
        Schema::dropIfExists('job');
    }
};
