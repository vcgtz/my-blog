# Personal Blog
Platform to manage your own personal blog.
> This project is being developed thinking of being a completely personal blog, but that does not mean that it is the only possible purpose.

## Installation
This is a Laravel project but implements some PHP 8 features so PHP 8 is the version that you need to have installed. Also you need Composer, NodeJS, NPM and some database manager as MySQL or MariaDB.

Clone this repo:
```bash
# Using ssh conection
$ git clone git@github.com:vcgtz/blog.git

# Or ssing https conection
$ git clone https://github.com/vcgtz/blog.git
```

Go to the repo folder:
```bash
$ cd blog/
```

Install Laravel dependences:
```bash
$ composer install
```

Install NodeJS dependences:
```bash
$ npm install
```

## Quick Start
To run locally this project you need follow the next steps:

Create your own `.env` file and then fill in the information from your database:
```
$ cp .env.example .env
```

Compile the assets:
```bash
$ npm run dev
```

Run the migrations:
```bash
$ php artisan migrate
```

And start the server:
```bash
php artisan serve
```

Now you can see the project running on `http://127.0.0.1:8000`.