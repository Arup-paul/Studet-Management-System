<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Fee
 * @package App\Models
 * @version November 1, 2020, 6:54 am UTC
 *
 * @property string $fee_structure_id
 * @property string $payment
 * @property string $due
 */
class Fee extends Model
{
    use SoftDeletes;

    public $table = 'fees';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'fee_structure_id',
        'payment',
        'due'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fee_structure_id' => 'string',
        'payment' => 'string',
        'due' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fee_structure_id' => 'required|string|max:255',
        'payment' => 'required|string|max:255',
        'due' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
