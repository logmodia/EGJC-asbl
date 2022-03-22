<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id('member_id');
            $table->string('firstname')->notnull();
            $table->string('lastname')->notnull();
            $table->string('gender')->notnull();
            $table->string('photo')->default('images/members/default.jpg');
            $table->date('birthday');
            $table->timestamps();

            $table->unique(['firstname', 'lastname']);

            $table->foreignId('memberCateg_id')
            ->references('memberCateg_id')
            ->on('member_categories')
            ->nullable()
            ->ondelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
