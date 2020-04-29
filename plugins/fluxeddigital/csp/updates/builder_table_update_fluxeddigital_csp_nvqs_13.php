<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspNvqs13 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_nvqs', function($table)
        {
            $table->renameColumn('order', 'sort_order');
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_nvqs', function($table)
        {
            $table->renameColumn('sort_order', 'order');
        });
    }
}
