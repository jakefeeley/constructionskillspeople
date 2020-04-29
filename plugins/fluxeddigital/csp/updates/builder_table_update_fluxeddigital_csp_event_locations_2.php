<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspEventLocations2 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_event_locations', function($table)
        {
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('address_line_3')->nullable();
            $table->string('address_town')->nullable();
            $table->string('address_county')->nullable();
            $table->string('address_postcode')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_event_locations', function($table)
        {
            $table->dropColumn('address_line_1');
            $table->dropColumn('address_line_2');
            $table->dropColumn('address_line_3');
            $table->dropColumn('address_town');
            $table->dropColumn('address_county');
            $table->dropColumn('address_postcode');
        });
    }
}
