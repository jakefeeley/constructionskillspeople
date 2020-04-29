<?php namespace FluxedDigital\Csp\Models;

use Model;

/**
 * Model
 */
class NvqSubcategory extends Model
{
    use \October\Rain\Database\Traits\Validation;
	
	use \October\Rain\Database\Traits\Sortable;
    
    use \October\Rain\Database\Traits\SoftDelete;
		const SORT_ORDER = 'sort_order';

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'fluxeddigital_csp_nvq_subcategories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'nvq_category' => ['Fluxeddigital\Csp\Models\NvqCategory', 'key' => 'nvq_category_id'],
    ];

    public $hasMany = [
        'nvqs' => ['Fluxeddigital\Csp\Models\Nvq', 'key' => 'nvq_subcategory_id'],
    ];

    public $attachOne = [
        'image' => 'System\Models\File'
    ];
}
