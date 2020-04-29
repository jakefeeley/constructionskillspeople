<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspNvqs5 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_nvqs', function($table)
        {
            $table->string('line_item_unit_code')->nullable();
            $table->text('line_item_title')->nullable();
            $table->string('line_item_credits')->nullable();
            $table->string('line_item_glh')->nullable();
            $table->string('line_item_level')->nullable();
            $table->string('line_item_unit_ref')->nullable();
            $table->string('course_code')->change();
            $table->string('learning_aim')->change();
            $table->string('qcf_credits')->change();
            $table->string('registration_date')->change();
            $table->string('expiry_date')->change();
            $table->string('programme_weighting')->change();
            $table->string('min_credit_value')->change();
            $table->string('min_guided_learning')->change();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_nvqs', function($table)
        {
            $table->dropColumn('line_item_unit_code');
            $table->dropColumn('line_item_title');
            $table->dropColumn('line_item_credits');
            $table->dropColumn('line_item_glh');
            $table->dropColumn('line_item_level');
            $table->dropColumn('line_item_unit_ref');
            $table->string('course_code', 191)->change();
            $table->string('learning_aim', 191)->change();
            $table->string('qcf_credits', 191)->change();
            $table->string('registration_date', 191)->change();
            $table->string('expiry_date', 191)->change();
            $table->string('programme_weighting', 191)->change();
            $table->string('min_credit_value', 191)->change();
            $table->string('min_guided_learning', 191)->change();
        });
    }
}
