<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspCourses2 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_courses', function($table)
        {
            $table->string('who_should_attend')->nullable();
            $table->string('title')->change();
            $table->string('meta_title')->change();
            $table->string('meta_description')->change();
            $table->string('accreditation')->change();
            $table->string('duration')->change();
            $table->string('valid_for')->change();
            $table->string('overview')->change();
            $table->string('assessment')->change();
            $table->string('certification')->change();
            $table->string('information')->change();
            $table->string('slug')->change();
            $table->dropColumn('attend');
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_courses', function($table)
        {
            $table->dropColumn('who_should_attend');
            $table->string('title', 191)->change();
            $table->string('meta_title', 191)->change();
            $table->string('meta_description', 191)->change();
            $table->string('accreditation', 191)->change();
            $table->string('duration', 191)->change();
            $table->string('valid_for', 191)->change();
            $table->string('overview', 191)->change();
            $table->string('assessment', 191)->change();
            $table->string('certification', 191)->change();
            $table->string('information', 191)->change();
            $table->string('slug', 191)->change();
            $table->string('attend', 191)->nullable();
        });
    }
}
