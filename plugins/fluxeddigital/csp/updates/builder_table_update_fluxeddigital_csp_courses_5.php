<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspCourses5 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_courses', function($table)
        {
            $table->string('aims');
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_courses', function($table)
        {
            $table->dropColumn('aims');
        });
    }
}
