# Curso Gew

Curso de Ionic + Angular + Typescript + Php

# Start App

ionic start coletorEstoque tabs

cd coletorEstoque
ionic serve

Add .prettierrc
Add .php_cs

# PHP

composer init
composer require emalherbi/mymysql
composer require emalherbi/mymssql
composer require slim/slim:~2.0
composer require palanik/corsslim

# DB

- dir: db -> admin.sql

# Ionic

ionic generate

- page - Cria uma page (tab) do ionic.
- component - Cria uma nova definição de componente genérico no projeto fornecido ou padrão.
- service - Cria uma nova definição de serviço genérica no projeto fornecido ou padrão.
- module - Cria uma nova definição genérica de NgModule no projeto fornecido ou padrão.
- directive - Uma diretiva de atributo altera a aparência ou o comportamento de um elemento DOM
- guard - Gera uma nova definição genérica de proteção de rota no projeto fornecido ou padrão.
- pipe - Decorador que marca uma classe como canal e fornece metadados de configuração.
- enum
- class - Uma classe é uma estrutura ou plano, que a partir dela podemos criar objetos que compartilham uma mesma configuração, propriedades e métodos.
- interface - Uma interface é um conjunto de métodos e propriedades que descrevem um objeto, porém não inicializa nem os implementa.

# Service HTTP

- ionic generate service
- service/http

# Build

ionic cordova platform add android
ionic cordova prepare android
ionic cordova build android
