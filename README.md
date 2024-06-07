Descrição do projeto.

## Requisitos

-   PHP >= 7.3
-   Composer
-   Node.js
-   npm
-   MySQL

## Instalação

1. Clone o repositório:

    ```bash
    git clone <URL_DO_REPOSITÓRIO>
    ```

2. Navegue até o diretório do projeto:

    ```bash
    cd nome_do_diretorio
    ```

3. Instale as dependências do Composer:

    ```bash
    composer install
    ```

4. Copie o arquivo de ambiente:

    ```bash
    cp .env.example .env
    ```

5. Configure o arquivo `.env` com as informações do seu ambiente, incluindo a conexão com o banco de dados.

6. Gere uma nova chave de aplicativo:

    ```bash
    php artisan key:generate
    ```

7. Execute as migrações do banco de dados e os seeds (se necessário):
    ```bash
    php artisan migrate --seed
    ```

## Execução

1. Inicie o servidor embutido do Laravel:

    ```bash
    php artisan serve
    ```

2. Acesse a aplicação em seu navegador: [http://localhost:8000](http://localhost:8000)

Para acessar o "sistema":

Usuário: userteste
E-mail: userteste@gmail.com
Senha: password
