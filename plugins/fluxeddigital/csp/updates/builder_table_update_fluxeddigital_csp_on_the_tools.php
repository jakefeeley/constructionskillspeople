<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspOnTheTools extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_on_the_tools', function($table)
        {
            $table->increments('id');
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('link')->nullable();
            $table->string('platform')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_on_the_tools', function($table)
        {
            $table->dropColumn('id');
            $table->dropColumn('title');
            $table->dropColumn('description');
            $table->dropColumn('link');
            $table->dropColumn('platform');
        });
    }
}
