<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            
            $table->string('project_type')->nullable()->changeable();
            $table->date('startdate')->nullable()->changeable();
            $table->date('enddate')->nullable()->changeable();
            $table->integer('duration')->length(11)->nullable()->changeable();
            $table->decimal('cost', 10, 2)->nullable()->changeable();
            $table->string('client')->nullable()->changeable();
            $table->string('status')->nullable()->changeable();
            $table->string('progress')->nullable()->changeable();

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
   
        Schema::dropIfExists('projects');
    }
}
