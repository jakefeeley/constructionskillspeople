<?php namespace FluxedDigital\Csp\Models;

use Model;

/**
 * Model
 */
class OnTheTool extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'fluxeddigital_csp_on_the_tools';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
      'image' => 'System\Models\File'
    ];
}
