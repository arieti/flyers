<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
	protected $fillable = [
		'street',
		'city',
		'zip',
		'country',
		'price',
		'description'
	];

	public static function locatedAt($zip, $street)
	{
		$street = str_slug($street, ' ');
		return static::where(compact('zip', 'street'))->first();
	}

	public function getPriceAttribute($price)
	{
		return '$'. number_format($price);
	}

    public function photos()
    {
    	return $this->hasMany('App\Photo');
    }

    public function addPhoto(Photo $photo)
    {
    	return $this->photos()->save($photo);
    }
}
