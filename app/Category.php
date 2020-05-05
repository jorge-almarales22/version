<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function categorieable()
    {
    	return $this->morphTo();
    }
}
