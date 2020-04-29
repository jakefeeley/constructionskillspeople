<?php namespace FluxedDigital\Csp\Models;

use Model;

/**
* Model
*/
class UnitCode extends Model
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
   public $table = 'fluxeddigital_csp_unit_codes';

   public $hasMany = [
       'nvq' => ['Fluxeddigital\Csp\Models\Nvq', 'key' => 'id'],
   ];
}
