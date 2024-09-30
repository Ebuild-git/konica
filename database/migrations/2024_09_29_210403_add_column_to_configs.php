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
        Schema::table('configs', function (Blueprint $table) {
          
            $table->integer("satisfaction")->nullable();
            $table->string('icone_satisfaction')->nullable();
            $table->string("des_satisfaction")->nullable();

            $table->integer("annee")->nullable();
            $table->string('icone_annee')->nullable();
            $table->string('des_annee')->nullable();

            $table->integer("prix")->nullable();
            $table->string('icone_prix')->nullable();
            $table->string('des_prix')->nullable();
           
            $table->text('titre_apropos')->nullable();
            $table->text('des_apropos')->nullable();
            $table->string('image_apropos')->nullable();

            $table->text('titre_apropos1')->nullable();
            $table->text('des_apropos1')->nullable();
            $table->string('image_apropos1')->nullable();

            $table->text('titre_apropos2')->nullable();
            $table->text('des_apropos2')->nullable();
            $table->string('image_apropos2')->nullable();

            $table->string('image_contact')->nullable();
            $table->string('image_shop')->nullable();
            $table->string('image_about')->nullable();
            $table->string('image_login')->nullable();
            $table->string('image_register')->nullable();


           

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('configs', function (Blueprint $table) {
            $table->dropColumn('satisfaction');
            $table->dropColumn('icone_satisfaction');
            $table->dropColumn('des_satisfaction');

            $table->dropColumn('annee');
            $table->dropColumn('icone_annee');
            $table->dropColumn('des_annee');

            $table->dropColumn('prix');
            $table->dropColumn('icone_prix');
            $table->dropColumn('des_prix');

            $table->dropColumn('titre_apropos');
            $table->dropColumn('des_apropos');
            $table->dropColumn('image_apropos');

            $table->dropColumn('titre_apropos1');
            $table->dropColumn('des_apropos1');
            $table->dropColumn('image_apropos1');

            $table->dropColumn('titre_apropos2');
            $table->dropColumn('des_apropos2');
            $table->dropColumn('image_apropos2');
            
            $table->dropColumn('image_contact');
            $table->dropColumn('image_shop');
            $table->dropColumn('image_about');
            $table->dropColumn('image_login');
            $table->dropColumn('image_register');
           

            
           
        });
    }
};
