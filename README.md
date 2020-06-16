# Programa de estudos
## Projeto para criação de programas de estudos para concursos.

### Stack

- PHP 7.3.*
- Laravel 7.*
- MySQL 8.0.*
- VueJS 2.*
- Vuex 3.4*
- Vuetify 2.*
- Docker

### Inicialização do projeto

1. Clone o repositório: git clone https://github.com/cgalvaojr/programa-estudos.git && cd programa-estudos
2. Faça o build das imagens do docker: docker-compose up --build
3. Acesse a imagem do backend: docker-exec -it programa-estudos-server sh
4. Execute as migrations, gerando as tabelas e dados básicos: php artisan migrate --seed
5. Acesse a aplicação e voilà: localhost:8081

