<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model {
	protected $table = 'news';
	protected $allowedFields = ['title', 'slug', 'body'];
	// Get item from DB
	public function getNews($slug = FALSE)
	{
		if ($slug === FALSE){
			return $this->findAll();
		}
		return $this->where(['slug' => $slug])->first();
	}
}
