<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $sku
 * @property string $title
 * @property float  $price
 * @property int    $stock
 */
class Product extends Model
{

    protected $guarded = [];

    protected $casts = [
        'price' => 'float',
        'stock' => 'int',
    ];

}
