<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspNvqs3 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_nvqs', function($table)
        {
            $table->string('course_code')->nullable();
            $table->string('learning_aim')->nullable();
            $table->string('qcf_credits')->nullable();
            $table->string('registration_date')->nullable();
            $table->string('expiry_date')->nullable();
            $table->string('programme_weighting')->nullable();
            $table->text('title')->nullable()->change();
            $table->text('meta_description')->nullable()->change();
            $table->text('meta_title')->nullable()->change();
            $table->text('line_item')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_nvqs', function($table)
        {
            $table->dropColumn('course_code');
            $table->dropColumn('learning_aim');
            $table->dropColumn('qcf_credits');
            $table->dropColumn('registration_date');
            $table->dropColumn('expiry_date');
            $table->dropColumn('programme_weighting');
            $table->text('title')->nullable(false)->change();
            $table->text('meta_description')->nullable(false)->change();
            $table->text('meta_title')->nullable(false)->change();
            $table->text('line_item')->nullable(false)->change();
        });
    }
}
