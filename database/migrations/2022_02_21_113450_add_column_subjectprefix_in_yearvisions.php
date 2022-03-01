<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnSubjectprefixInYearvisions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('yearvisions', function (Blueprint $table) {
            $table->string('subject_prefix')->default('ANNÉE DE LA ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('yearvisions', function (Blueprint $table) {
            $table->dropColumn('subject_prefix');
        });
    }
}
