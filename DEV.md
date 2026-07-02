## DEVELOPEMENT GUIDE (God why am i writing this)

this guide is only meant for active contributors and maintainers of the project.
If you're reading this and you're not a contributor and don't plan to be.
I'll poletely ask you to leave this page and maybe even this repo. (although i can't really stop you from doing so)


### Prérequis

- PHP 8.3+
- Composer
- Node.js et npm


### State

The actual state is fairly simple, the migrations and seeders are already set up.
And so are the models !

**BUT NOT THE CONTROLLERS, ROUTES AND VIEWS !**

so you know what to do champ.

before doing anything, you'll need to get a lil set up to even run and see our (non-existent) app and horribly vibe coded gradients.

### Installation

```bash
# install the php related dependencies (assumng you have composer installed)
composer install

# copy the example env file to a new .env file
# that's the part where you'll need to write your own database stuffs, we don't need the rest for now.
cp .env.example .env
```

the section you're looking for is

```dotenv
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=
```

(i know, it's obvious but shut up)

```bash
# generate the app key
# not needed for now since there's no pages or routes to perform wacky auth
# php artisan key:generate 

# run the migrations and seeders, always use fresh to keep the integrity
# i spent a stupid amount of time reordering the migration and seeders
php artisan migrate:fresh --seed
```

