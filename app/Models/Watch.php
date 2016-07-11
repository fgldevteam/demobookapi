<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Watch extends Model {

	protected $table = 'watch';

	protected $fillable = ['user_id', 'product_id'];

	protected $dates = [];

	public static $rules = [
		// Validation rules
	];

	// Relationships

}
