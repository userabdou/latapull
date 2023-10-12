<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDroitsProfileTable extends Migration
{
    public function up()
    {
        Schema::create('droits_profile', function (Blueprint $table) {
            $table->integer('MENU_ID');
            $table->integer('GROUP_ID');
            $table->char('ACCES', 1)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('droits_profile');
    }
}
