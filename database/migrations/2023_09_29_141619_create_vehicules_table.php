<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculesTable extends Migration {
    public function up() {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id(); // Utilisez "id()" pour définir une clé primaire auto-incrémentée
            $table->string('matricule', 16)->nullable();
            $table->bigInteger('marque_cod')->nullable();
            $table->string('chassis_num', 50)->nullable();
            $table->char('acquis_typ', 1)->nullable();
            $table->timestamp('echeance_dat')->nullable();
            $table->timestamp('circulation_dat')->nullable();
            $table->timestamp('vt_dat')->nullable();
            $table->timestamp('permis_dat')->nullable();
            $table->smallInteger('freq_vt')->nullable();
            $table->smallInteger('freq_permis')->nullable();
            $table->smallInteger('freq_assurance')->nullable();
            $table->timestamp('assurance_date')->nullable();
            $table->char('agence_cod', 4)->nullable();
            $table->char('type_affectation', 10)->nullable();
            $table->char('dossier', 20)->nullable();
            $table->smallInteger('pre_pc')->nullable();
            $table->smallInteger('pre_vt')->nullable();
            $table->smallInteger('pre_as')->nullable();
            $table->timestamp('date_acquisition')->nullable();
            $table->timestamp('date_vente')->nullable();
            $table->integer('entretien_eta');
            $table->timestamp('entretien_dat')->nullable();
            $table->smallInteger('organisme')->nullable();
            $table->char('dossier_organisme', 30)->nullable();
            $table->smallInteger('consommation')->nullable();
            $table->char('typecamion', 1)->nullable();
            // Autres colonnes
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('vehicules');
    }
}

