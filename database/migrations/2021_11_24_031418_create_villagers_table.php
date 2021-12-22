<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVillagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //if(Schema::hasTable('villagers')) return;
        Schema::create('villagers', function (Blueprint $table) {
            $table->integer('id',true)->unsigned()->comment('編號');
            $table->string('name',191)->comment('名字');
            $table->integer('cid')->unsigned()->comment('職業編號');;
            $table->foreign('cid')->references('id')->on('classes')->onDelete('cascade');
            $table->string('gender',191)->comment('性別');
            $table->integer('press')->unsigned()->comment('抗壓性');
            $table->string('plus',191)->comment('改造程度');
            $table->double('monster')->unsigned()->comment('魔化氯');
            $table->double('lead')->unsigned()->comment('含鉛量');
            $table->rememberToken();
            $table->timestamps();
            //$table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('villagers');
    }
}
