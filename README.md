<img width="1855" height="720" alt="conexo_case_study copiar" src="https://github.com/user-attachments/assets/57fe3662-3414-4b3e-8fc2-7fe328527e63" />

<h1 align="center">🎮 Conexo Temático</h1>

Jogo baseado no [Conexo](https://conexo.ws/) desenvolvido como trabalho de **Desenvolvimento de Sistemas** (IFRS - BG). 

## Funcionalidades
Permite que professores criem jogos temáticos, no estilo do Conexo, sobre suas disciplinas.


### Tecnologias 💻
<div>
    <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white">
    <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black">
    <img src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white">
    <img src="https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white">
</div>


## Instalação e uso📥

_Aqui está uma explicação passo a passo de como instalar e usar o sistema._

1. Clone o repositório
    ```sh
    git clone https://github.com/LucasAntunesDev/conexo.git
    ```
2. Instale as dependências
    ```sh
    composer install
    npm install
    ```
3. Crie um arquivo .env
    ```
    cp .env.example .env
    ```
4. Criar uma chave da aplicação
    ```
    php artisan key:generate
    ```
5. Crie as migrations e seeders
    ```
     php artisan migrate --seed
    ```
6. Rode os servidores __PHP__ e de desenvolvimento
    ```
    npm run dev
    php artisan serve
    ```
