<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspNvqs7 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_nvqs', function($table)
        {
            $table->integer('nvqcategory_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_nvqs', function($table)
        {
            $table->dropColumn('nvqcategory_id');
        });
    }
}
