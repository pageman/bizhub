<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductReseller extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product_reseller';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
