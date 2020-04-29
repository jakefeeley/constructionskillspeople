<?php namespace FluxedDigital\Csp\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'fluxeddigital_csp_course_categories';

    public $hasMany = [
        'courses' => 'Fluxeddigital\Csp\Models\Course',
    ];

    public $attachOne = [
      'featured_img' => 'System\Models\File'
    ];

}
