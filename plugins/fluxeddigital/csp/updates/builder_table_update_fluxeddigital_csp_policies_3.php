<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspPolicies3 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_policies', function($table)
        {
            $table->dropColumn('file');
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_policies', function($table)
        {
            $table->text('file')->nullable();
        });
    }
}
