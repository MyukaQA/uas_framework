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
# create laravel key
$ php artisan key:generate
# laravel migrate
$ php artisan migrate
```
