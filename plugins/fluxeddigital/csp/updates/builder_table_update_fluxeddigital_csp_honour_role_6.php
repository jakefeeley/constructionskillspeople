<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspHonourRole6 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_honour_role', function($table)
        {
            $table->date('enrollment_date')->nullable();
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_honour_role', function($table)
        {
            $table->dropColumn('enrollment_date');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
}
