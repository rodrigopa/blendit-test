## Teste BlendIT
O projeto foi realizado utilizando 3 containers do Docker, orquestrados pelo Docker Compose.

Tecnologias:

Laravel Collective HTML para a criação das tags HTML utilizadas nos templates Blade.

Laravel Eloquent, ORM padrão do Laravel para operações com o banco de dados.

Laravel PT-BR Localization para tradução das mensagens do sistema em Português.

### Instruções
Ir na raiz do projeto e rodar
```docker compose up```.

Rodar as migrations com o ```docker exec -ti blendit-php-fpm-1 php artisan migrate```.

Rodar os seeds com o ```docker exec -ti blendit-php-fpm-1 php artisan db:seed --class UsersSeeder```.

Acessar o sistema em http://localhost:8004.

### Currículo
Meu currículo se encontra na raiz do projeto com o nome de Curriculo.pdf.
