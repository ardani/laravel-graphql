# Sample Integrate Laravel With GraphQL
GraphQL is a query language for your API, and a server-side runtime for executing queries by using a type system you define for your data

this is sample how to integrating Graphql with laravel, for full documentation you can check
[here](https://github.com/rebing/graphql-laravel) and [Graphql](http://graphql.org/learn)

## Installation

#### Dependencies:
* [Laravel 5.x](https://github.com/laravel/laravel)
* [barryvdh/laravel-cors](https://github.com/barryvdh/laravel-cors)
* [rebing/graphql-laravel](https://github.com/rebing/graphql-laravel)
* [tymon/jwt-auth](https://github.com/tymondesigns/jwt-auth)
* [noh4ck/graphiql](https://github.com/noh4ck/laravel-graphiql)


#### Setup Composer.json:

**1-** Require the package via Composer in your `composer.json`.
```json
{
  "require": {
    "barryvdh/laravel-cors": "^0.9.2",
    "rebing/graphql-laravel": "dev-master",
    "tymon/jwt-auth": "^0.5.11",
    "noh4ck/graphiql": "dev-master"
  },
  "repositories": [
      {
          "type": "vcs",
          "url": "https://github.com/ardani/laravel-graphiql"
      }
  ]
}
```

**2-** Run Composer to install or update the new requirement.

```bash
$ composer install
```

**3-** Create file  `.env` and  setting database in `.env`
 
**4-** Run artisan migrate and seeder

 ```bash
 $ php artisan migrate
 $ php artisan db:seed
 ```
 
**5-** Run application

```bash
 $ php artisan serve
 ```
 
 GraphQL : [http://127.0.0.1:8000/graphql/query](http://127.0.0.1:8000/graphql/query)

 GraphQL Ui : [http://127.0.0.1:8000/graphql-ui](http://127.0.0.1:8000/graphql-ui)