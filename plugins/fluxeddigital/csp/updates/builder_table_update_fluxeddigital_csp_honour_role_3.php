<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspHonourRole3 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_honour_role', function($table)
        {
            $table->string('first_name')->nullable();
            $table->text('description')->nullable();
            $table->string('type')->change();
            $table->string('title')->change();
            $table->renameColumn('course', 'last_name');
            $table->dropColumn('name');
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_honour_role', function($table)
        {
            $table->dropColumn('first_name');
            $table->dropColumn('description');
            $table->string('type', 191)->change();
            $table->string('title', 191)->change();
            $table->renameColumn('last_name', 'course');
            $table->string('name', 191)->nullable();
        });
    }
}
