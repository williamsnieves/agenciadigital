<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model {

	//

	protected $table = "sections";

	public function contentPages(){
		return $this->hasMany('\App\models\ContentPage', 'section_id');
	}
}
