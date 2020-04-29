<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFluxeddigitalCspHr extends Migration
{
    public function up()
    {
        Schema::create('fluxeddigital_csp_hr', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('duties')->nullable();
            $table->text('skills')->nullable();
            $table->text('desirable_skills')->nullable();
            $table->text('qualifications')->nullable();
            $table->text('spg')->nullable();
            $table->text('other_details')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fluxeddigital_csp_hr');
    }
}
