<?php namespace FluxedDigital\Csp\Models;

use Model;

/**
 * Model
 */
class EventLocation extends Model
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
    public $table = 'fluxeddigital_csp_event_locations';
}
