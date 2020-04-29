<?php namespace FluxedDigital\Csp\Models;

use Model;
use FluxedDigital\Csp\Models\NvqSubcategory;

/**
* Model
*/
class Nvq extends Model
{
   use \October\Rain\Database\Traits\Validation;

   use \October\Rain\Database\Traits\SoftDelete;

use \October\Rain\Database\Traits\Sortable;

   protected $dates = ['deleted_at'];

   /**
    * @var array Validation rules
    */
   public $rules = [
   ];

   /**
    * @var string The database table used by the model.
    */
   public $table = 'fluxeddigital_csp_nvqs';

   public $belongsTo = [
       'nvqcategory' => ['Fluxeddigital\Csp\Models\NvqCategory', 'key' => 'nvqcategory_id'],
       'nvq_subcategory' => ['Fluxeddigital\Csp\Models\NvqSubcategory', 'key' => 'nvq_subcategory_id'],
       'unitcode' => ['Fluxeddigital\Csp\Models\UnitCode', 'key' => 'unit_code'],
   ];

   protected $jsonable = [
       'line_item',
       'optional_line_item',
     ];

   public $attachOne = [
      'banner' => 'System\Models\File'
    ];

    public function getNvqSubcategoryIdOptions()
    {
        $options = [];

        $subcategories = NvqSubcategory::where('nvq_category_id', $this->nvqcategory_id)->get();

        foreach ($subcategories as $subcategory) {
            $options[$subcategory->id] = $subcategory->name;
        }

        return $options;
    }
}
