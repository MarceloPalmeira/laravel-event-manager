# Laravel Event Manager

Laravel Event Manager é um sistema de gerenciamento de eventos desenvolvido com Laravel. Este projeto permite criar, listar e gerenciar eventos de maneira eficiente.

## Requisitos

Certifique-se de ter os seguintes requisitos instalados em sua máquina:

- PHP 8.0 ou superior
- Composer
- Node.js e NPM
- MySQL ou outro banco de dados compatível

## Configuração

Siga os passos abaixo para configurar e rodar o projeto:

### 1. Clone o Repositório

Clone o repositório para sua máquina local:

```bash
git clone [https://github.com/MarceloPalmeira/laravel-event-manager/]
cd laravel-event-manager
```

### 2. Configure o Arquivo `.env`

Crie o arquivo `.env` com base no arquivo `.env.example`:

```bash
cp .env.example .env
```

Atualize as configurações no arquivo `.env` de acordo com o seu ambiente, como informações do banco de dados.

### 3. Instale as Dependências do Composer

Instale as dependências do PHP:

```bash
composer install
```

### 4. Configure as Chaves de Aplicação

Gere a chave de aplicação do Laravel:

```bash
php artisan key:generate
```

### 5. Execute as Migrations

Crie as tabelas no banco de dados configurado:

```bash
php artisan migrate
```

### 6. Instale as Dependências do NPM

Instale as dependências do Node.js:

```bash
npm install
```

### 7. Compile os Assets

Compile os arquivos front-end:

```bash
npm run dev
```

### 8. Inicie o Servidor

Por fim, inicie o servidor de desenvolvimento do Laravel:

```bash
php artisan serve
```

O projeto estará disponível em [http://127.0.0.1:8000](http://127.0.0.1:8000).
