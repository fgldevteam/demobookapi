<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Product extends Model {

	use SoftDeletes;

	protected $table = 'products';

	protected $fillable = ['category_id', 'name', 'description', 'pmm', 'image', 'video', 'url', 'max_booking_length', 'barcode_id', 'available'];

	protected $dates = ['deleted_at'];

	public static $rules = [
		// Validation rules
	];

	// Relationships

}
