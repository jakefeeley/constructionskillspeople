<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFluxeddigitalCspNvq extends Migration
{
    public function up()
    {
        Schema::create('fluxeddigital_csp_nvq', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('meta_title');
            $table->text('meta_description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fluxeddigital_csp_nvq');
    }
}
