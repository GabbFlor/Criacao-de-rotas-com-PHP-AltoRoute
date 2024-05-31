# SISTEMA DE ROTEAMENTO SEGURO COM O PHP USANDO O ALTOROUTER

Esse projeto demonstra como é possível fazer o roteamento das páginas php, melhorando a segurança e a aparencia da url e permitindo a criação de páginas com link dinâmico.

## instalação (Português):

1°- Abra o CMD ou PowerShell na pasta raíz do seu projeto, e divite "composer --version" para vericiar se o composer está instalado, caso estiverm pule para o passo 4;

2°- Caso retorne o erro: "composer não é reconhecido como um comando interno", entre no link: "https://getcomposer.org/download/", e clique em "Composer-Setup.exe" para fazer o download do arquivo;

3°- Na instalação clique em next até ser necessário localizar o arquivo "php.exe", nessa etapa clique em "Browse...", entre no diretório do seu xampp e procure o arquivo php.exe, e conclua a instalação;

4°- Após instalar, digite no terminal aberto na pasta raíz do projeto: "composer init" e vá dando enter até criar o arquivo json. IMPORTANTE: quando aparecer "Package Type" digite "project" e de enter, caso contrário o composer não será iniciado no projeto e retornará um erro no final.

5°- Com o composer iniciado, digite: "composer require altorouter/altorouter", para instalar a dependência AltoRouter;

6°- Após isso, será possível recriar esse projeto.

IMPORTANTE: Quando for usar o AltoRouter, é necessário criar o arquivo .htaccess com os mesmos parâmetros para permitir o gerenciamento de rotas pelo AltoRouter 



## Installation (English):

1°- Open CMD or PowerShell in the root folder of your project, and select "composer --version" to check if composer is installed, if they are skip to step 4;

2°- If the error returns: "composer is not recognized as an internal command", enter the link: "https://getcomposer.org/download/", and click on "Composer-Setup.exe" to download the file;

3°- In the installation click on next until it is necessary to locate the "php.exe" file, in this step click on "Browse...", enter the directory of your xampp and search for the file php.exe, and complete the installation;

4°- After installing, type in the terminal open in the root folder of the project: "composer init" and press enter until you create the json file. IMPORTANT: when you see "Package Type" type "project" and enter, otherwise composer will not start in the project and will return an error at the end.

5°- With the composer started, type: "composer require altorouter/altorouter", to install the AltoRouter dependency;

6°- After that, it will be possible to recreate this project.

IMPORTANT: When using AltoRouter, you need to create the .htaccess file with the same parameters to allow route management by AltoRouter