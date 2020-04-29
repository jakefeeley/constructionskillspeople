<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspCourseCategories extends Migration
{
    public function up()
    {
        Schema::rename('fluxeddigital_csp_category', 'fluxeddigital_csp_course_categories');
    }
    
    public function down()
    {
        Schema::rename('fluxeddigital_csp_course_categories', 'fluxeddigital_csp_category');
    }
}
