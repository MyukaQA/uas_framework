# UAS FRAMEWROK

<p>kurang lebih udah 80% kayak e</p>

## Minus
  <li class="list-group-item">Kurang ada lope-lope (menyukai buku)</li>
  <li class="list-group-item">belum ada batasan required (di beberapa crud)</li>
  <li class="list-group-item">zoom cover buku</li>

## How to install and demonstration ?
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