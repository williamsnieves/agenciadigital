<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	//

	protected $table = "categories";

	public function portfolios(){
		return $this->hasMany('\App\models\Portfolio', 'categories_id');
	}

}
