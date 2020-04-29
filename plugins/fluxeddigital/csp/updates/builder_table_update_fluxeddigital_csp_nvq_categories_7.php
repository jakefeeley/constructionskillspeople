<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspNvqCategories7 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_nvq_categories', function($table)
        {
            $table->string('header_line_1')->nullable();
            $table->string('header_line_2')->nullable();
            $table->string('header_line_3')->nullable();
            $table->string('header_line_4')->nullable();
            $table->dropColumn('tagline');
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_nvq_categories', function($table)
        {
            $table->dropColumn('header_line_1');
            $table->dropColumn('header_line_2');
            $table->dropColumn('header_line_3');
            $table->dropColumn('header_line_4');
            $table->string('tagline', 191)->nullable();
        });
    }
}
