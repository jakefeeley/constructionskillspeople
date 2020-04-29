<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspHonourRole4 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_honour_role', function($table)
        {
            $table->integer('course_id')->unsigned();
            $table->string('type')->change();
            $table->string('title')->change();
            $table->string('first_name')->change();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_honour_role', function($table)
        {
            $table->dropColumn('course_id');
            $table->string('type', 191)->change();
            $table->string('title', 191)->change();
            $table->string('first_name', 191)->change();
        });
    }
}
