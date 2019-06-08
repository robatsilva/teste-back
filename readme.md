# Introdução

Este repositório contem os arquivos para o teste de back-end da empresa TRUCKPAD.

Este teste foi realizado em PHP com o framework Laravel e banco de dados MySQL.

O ambiente foi configurado e será disponibilizado em containes docker.

## Instalação

Para rodar este teste localmente é necessário ter o docker instalado. O download pode ser feito nos links abaixo:

<b>Windows</b>
https://docs.docker.com/docker-for-windows/install/

<b>Linux</b>
https://runnable.com/docker/install-docker-on-linux

<b>Mac</b>
https://docs.docker.com/docker-for-mac/install/

** Clonar ou baixar esse repositório.
https://github.com/robatsilva/teste-back.git

** Para consumir as apis, usei o Postman
https://www.getpostman.com/downloads/

## Uso
#### Configuração
Após a instalação do docker, basta rodar o comando para subir os containes da aplicação e do banco de dados:

<b>docker-compose up -d</b>

Após esse comando, serão baixadas as imagens necessárias para rodar o php e o mysql e será criada as tabelas, também será instalado as dependências do Laravel. Esse processo pode levar alguns minutos.

Quando os containes estiverem rodando, é necessário rodar os seguintes comandos para instalar as dependências do laravel e rodar os comandos para configuração do mysql.
<b>
    docker-compose exec -it app composer install
    docker-compose exec -it php artisan generate:key
    docker-compose exec -it app php artisan migrate:refresh --seed
</b>

Usei a ferramenta Postman para realizar as chamadas nas apis e exportei os testes no arquivo:
teste-back.postman_collection.json:

Utilize o Postman para importar o arquivo e executar os requests.

Caso não utilize Postman, segue requests dos endpoints:

#### Testes Unitários
Para executar os testes unitários, rodar o comando

docker exec -it teste-back-app vendor/bin/phpunit

## Observações
Infelizmente tive alguns contratempos nessa semana e não pude me dedicar ao teste todos os dias.

Minha ideia inicial era entregar o teste em PHP e em Pyton, mas pela falta de tempo não consegui fazer em pyton, pois nunca utilizei essa linguagem, mas estou disposto a aprender.

Seria interessante também ter realizado esse teste com um banco de dados orientado a grafos. Nunca fiz nada parecido, mas seria interessante fazer uma POC, devido à natureza da empresa.

