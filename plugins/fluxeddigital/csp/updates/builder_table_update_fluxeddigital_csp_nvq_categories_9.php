<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspNvqCategories9 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_nvq_categories', function($table)
        {
            $table->string('video')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_nvq_categories', function($table)
        {
            $table->dropColumn('video');
        });
    }
}
