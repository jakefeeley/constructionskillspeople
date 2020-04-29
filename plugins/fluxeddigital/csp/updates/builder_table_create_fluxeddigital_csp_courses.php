<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFluxeddigitalCspCourses extends Migration
{
    public function up()
    {
        Schema::create('fluxeddigital_csp_courses', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('accreditation')->nullable();
            $table->string('duration')->nullable();
            $table->string('valid_for')->nullable();
            $table->string('overview')->nullable();
            $table->string('attend')->nullable();
            $table->string('assessment')->nullable();
            $table->string('certification')->nullable();
            $table->string('information')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fluxeddigital_csp_courses');
    }
}
