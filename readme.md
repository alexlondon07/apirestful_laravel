## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)


La estructura de nuestro recurso “users” hasta ahora sería la siguiente:
# apirestful.app =  Nuestro host virtual creado

+--------+----------+----------------------------+-------------------------+------------------------------------------------+------------+
| Domain | Method   | URI                        | Name                    | Action                                         | Middleware |
+--------+----------+----------------------------+-------------------------+------------------------------------------------+------------+
|        | GET|HEAD | /                          |                         | Closure                                        |            |
|        | GET|HEAD | api/v1/products            | api.v1.products.index   | App\Http\Controllers\ProductController@index   | cors       |
|        | POST     | api/v1/products            | api.v1.products.store   | App\Http\Controllers\ProductController@store   | cors       |
|        | GET|HEAD | api/v1/products/{products} | api.v1.products.show    | App\Http\Controllers\ProductController@show    | cors       |
|        | PUT      | api/v1/products/{products} | api.v1.products.update  | App\Http\Controllers\ProductController@update  | cors       |
|        | PATCH    | api/v1/products/{products} |                         | App\Http\Controllers\ProductController@update  | cors       |
|        | DELETE   | api/v1/products/{products} | api.v1.products.destroy | App\Http\Controllers\ProductController@destroy | cors       |
|        | GET|HEAD | api/v1/users               | api.v1.users.index      | App\Http\Controllers\UserController@index      | cors       |
|        | POST     | api/v1/users               | api.v1.users.store      | App\Http\Controllers\UserController@store      | cors       |
|        | GET|HEAD | api/v1/users/{users}       | api.v1.users.show       | App\Http\Controllers\UserController@show       | cors       |
|        | PUT      | api/v1/users/{users}       | api.v1.users.update     | App\Http\Controllers\UserController@update     | cors       |
|        | PATCH    | api/v1/users/{users}       |                         | App\Http\Controllers\UserController@update     | cors       |
|        | DELETE   | api/v1/users/{users}       | api.v1.users.destroy    | App\Http\Controllers\UserController@destroy    | cors       |
|        | POST     | oauth/access_token         |                         | Closure                                        |            |
+--------+----------+----------------------------+-------------------------+------------------------------------------------+------------+
