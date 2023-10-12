<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDroitsTable extends Migration
{
    public function up()
    {
        Schema::create('droits', function (Blueprint $table) {
            $table->integer('MENU_ID');
            $table->integer('USER_ID');
            $table->char('ACCES', 1)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('droits');
    }
}
