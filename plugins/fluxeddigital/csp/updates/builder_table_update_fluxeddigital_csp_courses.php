<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspCourses extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_courses', function($table)
        {
            $table->string('slug')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->string('title')->change();
            $table->string('meta_title')->change();
            $table->string('meta_description')->change();
            $table->string('accreditation')->change();
            $table->string('duration')->change();
            $table->string('valid_for')->change();
            $table->string('overview')->change();
            $table->string('attend')->change();
            $table->string('assessment')->change();
            $table->string('certification')->change();
            $table->string('information')->change();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_courses', function($table)
        {
            $table->dropColumn('slug');
            $table->increments('id')->unsigned()->change();
            $table->string('title', 191)->change();
            $table->string('meta_title', 191)->change();
            $table->string('meta_description', 191)->change();
            $table->string('accreditation', 191)->change();
            $table->string('duration', 191)->change();
            $table->string('valid_for', 191)->change();
            $table->string('overview', 191)->change();
            $table->string('attend', 191)->change();
            $table->string('assessment', 191)->change();
            $table->string('certification', 191)->change();
            $table->string('information', 191)->change();
        });
    }
}
