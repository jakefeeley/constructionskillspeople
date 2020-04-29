<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspNvqs11 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_nvqs', function($table)
        {
            $table->dropColumn('nvq_category_id');
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_nvqs', function($table)
        {
            $table->integer('nvq_category_id')->unsigned();
        });
    }
}
