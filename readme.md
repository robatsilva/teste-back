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
Após a instalação do docker e o projeto ter sido clonado ou baixado, basta entrar no terminal de sua preferência, na pasta do projeto e rodar o comando abaixo para subir os containes da aplicação e do banco de dados:

<b>docker-compose up -d</b>

![image](https://user-images.githubusercontent.com/10313588/59148258-c7d5d180-89dc-11e9-8c8b-b6c2efa1b76b.png)

Após esse comando, serão baixadas as imagens necessárias para rodar o php e o mysql. Esse processo pode levar alguns minutos.

Para verificar se os containers estão rodando, digitar o seguinte comando:

<b>docker ps</b>

Deverá ser listado os containers conforme abaixo:

![image](https://user-images.githubusercontent.com/10313588/59148264-e936bd80-89dc-11e9-8d3a-cf50f02dfb1b.png)

Quando os containes estiverem rodando, é necessário rodar os seguintes comandos para instalar as dependências do laravel e rodar os comandos para configuração do mysql (Também pode levar alguns minutos):<br><br>
<b>
    docker exec -it teste-back-app composer install<br>
    docker exec -it teste-back-app php artisan key:generate<br>
    docker exec -it teste-back-app php artisan migrate:refresh --seed<br>
</b>
<br>

Após esses comandos o ambiente está configurado e pronto para executar as chamadas nas apis

Usei a ferramenta Postman para realizar as chamadas nas apis e exportei os testes no arquivo:

<b>teste-back.postman_collection.json:</b>

Utilize o Postman para importar o arquivo e executar os requests.

Caso não utilize Postman, segue requests dos endpoints:

![image](https://user-images.githubusercontent.com/10313588/59148293-7a0d9900-89dd-11e9-8ca1-6eb5e4ac6fed.png)

![image](https://user-images.githubusercontent.com/10313588/59148311-b3460900-89dd-11e9-950b-a20a54d33c0b.png)

![image](https://user-images.githubusercontent.com/10313588/59148320-c6f16f80-89dd-11e9-8c08-c35888456055.png)


#### Testes Unitários
Para executar os testes unitários, rodar o comando

<b>docker exec -it teste-back-app vendor/bin/phpunit</b>

## Observações
Infelizmente tive alguns contratempos nessa semana e não pude me dedicar ao teste todos os dias.

Minha ideia inicial era entregar o teste em PHP e em Pyton, mas pela falta de tempo não consegui fazer em pyton, pois nunca utilizei essa linguagem, mas estou disposto a aprender.

Seria interessante também ter realizado esse teste com um banco de dados orientado a grafos. Nunca fiz nada parecido, mas seria interessante fazer uma POC, devido à natureza da empresa.

