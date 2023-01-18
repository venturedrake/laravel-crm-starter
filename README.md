# Laravel CRM Starter

A complete starter project for the [Laravel CRM Package](https://github.com/venturedrake/laravel-crm). 

This project uses Laravel 9 with the starter kit [Laravel Breeze](https://laravel.com/docs/9.x/starter-kits#laravel-breeze).

# Requirements

- **PHP**: 8.0 or higher
- **For MySQL users**: 5.7.23 or higher
- **For MariaDB users**: 10.2.7 or higher

# Installation

## Clone the repo

```bash
git clone --depth=1 https://github.com/venturedrake/laravel-crm-starter.git
```

This will create a shallow clone of the repo, from there you would just need to remove the `.git` folder and reinitialise it to make it your own.

Then install composer dependencies

```bash
composer install
```

## Configure the Laravel app

Copy the `.env.example` file to `.env` and make sure the details match to your install.

```shell
cp .env.example .env
```

All the relevant configuration files should be present in the repo.

## Complete the installation

Generate the application key

```
php artisan key:generate
```

Link the storage directory

```
php artisan storage:link
```

Install Laravel CRM

```
php artisan laravelcrm:install
```