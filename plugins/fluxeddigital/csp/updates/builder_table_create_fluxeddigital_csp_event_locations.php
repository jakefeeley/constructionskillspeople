<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFluxeddigitalCspEventLocations extends Migration
{
    public function up()
    {
        Schema::create('fluxeddigital_csp_event_locations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('map')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fluxeddigital_csp_event_locations');
    }
}
