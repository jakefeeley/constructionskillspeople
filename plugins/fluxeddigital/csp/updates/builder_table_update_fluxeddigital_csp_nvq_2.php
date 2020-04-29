<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspNvq2 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_nvq', function($table)
        {
            $table->text('meta_tile');
            $table->dropColumn('meta_title');
            $table->dropColumn('line_item');
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_nvq', function($table)
        {
            $table->dropColumn('meta_tile');
            $table->text('meta_title');
            $table->text('line_item');
        });
    }
}
