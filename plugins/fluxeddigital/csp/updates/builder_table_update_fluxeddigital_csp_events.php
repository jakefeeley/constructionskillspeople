<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspEvents extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_events', function($table)
        {
            $table->string('delegates');
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_events', function($table)
        {
            $table->dropColumn('delegates');
        });
    }
}
