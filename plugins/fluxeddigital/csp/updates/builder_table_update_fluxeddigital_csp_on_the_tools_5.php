<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspOnTheTools5 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_on_the_tools', function($table)
        {
            $table->text('embed')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_on_the_tools', function($table)
        {
            $table->dropColumn('embed');
        });
    }
}
