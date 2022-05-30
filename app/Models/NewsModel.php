<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model {
	protected $table = 'news';

	public function getNews($slug = FALSE)
	{
		if ($slug === FALSE){
			return $this->findAll();
		}
		return $this->where(['slug' => $slug])->first();
	}
}
