<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspEvents2 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_events', function($table)
        {
            $table->string('course_relation_id')->nullable();
            $table->text('location')->nullable()->change();
            $table->text('price')->nullable()->change();
            $table->date('start_date')->nullable()->change();
            $table->text('course_relation')->nullable()->change();
            $table->string('delegates', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_events', function($table)
        {
            $table->dropColumn('course_relation_id');
            $table->text('location')->nullable(false)->change();
            $table->text('price')->nullable(false)->change();
            $table->date('start_date')->nullable(false)->change();
            $table->text('course_relation')->nullable(false)->change();
            $table->string('delegates', 191)->nullable(false)->change();
        });
    }
}
