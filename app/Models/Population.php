<?php

namespace App\Models;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Population
 *
 * @property $id
 * @property $id_nation
 * @property $nation
 * @property $id_year
 * @property $year
 * @property $population
 * @property $slug_nation
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Population extends Controller
{
    
    static $states = [
		'ID_Nation' => 'required',
		'Nation' => 'required',
		'ID_Year' => 'required',
		'Year' => 'required',
		'Population' => 'required',
		'Slug_Nation' => 'required',
    ];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ID_Nation','Nation','ID_Year','Year','Population','Slug_Nation'];



}

