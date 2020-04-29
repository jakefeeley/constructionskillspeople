<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspHonourRole9 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_honour_role', function($table)
        {
            $table->integer('course_id_id')->nullable()->change();
            $table->integer('nvq_id_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_honour_role', function($table)
        {
            $table->integer('course_id_id')->nullable(false)->change();
            $table->integer('nvq_id_id')->nullable(false)->change();
        });
    }
}
