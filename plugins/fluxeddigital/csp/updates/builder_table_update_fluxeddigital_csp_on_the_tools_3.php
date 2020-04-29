<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspOnTheTools3 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_on_the_tools', function($table)
        {
            $table->string('slug')->nullable();
            $table->string('platform')->change();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_on_the_tools', function($table)
        {
            $table->dropColumn('slug');
            $table->string('platform', 191)->change();
        });
    }
}
