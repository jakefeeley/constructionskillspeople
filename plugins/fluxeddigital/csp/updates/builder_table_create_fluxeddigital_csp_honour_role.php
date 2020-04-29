<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFluxeddigitalCspHonourRole extends Migration
{
    public function up()
    {
        Schema::create('fluxeddigital_csp_honour_role', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->text('course')->nullable();
            $table->date('graduated_date')->nullable();
            $table->string('type')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fluxeddigital_csp_honour_role');
    }
}
