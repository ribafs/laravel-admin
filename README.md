# Laravel Admin

Uma administração simples, tipo dashboard, para aplicativos laravel 8, usando ACL e o framework BootStrap 4.

## Faça uma nova instalação do laravel 8

cd /var/www/html

laravel new laradmin --jet --stack=livewire

cd laradmin

npm install && npm run dev && npm audit fix

## Download do repositório

Clone o repositório ou faça donwload

https://github.com/ribafs/laravel-admin

Descompacte e copie mesclando e sobrescrevendo todos os arquivos e pastas deste repositório para a pasta /var/www/html/laradmin em seu desktop

## Crie o banco de dados e configure

.env

Mude o tírulo do aplicativo no .env para algo que queira. Sugestão

APP_NAME='Simple Laravel Admin'

## Execute as migrations com seeders

php artisan migrate --seed

## Testando

php artisan serve

http://localhost:8000

Clique em Área Pública

Experimente navegar

Agora faça login com os 4 users e experimente a navegação

email - super@mail.org
senha - 123456

email - admin@mail.org
senha - 123456

email - manager@mail.org
senha - 123456

email - user@mail.org
senha - 123456

## Sugestões para testar o ACL

https://ribafs.github.io/laravel-acl-exist/testing/

