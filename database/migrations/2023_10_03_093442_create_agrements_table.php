<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agrements', function (Blueprint $table) {
            $table->id('AGREMENT_ID');
            $table->timestamp('AGREMENT_DATE')->nullable();
            $table->string('AGREMENT_HEURE')->nullable();
            $table->string('AGREMENT_TITULAIRE', 90);
            $table->string('AGREMENT_DOSSIER', 20)->nullable();
            $table->string('AGREMENT_AUTORISATION', 20)->nullable();
            $table->string('AGREMENT_GERANT', 50)->nullable();
            $table->bigInteger('AGREMENT_VEHICUL_ID')->nullable();
            $table->bigInteger('AGREMENT_PLACES')->nullable();
            $table->string('AGREMENT_NBR_PLACES', 15)->nullable();
            $table->timestamp('AGREMENT_DATE_VALABLE')->nullable();
            $table->decimal('AGREMENT_MONTANTLOYER', 18, 2)->nullable();
            $table->string('AGREMENT_LIGNE', 40)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agrements');
    }
};
