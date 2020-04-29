<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspOnTheTools2 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_on_the_tools', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->string('platform')->change();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_on_the_tools', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->string('platform', 191)->change();
        });
    }
}
