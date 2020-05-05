<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'products';
    protected $fillable = ['user_id','name', 'detail'];

	public function user()    
	{
		return $this->belongsTo(User::class);
	}

	public function image()
	{
		return $this->morphOne(Image::class, 'imageable');
	}

	public function categories()
	{
		return $this->morphMany(Category::class, 'categorieable');
	}
	
	public function prices()
	{
		return $this->morphToMany(Price::class, 'priceable');
	}
	
}
