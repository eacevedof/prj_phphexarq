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

# [Github - repo Platziphp](https://github.com/platzi/platziphp)
# [Github - Repo PlatziLaravel](https://github.com/platzi/platzilaravel)

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


## 10 [Youtube - ]()
## 11 [Youtube - ]()
## 12 [Youtube - ]()
## 13 [Youtube - ]()
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
