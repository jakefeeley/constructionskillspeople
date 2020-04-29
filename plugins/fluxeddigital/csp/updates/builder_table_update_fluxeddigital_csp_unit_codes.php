<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspUnitCodes extends Migration
{
    public function up()
    {
        Schema::rename('fluxeddigital_csp_course_codes', 'fluxeddigital_csp_unit_codes');
        Schema::table('fluxeddigital_csp_unit_codes', function($table)
        {
            $table->string('unit_code')->change();
        });
    }
    
    public function down()
    {
        Schema::rename('fluxeddigital_csp_unit_codes', 'fluxeddigital_csp_course_codes');
        Schema::table('fluxeddigital_csp_course_codes', function($table)
        {
            $table->string('unit_code', 191)->change();
        });
    }
}
