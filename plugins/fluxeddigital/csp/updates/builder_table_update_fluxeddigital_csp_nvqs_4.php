<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspNvqs4 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_nvqs', function($table)
        {
            $table->string('min_credit_value')->nullable();
            $table->string('min_guided_learning')->nullable();
            $table->string('course_code')->change();
            $table->string('learning_aim')->change();
            $table->string('qcf_credits')->change();
            $table->string('registration_date')->change();
            $table->string('expiry_date')->change();
            $table->string('programme_weighting')->change();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_nvqs', function($table)
        {
            $table->dropColumn('min_credit_value');
            $table->dropColumn('min_guided_learning');
            $table->string('course_code', 191)->change();
            $table->string('learning_aim', 191)->change();
            $table->string('qcf_credits', 191)->change();
            $table->string('registration_date', 191)->change();
            $table->string('expiry_date', 191)->change();
            $table->string('programme_weighting', 191)->change();
        });
    }
}
