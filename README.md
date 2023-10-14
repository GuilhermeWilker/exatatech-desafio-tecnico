# Teste técnico Exata tech

Este é um projeto desenvolvido como parte do teste técnico proposto pela empresa Exata Tech.

O projeto utiliza os seguintes frameworks e tecnologias: Laravel, Vue, Tailwind e o banco de dados relacional MySQL.

![home](/images/home-page.png)

## Requisitos

**Configuração de Ambiente e Boilerplate:**

-   [x] Adicionar o pacote Breeze.

-   [x] Suporte ao Vue com SSR (Server-Side Rendering).

-   [x] Implementar perfis de controle de acesso de usuário.

**Customização da Aplicação:**

-   [x] Desenvolver um Seeder para criar um usuário com o email "admin@exata.it" com a função "superadmin" e uma senha aleatória que deve ser apresentada no console ao migrar o banco de dados.

-   [x] Desenvolver uma interface com Vue para realizar operações CRUD de usuários, acessível apenas para usuários com a função "superadmin"

-   [x] Desabilitar completamente a funcionalidade de registro de novos usuários.

-   [x] Utilizar o framework Tailwind CSS para estilos

-   [x] Utilizar o framework PrimeVue para componentes como DataTable, Input (group, text, number, etc.), Button, etc.

**Definição do Layout da Aplicação:**

-   [x] Menu lateral à esquerda, ocupando toda a tela.

-   [x] Barra no topo com o nome do usuário e um dropdown para fazer logout.

## Instalação do projeto

1. Clone o repositório: `git clone https://github.com/GuilhermeWilker/exatatech-desafio-tecnico.git`
2. Instale as dependências do Composer: `composer install`
3. Instale as dependências do Node: `npm install`
4. Execute migrações do banco de dados: `php artisan migrate`
5. Execute o seeder de administrador: `php artisan db:seed --class=AdminSeeder`

![comando-php](/images/comando-db-seed.png)

**----**

1. Inicie o servidor php: `php artisan serve`
2. Inicie o servidor node: `npm run dev`
