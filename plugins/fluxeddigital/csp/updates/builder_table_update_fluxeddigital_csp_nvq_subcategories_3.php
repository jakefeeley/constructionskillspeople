<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspNvqSubcategories3 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_nvq_subcategories', function($table)
        {
            $table->text('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_nvq_subcategories', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
