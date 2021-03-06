<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFluxeddigitalCspCourseCodes extends Migration
{
    public function up()
    {
        Schema::create('fluxeddigital_csp_course_codes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fluxeddigital_csp_course_codes');
    }
}
