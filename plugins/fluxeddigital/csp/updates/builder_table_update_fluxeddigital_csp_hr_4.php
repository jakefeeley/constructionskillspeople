<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspHr4 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_hr', function($table)
        {
            $table->text('how_to_apply')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_hr', function($table)
        {
            $table->dropColumn('how_to_apply');
        });
    }
}
