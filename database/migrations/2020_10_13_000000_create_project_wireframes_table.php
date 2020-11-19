<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectWireframesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_wireframes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            /*
            $table->string('project_official_name')->nullable();
            $table->string('project_version')->nullable();
            $table->string('project_status')->nullable();
            $table->string('project_official_name')->nullable();
            */
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
        Schema::dropIfExists('project_wireframes');
    }
}
