# base-app 2.0

##### The base application in PhalconPHP
Use this application as a way to quick start any new project.
See working [base-app](http://mruz.pl/base-app), user/pass: user user, admin admin.
#####Migration to 2.0 in progress, demo may not work properly!
***
### Features:
* Bootstrap file
* Config file
* Console file
* HMVC support
* Volt template
* Frontend/Backend/Cli modules
* Environment
 * _development_ - display debug, always compile template files, always minify assets
 * _staging_ - log debug, notify admin, only checks for changes in the children templates, checks for changes and minify assets
 * _production_ - log debug, notify admin, don't check for differences, don't create missing files, compiled and minified files must exist before!
* Library
 * [Arr](https://github.com/mruz/base-app/wiki/Arr)
 * [Auth](https://github.com/mruz/base-app/wiki/Auth)
 * [Debug](https://github.com/mruz/base-app/wiki/Debug)
 * [Email](https://github.com/mruz/base-app/wiki/Email)
 * [I18n](https://github.com/mruz/base-app/wiki/I18n)
 * [Tool](https://github.com/mruz/base-app/wiki/Tool)
* User
 * Models
 * Auth schema mysql
* Twitter Bootstrap 3.1.0

### Configuration:
1. Set *base_uri* and other settings in */app/common/config/config.ini*
2. Use */auth-schema-mysql.sql* to create required tables
3. Make sure that these directories are writable by the web server:
 * `/app/common/logs`
 * `/app/common/cache`
 * `/public/min`

### Requirements:
* Phalcon **2.0.0**

### Links:
* [Phalcon PHP](https://phalconphp.com)
* [Github repo](https://github.com/mruz/base-app)
* [Issues](https://github.com/mruz/base-app/issues)
* [Example](http://mruz.pl/base-app)
* [Twitter Bootstrap](http://getbootstrap.com)

### Example volt usage:
##### auth in views 
```
{% if auth.logged_in() %}
    {{ auth.get_user().username }}
{% endif %}
```

##### easy translation with __() function
```
{% if auth.logged_in('admin') %}
    {{ __('Hello :user', [':user' : auth.get_user().username]) }}
{% endif %}
```
