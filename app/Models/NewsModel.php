<?php

namespace App\Models;

use CodeIgniter\Model;

/**
 * Модель для работы с новостями.
 *
 * Предоставляет методы для выборки записей из таблицы `news`.
 * Наследует CodeIgniter Model, использует стандартные CRUD-операции.
 *
 * @package App\Models
 */
class NewsModel extends Model
{
	protected $table = 'news';
	protected $allowedFields = ['title', 'slug', 'body'];

	/**
	 * Получает новость(и) из базы данных.
	 *
	 * Если передан slug, возвращает одну запись, иначе все записи.
	 *
	 * @param string|false $slug Уникальный идентификатор новости (строка) или false для получения всех.
	 * @return array|object|null Массив объектов новостей или одна запись (объект), либо null если не найдено.
	 */
	public function getNews($slug = FALSE)
	{
		if ($slug === FALSE) {
			return $this->findAll();
		}
		return $this->where(['slug' => $slug])->first();
	}
}
