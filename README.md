# [Arquitectura Hexagonal](https://www.youtube.com/watch?v=o-j1Sc_0BsA&list=PLHseQfu4Nn9fHNcLfF_ZP6noF24xtMtAf)

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

## servicios
- punto de conexión entre la web y las otras capas
- el coordinador de todo lo que pasa en el dominio
