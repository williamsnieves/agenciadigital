<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentPage extends Model {

	//

	protected $table = 'content_pages';


	public function nodes(){
		return $this->hasMany('\App\models\Node', 'content_pages_id');
	}

}
