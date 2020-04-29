<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspNvqs6 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_nvqs', function($table)
        {
            $table->text('optional_line_item')->nullable();
            $table->string('optional_line_item_unit_code')->nullable();
            $table->string('optional_line_item_title')->nullable();
            $table->string('optional_line_item_credits')->nullable();
            $table->string('optional_line_item_glh')->nullable();
            $table->string('optional_line_item_level')->nullable();
            $table->string('optional_line_item_unit_ref')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_nvqs', function($table)
        {
            $table->dropColumn('optional_line_item');
            $table->dropColumn('optional_line_item_unit_code');
            $table->dropColumn('optional_line_item_title');
            $table->dropColumn('optional_line_item_credits');
            $table->dropColumn('optional_line_item_glh');
            $table->dropColumn('optional_line_item_level');
            $table->dropColumn('optional_line_item_unit_ref');
        });
    }
}
