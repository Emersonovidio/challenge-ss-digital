🚀 Projeto

Este projeto é composto por uma API em Laravel, uma aplicação web em Html e outra aplicação em React, todos conectados a um banco de dados PostgreSQL rodando em um contêiner Docker.

📋 Requisitos

Certifique-se de ter os seguintes requisitos instalados:

Docker

Docker Compose

Node.js (para o frontend React)

Composer (para Laravel)

🔧 Configuração do Ambiente

Clone este repositório:

git clone https://github.com/Emersonovidio/challenge-ss-digital
cd challenge-ss-digital

Copie os arquivos de ambiente:

cp .env.example .env

Atualize as variáveis de ambiente conforme necessário, principalmente as credenciais do banco de dados no .env da API e da aplicação web.

🐳 Configuração do Docker

Suba os contêineres do banco de dados:

docker-compose up -d

Verifique se o banco de dados está rodando:

docker ps

🌐 Backend (API Laravel)

Acesse a pasta da API:

cd api

Instale as dependências do Laravel:

composer install

Gere a chave da aplicação:

php artisan key:generate

Execute as migrações:

php artisan migrate

Inicie o servidor Laravel:

php artisan serve --host=0.0.0.0 --port=8001

A API estará disponível em http://localhost:8001.


🌍 Aplicação Web (Html)

Acesse a pasta da aplicação web:

cd app-web

Execute o comando:

php -S localhost:8000

A aplicação estará disponível em http://localhost:8000.

⚛️ Frontend (React)

Acesse a pasta do app-react:

cd app-react

Instale as dependências:

npm install

Inicie o servidor de desenvolvimento:

npm start

O frontend estará disponível em http://localhost:3000.

🚀 Executando o Projeto Completo

Certifique-se de que os contêineres do banco de dados estão rodando:

docker-compose up -d

Inicie a API:

cd backend
php artisan serve --host=0.0.0.0 --port=8001

Inicie a aplicação web:

cd web
php artisan serve --host=0.0.0.0 --port=8000

Inicie o frontend React:

cd frontend
npm start

Agora, seu projeto estará rodando com:

API Laravel: http://localhost:8001

Aplicação Web Laravel: http://localhost:8000

Frontend React: http://localhost:3000

🛠️ Comandos Úteis

Parar os contêineres Docker:

docker-compose down

Reiniciar os contêineres:

docker-compose restart

Limpar cache do Laravel:

php artisan cache:clear && php artisan config:clear && php artisan route:clear

📜 Licença

Este projeto está licenciado sob a MIT License.