<?php namespace Pensoft\Technologies\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePartnerTechnologyTable extends Migration
{
    public function up()
    {
        Schema::create('pensoft_technologies_partner_technology', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('technology_id')->unsigned();
            $table->integer('partner_id')->unsigned();
            $table->primary(['technology_id', 'partner_id']);

            $table->foreign('technology_id')->references('id')->on('pensoft_technologies_technologies')->onDelete('cascade');
            $table->foreign('partner_id')->references('id')->on('pensoft_partners_partners')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pensoft_technologies_partner_technology');
    }
}
