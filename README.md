# Top Moto Peças

Sistema web para gestão de oficina e loja de peças de motos, desenvolvido em Laravel.

## Sobre o Projeto

O **Top Moto Peças** é uma aplicação para controle de ordens de serviço, cadastro de clientes, motos, peças, usuários e gerenciamento administrativo. O sistema permite registrar serviços realizados, controlar estoque de peças, cadastrar usuários (admin e funcionários) e gerar relatórios.

## Funcionalidades

- Cadastro e gerenciamento de clientes e motos
- Cadastro e controle de peças e estoque
- Emissão e acompanhamento de ordens de serviço
- Cadastro de usuários (admin e funcionários)
- Painel administrativo com atalhos para funções principais
- Autenticação de usuários e controle de acesso (admin)
- Layout responsivo com Tailwind CSS

## Tecnologias Utilizadas

- [Laravel](https://laravel.com/) 10+
- [Tailwind CSS](https://tailwindcss.com/)
- MySQL/MariaDB
- Vite

## Instalação

1. Clone o repositório:
   ```
   git clone https://github.com/seu-usuario/seu-repositorio.git
   cd TopMotoPecasLaravel
   ```

2. Instale as dependências PHP e JS:
   ```
   composer install
   npm install
   ```

3. Copie o arquivo `.env.example` para `.env` e configure o banco de dados.

4. Gere a chave da aplicação:
   ```
   php artisan key:generate
   ```

5. Rode as migrations e seeds:
   ```
   php artisan migrate --seed
   ```

6. Compile os assets:
   ```
   npm run dev
   ```

7. Inicie o servidor:
   ```
   php artisan serve
   ```

## Observações

- Este projeto está em desenvolvimento e novas funcionalidades serão adicionadas.
- Para acessar o painel admin, cadastre um usuário com permissão de administrador.
- O layout utiliza Tailwind CSS e pode ser customizado em `resources/css/app.css`.

## Licença

Este projeto está licenciado sob a licença MIT.
