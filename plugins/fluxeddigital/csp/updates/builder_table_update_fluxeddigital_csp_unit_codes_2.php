<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspUnitCodes2 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_unit_codes', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('unit_code')->change();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_unit_codes', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
            $table->string('unit_code', 191)->change();
        });
    }
}
