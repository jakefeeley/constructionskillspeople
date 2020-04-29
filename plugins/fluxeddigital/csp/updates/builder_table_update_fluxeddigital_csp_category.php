<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspCategory extends Migration
{
    public function up()
    {
        Schema::rename('fluxeddigital_csp_course_category', 'fluxeddigital_csp_category');
    }
    
    public function down()
    {
        Schema::rename('fluxeddigital_csp_category', 'fluxeddigital_csp_course_category');
    }
}
