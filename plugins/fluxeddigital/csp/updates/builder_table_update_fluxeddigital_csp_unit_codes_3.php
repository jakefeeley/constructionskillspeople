<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspUnitCodes3 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_unit_codes', function($table)
        {
            $table->string('unit_code')->change();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_unit_codes', function($table)
        {
            $table->string('unit_code', 191)->change();
        });
    }
}
