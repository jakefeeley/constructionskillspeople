<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspNvqCategories4 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_nvq_categories', function($table)
        {
            $table->integer('nv_category_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_nvq_categories', function($table)
        {
            $table->dropColumn('nv_category_id');
        });
    }
}
