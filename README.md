**Установка**
- Установить PHP <a>https://www.php.net/downloads</a>
- Установить Nodejs <a>https://nodejs.org/en/download</a> **Не меньше 14 версии**
- Установить Composer <a>https://getcomposer.org/</a>
- Клонировать репозиторий `git clone <link>`
- Скачать модули node `npm install`
- Добавить composer `Composer i`
---
**Запуск**
- Создать файл конфигурации с примера `Cp .env.example .env`
>*Файл .env* <br> - Отредактировать файл конфигурации
- Создать ключ приложения `php artisan key:generate`
- Создать хранилище `php artisan storage:link`
- Мигрировать таблицы `php artisan migrate`
- Запустить приложения `npm run dev` и `php artisan serve`
- Данные от админа Логин: `root@mail.ru` Пароль: `123456789`
