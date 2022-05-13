# Stock management system.

steps of installation

1) clone the project to your machine
2) go to the project root and execute the following command
3) composer install
4) set the database name, username  and password in .env file
5) upload the stock.sql to your mysql database
7) excecute bin/console doctrine:schema:update --force
8) php -S localhost:8000 -t public
9) go to the http://127.0.0.1:8000 and see the home page.
