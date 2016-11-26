<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'categoria', 'img', 'price', 'title', 'description', 'brand', 'state',
    ];

}
