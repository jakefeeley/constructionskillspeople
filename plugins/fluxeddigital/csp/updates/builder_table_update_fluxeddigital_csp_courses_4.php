<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspCourses4 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_courses', function($table)
        {
            $table->integer('category_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_courses', function($table)
        {
            $table->dropColumn('category_id');
        });
    }
}
