<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspCourses3 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_courses', function($table)
        {
            $table->text('title')->nullable()->unsigned(false)->default(null)->change();
            $table->text('meta_title')->nullable()->unsigned(false)->default(null)->change();
            $table->text('meta_description')->nullable()->unsigned(false)->default(null)->change();
            $table->text('accreditation')->nullable()->unsigned(false)->default(null)->change();
            $table->text('duration')->nullable()->unsigned(false)->default(null)->change();
            $table->text('valid_for')->nullable()->unsigned(false)->default(null)->change();
            $table->text('overview')->nullable()->unsigned(false)->default(null)->change();
            $table->text('assessment')->nullable()->unsigned(false)->default(null)->change();
            $table->text('certification')->nullable()->unsigned(false)->default(null)->change();
            $table->text('information')->nullable()->unsigned(false)->default(null)->change();
            $table->text('slug')->nullable()->unsigned(false)->default(null)->change();
            $table->text('who_should_attend')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_courses', function($table)
        {
            $table->string('title', 191)->nullable()->unsigned(false)->default(null)->change();
            $table->string('meta_title', 191)->nullable()->unsigned(false)->default(null)->change();
            $table->string('meta_description', 191)->nullable()->unsigned(false)->default(null)->change();
            $table->string('accreditation', 191)->nullable()->unsigned(false)->default(null)->change();
            $table->string('duration', 191)->nullable()->unsigned(false)->default(null)->change();
            $table->string('valid_for', 191)->nullable()->unsigned(false)->default(null)->change();
            $table->string('overview', 191)->nullable()->unsigned(false)->default(null)->change();
            $table->string('assessment', 191)->nullable()->unsigned(false)->default(null)->change();
            $table->string('certification', 191)->nullable()->unsigned(false)->default(null)->change();
            $table->string('information', 191)->nullable()->unsigned(false)->default(null)->change();
            $table->string('slug', 191)->nullable()->unsigned(false)->default(null)->change();
            $table->string('who_should_attend', 191)->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
