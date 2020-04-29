<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspNvq3 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_nvq', function($table)
        {
            $table->text('line_item');
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_nvq', function($table)
        {
            $table->dropColumn('line_item');
        });
    }
}
