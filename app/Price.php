<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public function products()
    {
    	return $this->morphedByMany(Product::class, 'priceable');
    }
}
