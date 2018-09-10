# [Arquitectura Hexagonal Laravel por Guido Woda @guiwoda](https://www.youtube.com/watch?v=mOKh7n_Ycgk&index=1&list=PLHseQfu4Nn9fHNcLfF_ZP6noF24xtMtAf)

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

## 6 [Youtube - ]()
## 7 [Youtube - ]()
## 8 [Youtube - ]()
## 9 [Youtube - ]()
## 10 [Youtube - ]()
## 11 [Youtube - ]()



## servicios
- punto de conexión entre la web y las otras capas
- el coordinador de todo lo que pasa en el dominio
