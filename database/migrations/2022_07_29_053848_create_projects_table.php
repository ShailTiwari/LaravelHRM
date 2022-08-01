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
            $table->id();
            $table->string('title');
            $table->string('key');
            $table->date('start');
            $table->text('description');
            $table->text('icon_picture');
            $table->integer('category');
            $table->integer('lead');
            $table->integer('default_assigned');
            $table->integer('isconfirm');
            $table->text('remarks');
            $table->integer('isactive')->default(1);
            $table->integer('isdelete')->default(1);
            $table->integer('inuse')->default(1);
            $table->json('options');
            $table->integer('created_by')->default(1);
            $table->integer('updated_by')->default(1);
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
