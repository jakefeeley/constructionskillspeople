<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspNvqSubcategories2 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_nvq_subcategories', function($table)
        {
            $table->string('alt_tag')->nullable();
            $table->dropColumn('tagline');
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_nvq_subcategories', function($table)
        {
            $table->dropColumn('alt_tag');
            $table->string('tagline', 191)->nullable();
        });
    }
}
