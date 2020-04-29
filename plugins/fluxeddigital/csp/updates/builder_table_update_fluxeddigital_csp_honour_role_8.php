<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspHonourRole8 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_honour_role', function($table)
        {
            $table->integer('course_id_id')->unsigned();
            $table->integer('nvq_id_id')->unsigned();
            $table->dropColumn('course_id');
            $table->dropColumn('nvq_id');
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_honour_role', function($table)
        {
            $table->dropColumn('course_id_id');
            $table->dropColumn('nvq_id_id');
            $table->integer('course_id')->unsigned();
            $table->integer('nvq_id')->unsigned();
        });
    }
}
