<div align="center">
  <a href="https://notesync.kauarodrigues.com">
    <img src="https://raw.githubusercontent.com/rodrigueskaua/Assets-For-Readmes/master/NoteSync/favicon.svg" alt="Logo" width="120" height="120">
  </a>

  <h3 align="center">NoteSync</h3>

  <p align="center">
    Aplicação web para criação e organização de anotações
    <br> <br> 
    <a href="https://notesync.kauarodrigues.com">Ver Deploy</a>
  </p>
</div>

## Sobre
<div align="center">
  <img src="https://raw.githubusercontent.com/rodrigueskaua/Assets-For-Readmes/master/NoteSync/NoteSync-Show.gif" alt="Demonstração do Projeto" />
</div>
<br>
<p><strong>NoteSync</strong> é uma aplicação web para anotações simples, desenvolvida com o objetivo de permitir que o usuário escreva notas rápidas de forma prática e organizada. Apesar da proposta minimalista, oferece recursos de formatação de texto, como <strong>negrito</strong>, <em>itálico</em>, listas, links e alinhamento, proporcionando uma experiência de escrita mais completa.</p>

<p>Com uma interface intuitiva, suporte a login via Google, sistema de busca eficiente e controle de acesso individual às anotações, a aplicação alia praticidade e segurança. É uma solução leve e funcional para quem precisa registrar ideias, tarefas ou pensamentos no dia a dia.</p>

## Demo
Você pode conferir o projeto NoteSync <a  href="https://notesync.kauarodrigues.com">clicando aqui</a>.

## Stack

O projeto foi desenvolvido com as seguintes tecnologias e bibliotecas:

<a href="https://laravel.com" target="_blank">
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel Badge" />
</a>
<a href="https://getbootstrap.com/" target="_blank">
  <img src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap Badge" />
</a>
<a href="https://www.mysql.com/" target="_blank">
  <img src="https://img.shields.io/badge/MySQL-00758F?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL Badge" />
</a>
<a href="https://jquery.com/" target="_blank">
  <img src="https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white" alt="jQuery Badge" />
</a>

### Bibliotecas complementares

[CKEditor](https://ckeditor.com/) <br>
[Laravel Socialite](https://laravel.com/docs/8.x/socialite) <br>
[Laravel Lang](https://github.com/caouecs/Laravel-lang) <br>
[Box Icons](https://boxicons.com/) <br>

## Como Usar

Siga as etapas abaixo para rodar o projeto localmente.

### Pré-requisitos

Certifique-se de ter os seguintes itens instalados:

- PHP >= 8.x
- Composer
- Node.js e npm
- MySQL ou outro banco de dados compatível

### Instalação

#### Clone o repositório:
```sh
git clone https://github.com/rodrigueskaua/NoteSync.git
```

#### Acesse a pasta do projeto:
```sh
cd NoteSync
```

#### Instale as dependências do backend:
```sh
composer install
```

#### Instale as dependências do frontend:
```sh
npm install
```

#### Copie o arquivo `.env.example` para `.env` e gere a chave da aplicação:
```sh
cp .env.example .env
php artisan key:generate
```

#### Configure o arquivo .env com as informações do banco de dados

#### Configure o banco de dados e execute as migrations:
```sh
php artisan migrate
```

#### Inicie o servidor:
```sh
php artisan serve
```
