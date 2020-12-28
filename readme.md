# UAS FRAMEWROK

<p>kurang lebih udah 80% kayak e</p>

## Minus
  <li class="list-group-item">Kurang ada lope-lope (menyukai buku)</li>
  <li class="list-group-item">belum ada batasan required (di beberapa crud)</li>
  <li class="list-group-item">zoom cover buku</li>

## How to install and demonstration ?
After clone or download this repository, next step is install all dependency required by laravel and laravel-mix.

```shell
# install composer-dependency
$ composer install
# install npm package
$ npm install
# build dev 
$ npm run dev
```

Before we start web server make sure we already generate app key, configure `.env` file and do migration.

```shell
# create copy of .env
$ cp .env.example .env
# create laravel key
$ php artisan key:generate
# laravel migrate
$ php artisan migrate
```