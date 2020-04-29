<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspNvqSubcategories4 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_nvq_subcategories', function($table)
        {
            $table->integer('sort_order')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_nvq_subcategories', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
