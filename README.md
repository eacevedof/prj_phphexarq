# [Arquitectura Hexagonal Laravel por Guido Woda @guiwoda](https://www.youtube.com/watch?v=mOKh7n_Ycgk&index=1&list=PLHseQfu4Nn9fHNcLfF_ZP6noF24xtMtAf)

<img src="https://trello-attachments.s3.amazonaws.com/5b014dcaf4507eacfc1b4540/5b868426d6835a7f513bca60/c93707afa1dbc8c95f7fe605fdd88b9c/image.png" 
height="300" width="400"/>

```ssh
├───public
├───src
│   ├───Domain
│   │   ├───Entities
│   │   ├───Events
│   │   ├───Exceptions
│   │   ├───Services
│   │   └───Valueobjs
│   ├───Infrastruc
│   │   ├───Adapters
│   │   └───Repositories
│   └───Application (In/Out)
│       ├───Api
│       │   ├───Controllers
│       │   └───Transformers
│       ├───Console
│       │   └───Commands
│       └───Http
│           ├───Controllers
│           └───Views
├───tests
└───vendor
    ├───composer
    ├───monolog
    └───psr
```

### [Github - repo Platziphp](https://github.com/platzi/platziphp)
### [Github - Repo PlatziLaravel](https://github.com/platzi/platzilaravel)

## 4 [Youtube - Objetos en PHP en Curso de PHP con Laravel](https://www.youtube.com/watch?v=B7cmT86TIag&list=PLHseQfu4Nn9fHNcLfF_ZP6noF24xtMtAf&index=3)
- Son métodos o mensajes
- Protected 
- Herencia

## 5 [Youtube - Testing en PHP en Curso de PHP con Laravel](https://youtu.be/ZDEQQFx6HI4?list=PLHseQfu4Nn9fHNcLfF_ZP6noF24xtMtAf&t=9)
- Preparar (Arrange)
- Actuar (Act)
- Verificar (Assert)
- **comando:** `composer require phpunit/phpunit --dev`
- Por convención se suele usar el mismo nombre más el sufijo **Test** ejemplo:`UserTest`
```php
//<project>/tests/UserTest.php
use PHPUnit\Framework\TestCase;
class UserTest extends TestCase
{
    ...
}
```
- **comando:** `./vendor/bin/phpunit tests --color=auto`
```php
$ ./vendor/bin/phpunit tests --color=auto
PHPUnit 7.3.5 by Sebastian Bergmann and contributors.
..                                                                  2 / 2 (100%)
Time: 173 ms, Memory: 4.00MB
OK (2 tests, 2 assertions)
```
- `$this->setExpectedException(\InvalidArgumentException::class);` Espero que falle 

## 6 [Youtube - Patrones De Diseño en Curso de PHP con Laravel](https://www.youtube.com/watch?v=J40LZad7GFg&index=5&list=PLHseQfu4Nn9fHNcLfF_ZP6noF24xtMtAf)
- Objetos con comportamiento común agrupados

## 7 [Youtube - Entidades con PHP en Curso de PHP con Laravel](https://www.youtube.com/watch?v=T-YdDdMulog&index=6&list=PLHseQfu4Nn9fHNcLfF_ZP6noF24xtMtAf)
- Dominio = Problema a solucionar
- La entidad es un concepto de objeto. El hecho que se asocie a una bd es pq coincide que usamos una bd.

## 8 [Youtube - Objetos De Valor con PHP en Curso de PHP con Laravel](https://www.youtube.com/watch?v=3mQZXrD2XCI&index=7&list=PLHseQfu4Nn9fHNcLfF_ZP6noF24xtMtAf)
- Son como tipos primitivos convertidos en objetos
- Ejemplo: Email
- <img src="https://trello-attachments.s3.amazonaws.com/5b8bf24a217c8e0d0c69973e/600x312/48515ecc512439755541b0e1bf4dce96/image.png" height="200" width="400" />

