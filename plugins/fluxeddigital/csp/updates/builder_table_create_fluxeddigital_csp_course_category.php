<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFluxeddigitalCspCourseCategory extends Migration
{
    public function up()
    {
        Schema::create('fluxeddigital_csp_course_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fluxeddigital_csp_course_category');
    }
}
