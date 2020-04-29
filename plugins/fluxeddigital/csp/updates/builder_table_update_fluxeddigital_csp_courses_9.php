<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspCourses9 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_courses', function($table)
        {
            $table->dropColumn('specification');
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_courses', function($table)
        {
            $table->string('specification', 191);
        });
    }
}
