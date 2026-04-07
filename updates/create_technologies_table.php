<?php namespace Pensoft\Technologies\Updates;

use Schema;
use Illuminate\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateTechnologiesTable Migration
 */
class CreateTechnologiesTable extends Migration
{
    public function up(): void
    {
        Schema::create('pensoft_technologies_technologies', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('tag');
            $table->string('subhead');
            $table->text('content')->nullable();
            $table->text('target_stakeholders')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pensoft_technologies_technologies');
    }
}
