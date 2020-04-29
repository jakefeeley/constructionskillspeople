<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspCourses13 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_courses', function($table)
        {
            $table->text('tags')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_courses', function($table)
        {
            $table->dropColumn('tags');
        });
    }
}
