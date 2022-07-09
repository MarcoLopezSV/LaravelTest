<?php

namespace App\Models;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Population
 *
 * @property $id
 * @property $cod_product
 * @property $nameProd
 * @property $descProd
 * @property $typeProd
 * @property $costUnit
 * @property $cantExist
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Population extends Controller
{
    
    static $rules = [
		'ID_Nation' => 'required',
		'Nation' => 'required',
		'ID_Year' => 'required',
		'Year' => 'required',
		'Population' => 'required',
		'Slug_Nation' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ID_Nation','Nation','ID_Year','Year','Population','Slug_Nation'];



}

