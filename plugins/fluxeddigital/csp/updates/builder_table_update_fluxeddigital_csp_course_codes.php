<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspCourseCodes extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_course_codes', function($table)
        {
            $table->string('unit_code')->nullable();
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_course_codes', function($table)
        {
            $table->dropColumn('unit_code');
            $table->increments('id')->unsigned()->change();
        });
    }
}
