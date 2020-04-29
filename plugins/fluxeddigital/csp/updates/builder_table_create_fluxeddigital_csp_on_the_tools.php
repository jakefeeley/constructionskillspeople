<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFluxeddigitalCspOnTheTools extends Migration
{
    public function up()
    {
        Schema::create('fluxeddigital_csp_on_the_tools', function($table)
        {
            $table->engine = 'InnoDB';
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fluxeddigital_csp_on_the_tools');
    }
}
