<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Order extends Model {

	use SoftDeletes;
	
	protected $table = 'orders';

	protected $fillable = ['order_id', 'user_id', 'product_id', 'date_out', 'date_in'];

	protected $dates = ['deleted_at'];

	public static $rules = [
		// Validation rules
	];

	// Relationships

}
