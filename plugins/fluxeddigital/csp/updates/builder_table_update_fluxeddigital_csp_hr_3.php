<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspHr3 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_hr', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_hr', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
