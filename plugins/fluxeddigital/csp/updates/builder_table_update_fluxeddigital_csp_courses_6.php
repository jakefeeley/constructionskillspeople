<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspCourses6 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_courses', function($table)
        {
            $table->text('aims')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_courses', function($table)
        {
            $table->string('aims', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
