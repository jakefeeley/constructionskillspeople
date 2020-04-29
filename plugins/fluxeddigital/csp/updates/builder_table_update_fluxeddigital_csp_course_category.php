<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspCourseCategory extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_course_category', function($table)
        {
            $table->string('slug')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->string('title')->change();
            $table->string('description')->change();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_course_category', function($table)
        {
            $table->dropColumn('slug');
            $table->increments('id')->unsigned()->change();
            $table->string('title', 191)->change();
            $table->string('description', 191)->change();
        });
    }
}
