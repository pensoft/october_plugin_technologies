<?php use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class UpdateTechnologiesTable extends Migration
{
    public function up()
    {
        Schema::table('pensoft_technologies_technologies', function(Blueprint $table)
        {
            $table->integer('sort_order')->nullable();
        });
    }

    public function down()
    {
        Schema::table('pensoft_technologies_technologies', function(Blueprint $table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
