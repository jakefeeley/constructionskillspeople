<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspHr extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_hr', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_hr', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
