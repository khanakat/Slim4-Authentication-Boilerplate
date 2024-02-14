# Aplicación Boilerplate Slim4 + Authentications + Migrations

> Autor : Fernando Calmet  
https://github.com/fernandocalmet  

<a href='https://ko-fi.com/fernandocalmet' target='_blank'>
  <img height='36' style='border:0px;height:36px;' src='https://az743702.vo.msecnd.net/cdn/kofi3.png?v=2' border='0' alt='Buy Me a Coffee at ko-fi.com' />
</a>

---

## Installation

1. Install Composer.
2. Run the command `composer update` to install vendor dependencies.
3. Ensure that your `extension=pdo_mysql` extension in your `php.ini` file is unmarked.
4. Create a copy of the `config.example.php` file from the boostrap folder (`config.php`).
5. Configure your database in the `config.php` file.
6. Run the command `composer migrate`.
7. Configure your google captcha in the `config.php` file (reCaptcha V2).
8. Run the application with the command `composer start`.

## Includes

- Dependency Injection
- Twig templates
- Eloquent ORM
- Easy form validation
- Phinx migrations
- Session based authentication
- CSRF protection middleware
- Config helper
- Symfony var dumper

## Dependencies

- slim/slim
- slim/psr-7
- slim/twig-view
- slim/flash
- slim/csrf
- php-di/slim-bridge
- symfony/var-dumper
- robmorgan/phinx
- illuminate/database
- illuminate/validation
- google/recaptcha

## Demo
![Demostracion GIF](docs/demo.gif)
