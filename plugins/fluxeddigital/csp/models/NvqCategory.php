<?php namespace FluxedDigital\Csp\Models;

use Model;

/**
 * Model
 */
class NvqCategory extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'fluxeddigital_csp_nvq_categories';

    public $hasMany = [
        'nvqs' => ['Fluxeddigital\Csp\Models\Nvq', 'key' => 'nvqcategory_id'],
        'nvq_subcategories' => ['Fluxeddigital\Csp\Models\NvqSubcategory', 'key' => 'nvq_category_id'],
    ];

    public $attachOne = [
      'featured_img' => 'System\Models\File'
    ];
}
