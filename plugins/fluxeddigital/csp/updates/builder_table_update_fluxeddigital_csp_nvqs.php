<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspNvqs extends Migration
{
    public function up()
    {
        Schema::rename('fluxeddigital_csp_nvq', 'fluxeddigital_csp_nvqs');
    }
    
    public function down()
    {
        Schema::rename('fluxeddigital_csp_nvqs', 'fluxeddigital_csp_nvq');
    }
}
