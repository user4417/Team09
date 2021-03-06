<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //if(Schema::hasTable('classes')) return;
        Schema::create('classes', function (Blueprint $table) {
            $table->integer('id',true,true)->comment('編號');
            $table->string('name',100)->comment('職業');
            $table->integer('easy')->comment('輕鬆度');
            $table->integer('love')->comment('榮譽等級');
            $table->string('sp',100)->comment('特有技能');
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
        Schema::dropIfExists('classes');
    }
}
