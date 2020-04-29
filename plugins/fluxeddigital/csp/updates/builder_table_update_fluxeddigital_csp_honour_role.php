<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspHonourRole extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_honour_role', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->string('name')->change();
            $table->string('type')->change();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_honour_role', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
            $table->increments('id')->unsigned()->change();
            $table->string('name', 191)->change();
            $table->string('type', 191)->change();
        });
    }
}
