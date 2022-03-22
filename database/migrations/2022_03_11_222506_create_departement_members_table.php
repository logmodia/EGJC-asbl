<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartementMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departement_member', function (Blueprint $table) {
            $table->id();
            $table->date('startdate')->nullable();
            $table->date('enddate')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
    
            $table->foreignId('member_id')->references('member_id')->on('members')->onDelete('CASCADE');
            $table->foreignId('dep_id')->references('dep_id')->on('departements')->onDelete('CASCADE');
            $table->foreignId('memberRole_id')->references('memberRole_id')->on('member_roles');

            $table->unique(['member_id','dep_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departement_member');
    }
}
