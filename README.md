

<h1 align="center">
  <br>
  <a href="https://notesync.kauarodrigues.com.br"><img src="https://kauarodrigues.com.br/assets/notesync/notesync-icon.png" alt="NoteSync" width="200"></a>
  <br>
  NoteSync
  <br>
</h1>

<h4 align="center">Aplicativo web de gerenciamento de notas simples desenvolvido com <a href="https://laravel.com" target="_blank">Laravel</a>.</h4>
<div align="center">
  <a  href="https://notesync.kauarodrigues.com.br"><img src="https://kauarodrigues.com.br/assets/notesync/useNoteSync.gif" alt="NoteSync"></a>
</div>

## Sobre o Projeto
O NoteSync é um projeto de estudos e meu primeiro projeto desenvolvido com o framework Laravel. É um aplicativo web que permite criar e gerenciar notas de forma prática e organizada. Ao longo do desenvolvimento, busquei aplicar os conhecimentos adquiridos e explorar as funcionalidades oferecidas pelo Laravel.

## Principais Funcionalidades
- Criação e edição de notas
    -   Possui recursos de formatação de texto, como negrito, itálico, sublinhado, alinhamento de texto, listas, links e muito mais
-   Busca de notas
    -   Os usuários podem localizar uma nota específica pelo título ou por um trecho de texto dentro das notas
-   Login
    -   Os usuários podem fazer login de forma rápida usando suas contas do Google ou podem optar por criar uma conta manualmente no aplicativo.
-   Controle de Acesso
    -   Utilizando o recurso de Gates, cada usuário tem acesso exclusivo às suas próprias notas. Dessa forma, os usuários não podem visualizar ou editar as notas de outros usuários
-   Temas claro e escuro

## Demo
Você pode conferir a demonstração do projeto NoteSync <a  href="https://notesync.kauarodrigues.com.br">clicando aqui</a>. Aproveite para explorar as funcionalidades e experimentar! Se tiver alguma dúvida, feedback ou encontrar algum erro, sinta-se à vontade para entrar em contato. Agradeço sua visita!

## Como Usar
Para utilizar o NoteSync, você precisará do Git e do Composer instalados em seu computador. Além disso, é necessário ter o servidor MySQL em execução e configurar corretamente o arquivo .env com as informações do banco de dados. A partir das linhas de comando:

```bash
# Clone este repositório
$ git clone https://github.com/rodrigueskaua/NoteSync.git

# Acesse a pasta do projeto
$ cd NoteSync

# Instale as dependências do Laravel
$ composer install

# Configure o arquivo .env com as informações do banco de dados

# Gere a chave de criptografia do Laravel
$ php artisan key:generate

# Rode as migrações para criar as tabelas no banco de dados
$ php artisan migrate

# Inicie o servidor local do Laravel
$ php artisan serve
```
## Tecnologias e Bibliotecas
O NoteSync utiliza as seguintes tecnologias e bibliotecas de código aberto:

-   [Laravel](https://laravel.com/): O framework PHP utilizado para o desenvolvimento do backend do aplicativo
-   [MySQL](https://www.mysql.com/): O banco de dados usado para armazenar as notas e informações dos usuários
-   [CKEditor](https://ckeditor.com/): Biblioteca  que oferece uma ferramenta de edição de texto avançada para a criação e edição de notas
-   [Socialite](https://laravel.com/docs/8.x/socialite): Biblioteca do Laravel que permite o login com contas do Google
-   [Laravel Lang](https://github.com/caouecs/Laravel-lang): Biblioteca que fornece suporte para múltiplos idiomas no Laravel
-   [Bootstrap](https://getbootstrap.com/): Framework CSS utilizado para criar interfaces responsivas e estilizadas
-   [Box Icons](https://boxicons.com/): Biblioteca de ícones

---
> GitHub [@rodrigueskaua](https://github.com/rodrigueskaua) 


