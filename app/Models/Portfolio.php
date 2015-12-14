<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model {

	//

	protected $table = 'portfolios';

	public function categories(){
		return $this->belongsTo('\App\models\Category', 'categories_id');
	}
}
