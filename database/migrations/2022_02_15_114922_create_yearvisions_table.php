<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYearvisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yearvisions', function (Blueprint $table) {
            $table->id('yearvision_id');
            $table->integer('year');
            $table->string('subject');
            $table->mediumText('details')->nullable();
            $table->timestamps();

            $table->unique('year');
            $table->unique('subject');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yearvisions');
    }
}
