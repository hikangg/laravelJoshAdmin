<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Legend extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'legends';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

}