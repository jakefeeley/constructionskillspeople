<?php namespace FluxedDigital\Csp\Models;

use Model;

/**
 * Model
 */
class Course extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
	use \October\Rain\Database\Traits\Sortable;

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
    public $table = 'fluxeddigital_csp_courses';

    public $belongsTo = [
        'category' => 'Fluxeddigital\Csp\Models\Category',
    ];

    public $hasMany = [
        'events' => ['Fluxeddigital\Csp\Models\Event', 'key' => 'course_relation_id'],
    ];

    protected $jsonable = [
       'tags',
     ];

	public $attachOne = [
      'specification' => 'System\Models\File',
      'banner' => 'System\Models\File'
    ];

}
