# UAS FRAMEWROK

## Cara jalankan project ?
Setelah selesai clone repository ini, install depedensi di bawah ini ya.

```shell
# install composer-dependency
$ composer install
```

sebelum run project silahkan konfigurasi env nya dan generate Keynya , habis itu run project, seperti dibawah ini.

```shell
# create copy of .env
$ cp .env.example .env

# Bikin database kosong di localhost dan sesuaikan nama databasenya di .env, jangan lupa DB_USERNAME dan DB_PASSWORD localhost di sesuaikan masing-masing

# create laravel key
$ php artisan key:generate
# laravel migrate
$ php artisan migrate
# Jalankan project
$ php artisan serve

```

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
