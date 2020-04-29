<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspCourseCategories2 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_course_categories', function($table)
        {
            $table->text('description')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_course_categories', function($table)
        {
            $table->string('description', 191)->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
