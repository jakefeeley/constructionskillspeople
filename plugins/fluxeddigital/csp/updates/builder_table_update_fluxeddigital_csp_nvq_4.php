<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspNvq4 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_nvq', function($table)
        {
            $table->renameColumn('meta_tile', 'meta_title');
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_nvq', function($table)
        {
            $table->renameColumn('meta_title', 'meta_tile');
        });
    }
}
