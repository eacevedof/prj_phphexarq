# [Arquitectura Hexagonal Laravel por Guido Woda @guiwoda](https://www.youtube.com/watch?v=mOKh7n_Ycgk&index=1&list=PLHseQfu4Nn9fHNcLfF_ZP6noF24xtMtAf)

<img src="https://trello-attachments.s3.amazonaws.com/5b014dcaf4507eacfc1b4540/5b868426d6835a7f513bca60/c93707afa1dbc8c95f7fe605fdd88b9c/image.png" 
height="300" width="400">
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
│   └───Inout
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
-

## 7 [Youtube - ]()
## 8 [Youtube - ]()
## 9 [Youtube - ]()
## 10 [Youtube - ]()
## 11 [Youtube - ]()



## servicios
- punto de conexión entre la web y las otras capas
- el coordinador de todo lo que pasa en el dominio
