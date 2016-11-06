<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  /**
     * Enable soft deletes for a model
     * @var string
     */
    protected $dates = ['deleted_at'];


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * Atributos que se pueden insertar en Mass-Assignment
     * @var array
     */
    protected $fillable = ['code', 'name', 'description', 'cost', 'price', 'enable'];
}