## 9 [Youtube - Preguntas y Respuestas en Clase en Curso de PHP con Laravel](https://www.youtube.com/watch?v=toF3ZL8C-nU&index=8&list=PLHseQfu4Nn9fHNcLfF_ZP6noF24xtMtAf)
- Value Object != Data Transfer Object. No usar Data Transfer Object.
- Los objetos deben tener comportamientos. Data Transfer solo tiene datos no comportamientos.
- Hay que hacer un modelo rico en objetos y no un modelo dependiente de datos.
- Proceso de deploy. Envoyer ayuda a hacer deploy al igual que Forge.
- Libro recomendado **Design patterns explained**
- **Domain Driven Design** y **Implementing Domain Driven Design**
- Para desacoplar se usan interfaces.

## 10 [Youtube - Preguntas antes de Clase en Curso de PHP con Laravel](https://www.youtube.com/watch?v=IYheEc7upvc&index=9&list=PLHseQfu4Nn9fHNcLfF_ZP6noF24xtMtAf)
- La herencia es un acoplamiento
- Mensajes estaticos. No se debería usar mensajes estaticos
- Cuando usar un trait y cuando una interface. En teoria de objetos el traits es algo auxiliar.
- Gestor de versiones de php [PHP Brew](https://github.com/phpbrew/phpbrew)
- En PHP7 se pueden pasar argumentos tipados y definir los tipos devueltos en comentarios
- Buenas practicas para usar php. [PHP The right way](https://phptherightway.com/)
- [Vagrant y PuPHPet](https://www.youtube.com/watch?v=Y4POP-XcS38)
- La maquina virtual de laravel es Homstead y recomienda Nginx

## 11 [Youtube - Iniciando en PHP para Web en Curso de PHP con Laravel](https://www.youtube.com/watch?v=Omd2N6In7E4&list=PLHseQfu4Nn9fHNcLfF_ZP6noF24xtMtAf&index=10)
- Patron MVC
- Collections
- Todos los frameworks ahora trabajan con rutas
- Ahora se hace APIs

## 12 [Youtube - 12 Modelo vista controlador en PHP en Curso de PHP con Laravel](https://www.youtube.com/watch?v=SFygN2rByIU&index=11&list=PLHseQfu4Nn9fHNcLfF_ZP6noF24xtMtAf)
- <img src="https://trello-attachments.s3.amazonaws.com/5b014dcaf4507eacfc1b4540/5b8bf24a217c8e0d0c69973e/3189bd1072bbb2a48a04c5626eead8b7/image.png" height="200" width="400"/> 
- Hay que evitar tanto acoplamiento con la web
- Las vistas se gestionan con templates

## 13 [Youtube - Controlador en Curso de PHP con Laravel](https://www.youtube.com/watch?v=6T4mvRAFYhU&index=12&list=PLHseQfu4Nn9fHNcLfF_ZP6noF24xtMtAf)
- Es un mediador
- Se asocia a un pedido HTTP 
- Usa el request de Symfony
- **comando:**  `composer require illuminate/http`
    ```ssh
    $ composer require illuminate/http
    Using version ^5.7 for illuminate/http
    ./composer.json has been updated
    Loading composer repositories with package information
    Updating dependencies (including require-dev)
    Package operations: 17 installs, 0 updates, 0 removals
    - Installing symfony/polyfill-ctype (v1.9.0): Loading from cache
    - Installing symfony/polyfill-mbstring (v1.9.0): Loading from cache
    - Installing symfony/http-foundation (v4.1.4): Loading from cache
    - Installing symfony/event-dispatcher (v4.1.4): Loading from cache
    - Installing symfony/debug (v4.1.4): Loading from cache
    - Installing symfony/http-kernel (v4.1.4): Loading from cache
    - Installing symfony/translation (v4.1.4): Loading from cache
    - Installing nesbot/carbon (1.33.0): Downloading (100%)
    - Installing psr/simple-cache (1.0.1): Loading from cache
    - Installing psr/container (1.0.0): Loading from cache
    - Installing illuminate/contracts (v5.7.3): Downloading (100%)
    - Installing doctrine/inflector (v1.3.0): Loading from cache
    - Installing illuminate/support (v5.7.3): Downloading (100%)
    - Installing symfony/finder (v4.1.4): Loading from cache
    - Installing illuminate/filesystem (v5.7.3): Downloading (100%)
    - Installing illuminate/session (v5.7.3): Downloading (100%)
    - Installing illuminate/http (v5.7.3): Downloading (100%)
    symfony/event-dispatcher suggests installing symfony/dependency-injection ()
    symfony/http-kernel suggests installing symfony/browser-kit ()
    symfony/http-kernel suggests installing symfony/config ()
    symfony/http-kernel suggests installing symfony/console ()
    symfony/http-kernel suggests installing symfony/dependency-injection ()
    symfony/http-kernel suggests installing symfony/var-dumper ()
    symfony/translation suggests installing symfony/config ()
    symfony/translation suggests installing symfony/yaml ()
    illuminate/support suggests installing moontoast/math (Required to use ordered UUIDs (^1.1).)
    illuminate/support suggests installing ramsey/uuid (Required to use Str::uuid() (^3.7).)
    illuminate/support suggests installing symfony/process (Required to use the composer class (^4.1).)
    illuminate/support suggests installing symfony/var-dumper (Required to use the dd function (^4.1).)
    illuminate/filesystem suggests installing league/flysystem (Required to use the Flysystem local and FTP drivers (^1.0).)
    illuminate/filesystem suggests installing league/flysystem-aws-s3-v3 (Required to use the Flysystem S3 driver (^1.0).)
    illuminate/filesystem suggests installing league/flysystem-cached-adapter (Required to use the Flysystem cache (^1.0).)
    illuminate/filesystem suggests installing league/flysystem-rackspace (Required to use the Flysystem Rackspace driver (^1.0).)
    illuminate/filesystem suggests installing league/flysystem-sftp (Required to use the Flysystem SFTP driver (^1.0).)
    illuminate/session suggests installing illuminate/console (Required to use the session:table command (5.7.*).)
    Writing lock file
    Generating autoload files
    ```
    - laravel tiene una particularidad. Tiene, el **laravel/framework** el **/laravel** como esqueleto de la app y sus paquetes independientes estan en el ns **Illuminate**
- levantar el servidor propio de php **comando:** `php -S localhost:3300`
- Uso del objeto **use Illuminate\Http\Request**
    ```php   
    object(Illuminate\Http\Request)#18 (27) {
    ["json":protected]=> NULL
    ["convertedFiles":protected]=> NULL
    ["userResolver":protected]=> NULL
    ["routeResolver":protected]=> NULL
    ["attributes"]=> object(Symfony\Component\HttpFoundation\ParameterBag)#20 (1) {
        ["parameters":protected]=>   array(0) { }
    }
    ["request"]=> object(Symfony\Component\HttpFoundation\ParameterBag)#26 (1) {
        ["parameters":protected]=>   array(0) { }
    }
    ["query"]=> object(Symfony\Component\HttpFoundation\ParameterBag)#26 (1) {
        ["parameters":protected]=>   array(0) { }
    }
    ["server"]=> object(Symfony\Component\HttpFoundation\ServerBag)#22 (1) {
        ["parameters":protected]=>   array(22) {
        ["DOCUMENT_ROOT"]=> string(36) "E:\xampp\htdocs\prj_phphexarq\public"
        ["REMOTE_ADDR"]=> string(3) "::1"
        ["REMOTE_PORT"]=> string(5) "61053"
        ["SERVER_SOFTWARE"]=> string(28) "PHP 7.2.9 Development Server"
        ["SERVER_PROTOCOL"]=> string(8) "HTTP/1.1"
        ["SERVER_NAME"]=> string(9) "localhost"
        ["SERVER_PORT"]=> string(4) "3300"
        ["REQUEST_URI"]=> string(1) "/"
        ["REQUEST_METHOD"]=> string(3) "GET"
        ["SCRIPT_NAME"]=> string(10) "/index.php"
        ["SCRIPT_FILENAME"]=> string(46) "E:\xampp\htdocs\prj_phphexarq\public\index.php"
        ["PHP_SELF"]=> string(10) "/index.php"
        ["HTTP_HOST"]=> string(14) "localhost:3300"
        ["HTTP_CONNECTION"]=> string(10) "keep-alive"
        ["HTTP_CACHE_CONTROL"]=> string(9) "max-age=0"
        ["HTTP_UPGRADE_INSECURE_REQUESTS"]=> string(1) "1"
        ["HTTP_USER_AGENT"]=> string(114) "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.92 Safari/537.36"
        ["HTTP_ACCEPT"]=> string(85) "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8"
        ["HTTP_ACCEPT_ENCODING"]=> string(17) "gzip, deflate, br"
        ["HTTP_ACCEPT_LANGUAGE"]=> string(14) "es-ES,es;q=0.9"
        ["REQUEST_TIME_FLOAT"]=> float(1536967166.4678)
        ["REQUEST_TIME"]=> int(1536967166)
        }
    }
    ["files"]=> object(Symfony\Component\HttpFoundation\FileBag)#23 (1) {
        ["parameters":protected]=> array(0) { }
    }
    ["cookies"]=> object(Symfony\Component\HttpFoundation\ParameterBag)#21 (1) {
        ["parameters":protected]=> array(0) { }
    }
    ["headers"]=> object(Symfony\Component\HttpFoundation\HeaderBag)#24 (2) {
        ["headers":protected]=> array(8) {
        ["host"]=> array(1) { [0]=> string(14) "localhost:3300" }
        ["connection"]=> array(1) { [0]=> string(10) "keep-alive" }
        ["cache-control"]=> array(1) { [0]=> string(9) "max-age=0" }
        ["upgrade-insecure-requests"]=> array(1) { [0]=> string(1) "1" }
        ["user-agent"]=> array(1) { [0]=> string(114) "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.92 Safari/537.36" }
        ["accept"]=> array(1) { [0]=> string(85) "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8" }
        ["accept-encoding"]=> array(1) { [0]=> string(17) "gzip, deflate, br" }
        ["accept-language"]=> array(1) { [0]=> string(14) "es-ES,es;q=0.9" }
        }
        ["cacheControl":protected]=>   array(1) {
        ["max-age"]=> string(1) "0"
        }
    }
    ["content":protected]=> NULL
    ["languages":protected]=> NULL
    ["charsets":protected]=> NULL
    ["encodings":protected]=> NULL
    ["acceptableContentTypes":protected]=> NULL
    ["pathInfo":protected]=> NULL
    ["requestUri":protected]=> NULL
    ["baseUrl":protected]=> NULL
    ["basePath":protected]=> NULL
    ["method":protected]=> NULL
    ["format":protected]=> NULL
    ["session":protected]=> NULL
    ["locale":protected]=> NULL
    ["defaultLocale":protected]=> string(2) "en"
    ["isHostValid":"Symfony\Component\HttpFoundation\Request":private]=> bool(true)
    ["isForwardedValid":"Symfony\Component\HttpFoundation\Request":private]=> bool(true)
    }
    ```
- 

## 14 [Youtube - ]()
## 15 [Youtube - ]()
## 16 [Youtube - ]()
## 17 [Youtube - ]()
## 18 [Youtube - ]()
## 19 [Youtube - ]()
## 20 [Youtube - ]()
## 21 [Youtube - ]()
## 22 [Youtube - ]()



## servicios
- punto de conexión entre la web y las otras capas
- el coordinador de todo lo que pasa en el dominio
