<?php namespace FluxedDigital\Csp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFluxeddigitalCspNvqs8 extends Migration
{
    public function up()
    {
        Schema::table('fluxeddigital_csp_nvqs', function($table)
        {
            $table->dropColumn('line_item_unit_code');
            $table->dropColumn('line_item_title');
            $table->dropColumn('line_item_credits');
            $table->dropColumn('line_item_glh');
            $table->dropColumn('line_item_level');
            $table->dropColumn('line_item_unit_ref');
            $table->dropColumn('optional_line_item_unit_code');
            $table->dropColumn('optional_line_item_title');
            $table->dropColumn('optional_line_item_credits');
            $table->dropColumn('optional_line_item_glh');
            $table->dropColumn('optional_line_item_level');
            $table->dropColumn('optional_line_item_unit_ref');
        });
    }
    
    public function down()
    {
        Schema::table('fluxeddigital_csp_nvqs', function($table)
        {
            $table->string('line_item_unit_code', 191)->nullable();
            $table->text('line_item_title')->nullable();
            $table->string('line_item_credits', 191)->nullable();
            $table->string('line_item_glh', 191)->nullable();
            $table->string('line_item_level', 191)->nullable();
            $table->string('line_item_unit_ref', 191)->nullable();
            $table->string('optional_line_item_unit_code', 191)->nullable();
            $table->string('optional_line_item_title', 191)->nullable();
            $table->string('optional_line_item_credits', 191)->nullable();
            $table->string('optional_line_item_glh', 191)->nullable();
            $table->string('optional_line_item_level', 191)->nullable();
            $table->string('optional_line_item_unit_ref', 191)->nullable();
        });
    }
}
