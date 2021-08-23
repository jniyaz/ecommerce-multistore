<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttributeValue extends Model
{
    public function attribute()
    {
        return $this->belongsTo(ProductAttribute::class);
    }
}
