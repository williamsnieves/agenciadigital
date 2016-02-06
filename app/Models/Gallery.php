<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model {

	//

	protected $table = "galleries";

	public function contentPages(){
		return $this->hasMany('\App\models\ContentPage', 'gallery_id');
	}

}
