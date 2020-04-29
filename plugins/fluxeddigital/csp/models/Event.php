<?php namespace FluxedDigital\Csp\Models;

use Model;

/**
 * Model
 */
class Event extends Model
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
    public $table = 'fluxeddigital_csp_events';

    public $belongsTo = [
        'course_relation' => ['Fluxeddigital\Csp\Models\Course', 'key' => 'course_relation_id'],
    ];
}
