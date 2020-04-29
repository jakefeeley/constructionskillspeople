<?php namespace FluxedDigital\Csp\Models;

use Model;

/**
 * Model
 */
class HonourRole extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'fluxeddigital_csp_honour_role';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

public $belongsTo = [
       'course_id' => 'Fluxeddigital\Csp\Models\Course',
       'nvq_id' => 'Fluxeddigital\Csp\Models\Nvq',
   ];

}
