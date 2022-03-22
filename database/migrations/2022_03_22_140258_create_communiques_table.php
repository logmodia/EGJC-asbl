<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommuniquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communiques', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->date('expiration');
            $table->timestamps();

            $table->foreignId('newscategory_id')->constrained('newscategories')->onDelete('cascade');
            $table->foreignId('member_id')->references('member_id')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('communiques');
    }
}
