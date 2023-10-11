<?php namespace Pensoft\Technologies\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTechnologyProfilesTable extends Migration
{
    public function up()
    {
        Schema::create('pensoft_technologies_technology_profiles', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('technology_id')->unsigned();
            $table->integer('profile_id')->unsigned();
            $table->primary(['technology_id', 'profile_id']);

            $table->foreign('technology_id')
                ->references('id')->on('pensoft_technologies_technologies')
                ->onDelete('cascade');

            $table->foreign('profile_id')
                ->references('id')->on('pensoft_cardprofiles_items')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pensoft_technologies_technology_profiles');
    }
}
