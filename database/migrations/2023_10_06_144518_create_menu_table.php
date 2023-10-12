<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->id('MENU_ID');
            $table->integer('PARENT_ID')->nullable();
            $table->integer('MENU_LEVEL')->nullable();
            $table->string('MENU_NAME', 60);
            $table->string('MENU_TEXT', 80)->nullable();
            $table->char('valid', 1)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('menu');
    }
}




