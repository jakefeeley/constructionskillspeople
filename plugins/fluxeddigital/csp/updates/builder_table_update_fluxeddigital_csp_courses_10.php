<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspCourses10 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_courses', function($table)
        {
            $table->text('delivery')->nullable();
            $table->text('location')->nullable();
            $table->text('eligibility')->nullable();
            $table->text('aims')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_courses', function($table)
        {
            $table->dropColumn('delivery');
            $table->dropColumn('location');
            $table->dropColumn('eligibility');
            $table->text('aims')->nullable(false)->change();
        });
    }
}
