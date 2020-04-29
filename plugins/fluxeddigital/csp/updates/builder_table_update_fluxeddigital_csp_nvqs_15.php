<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspNvqs15 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_nvqs', function($table)
        {
            $table->integer('nvq_subcategory_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_nvqs', function($table)
        {
            $table->dropColumn('nvq_subcategory_id');
        });
    }
}
