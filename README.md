# Curso Gew

Curso de Ionic + Angular + Typescript + Php

# Start

ionic start coletorEstoque tabs

cd coletorEstoque
ionic serve

e2e => Significa End To End, ou seja, teste de ponta a ponta.

pollyfill -> Se existir algum recurso que voce tentar utilizar no navegador que tem no google chrome por exemplo mas nao tem no ie usa-se o pollyfill. o qual vai detectar que no navegador nao tem suporte e vai implementar na hora ali, usando gambiarras funções disponíveis para aquele navegador, e vai fazer com que seja possível usar o recurso com a mesma interface inclusive. No caso é como se o navegador tivesse suporte a tal recurso.

adicionar o .prettierrc no projeto.
adicionar o .php_cs no projeto.

Criar uma pasta agora php:

composer init
composer require emalherbi/mymysql 
composer require slim/slim:~2.0
composer require palanik/corsslim




-> MySql
composer require emalherbi/mymssql -> MsSql
Criar o routes.php
Criar o index.php e testar

Criar a estrutura do projeto

- config -> application.ini
- logs
- vendor -> é criado pelo composer.

# Criar o banco de dados

- Lembrar: Se criei o banco na porta 9086 tenho q usar o phpmyadmin nessa porta tmb.
- db admin.sql

# Ionic

ionic generate

page - Cria uma page (tab) do ionic.
component - Cria uma nova definição de componente genérico no projeto fornecido ou padrão.
service - Cria uma nova definição de serviço genérica no projeto fornecido ou padrão.
module - Cria uma nova definição genérica de NgModule no projeto fornecido ou padrão.
directive - Uma diretiva de atributo altera a aparência ou o comportamento de um elemento DOM
guard - Gera uma nova definição genérica de proteção de rota no projeto fornecido ou padrão.
pipe - Decorador que marca uma classe como canal e fornece metadados de configuração.
enum
class - Uma classe é uma estrutura ou plano, que a partir dela podemos criar objetos que compartilham uma mesma configuração, propriedades e métodos.
interface - Uma interface é um conjunto de métodos e propriedades que descrevem um objeto, porém não inicializa nem os implementa.

ionic generate service
service/http

dentro do ionic tabs fazer um teste do usuario com get.
fazer um salvar.

falar do
tsconfig.json
tsconfig.app.json
tsconfig.spec.json

tslint.json
