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
        Schema::table('submit_info', function (Blueprint $table) {
            $table->string('home_location');
            $table->string('levalof_education');
           
            $table->string('language');
            $table->string('employment_status');
            $table->string('cover_latter');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('submit_info', function (Blueprint $table) {
            $table->dropColumn('home_location');
            $table->dropColumn('levalof_education');
       
            $table->dropColumn('language');
            $table->dropColumn('employment_status');
            $table->dropColumn('cover_latter');
        
        });
    }
};
