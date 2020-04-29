<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFluxeddigitalCspEvents extends Migration
{
    public function up()
    {
        Schema::create('fluxeddigital_csp_events', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->text('location');
            $table->text('price');
            $table->date('start_date');
            $table->text('course_relation');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fluxeddigital_csp_events');
    }
}
