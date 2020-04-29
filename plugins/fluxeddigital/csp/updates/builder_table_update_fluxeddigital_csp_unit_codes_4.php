<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspUnitCodes4 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_unit_codes', function($table)
        {
            $table->text('title')->nullable();
            $table->text('credits')->nullable();
            $table->text('glh')->nullable();
            $table->text('level')->nullable();
            $table->text('reference')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_unit_codes', function($table)
        {
            $table->dropColumn('title');
            $table->dropColumn('credits');
            $table->dropColumn('glh');
            $table->dropColumn('level');
            $table->dropColumn('reference');
        });
    }
}
