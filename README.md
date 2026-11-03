# CodeIgniter4 News

Приложение-новостная лента на [CodeIgniter 4](https://codeigniter.com/) + [UIkit](https://getuikit.com/).

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](LICENSE)
![GitHub issues](https://img.shields.io/github/issues/proweb/codeigniter4-news)
![GitHub pull requests](https://img.shields.io/github/issues-pr/proweb/codeigniter4-news)

## Возможности

- Список новостей и просмотр по slug
- Создание новостей (заголовок, slug, текст)
- Страницы-заглушки для произвольных маршрутов
- Оформление на UIkit (статические ассеты)

## Стек

- PHP 8.x, CodeIgniter 4.7
- SQLite3 (dev) — БД в `writable/`
- UIkit

## Быстрый старт

Требования: PHP 8.x с расширением SQLite3, Composer.

```bash
git clone https://github.com/proweb/codeigniter4-news.git
cd codeigniter4-news
composer install
cp .env.example .env
```

Примените миграции (создаст таблицу `news`):

```bash
php spark migrate
```

Запуск:

```bash
php spark serve
# http://localhost:8080/
```

## Структура

| Путь | Назначение |
|---|---|
| `app/Controllers/` | `Pages` (главная, произвольные страницы), `News` (список, просмотр, создание) |
| `app/Models/NewsModel.php` | Модель таблицы `news` |
| `app/Views/` | Шаблоны: `news/`, `pages/`, `templates/` |
| `app/Config/Routes.php` | Маршруты |
| `writable/` | SQLite БД, кэш, логи, сессии (не в git) |

## Тесты

```bash
vendor/bin/phpunit
```

## Документация

| Тема | Где |
|---|---|
| Вклад | [CONTRIBUTING.md](CONTRIBUTING.md) |
| Безопасность | [SECURITY.md](SECURITY.md) |
| Code of Conduct | [CODE_OF_CONDUCT.md](CODE_OF_CONDUCT.md) |
| История изменений | [CHANGELOG.md](CHANGELOG.md) |

## Лицензия

[MIT](LICENSE)
