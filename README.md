# Laravel Admin

Uma administração simples para aplicativos laravel 8, usando ACL.

## Faça uma nova instalação do laravel 8

cd /var/www/html

laravel new laradmin --jet --stack=livewire

cd laradmin

npm install && npm run dev && npm audit fix

Copie mesclando e sobrescrevendo todos os arquivos e pastas deste repositório para a pasta em seu desktop

/var/www/html/laradmin

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

