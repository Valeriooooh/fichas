# __Manual de Utilizador__


## Índice
<!-- TOC -->

  - [Introdução](#introducao)
  - [Pré-Requisitos](#pre-requisitos)
  - [Instalação do Xampp](#instalacao-do-xampp)
  - [Ficheiros do Site](#ficheiros-do-site)
    - [Metodo 1: Transferir .zip](#metodo-1-transferir-zip)
    - [Metodo 2: Git clone](#metodo-2-git-clone)
  - [Iniciar Xampp](#iniciar-xampp)
  - [Criação da Base de dados](#criacao-da-base-de-dados)
  - [Utilização do Site](#utilizacao-do-site)
    - [Listar Tabela](#listar-tabela)
    - [Inserir Registos](#inserir-registos)
    - [Atualizar Registos](#atualizar-registos)
    - [Remover Registos](#remover-registos)

<!-- /TOC -->


## Introdução <a name="introducao"></a>

Este manual vai explicar como visualizar o site e como trabalhar com o mesmo.

## Pré-Requisitos <a name="pre-requisitos"></a>
Para conseguir visualizar o site é necessário:

* Browser web (Chrome/Firefox/Edge)
* Xampp
* Ficheiros do Site
* git (caso escolha o metodo de instalação por git clone)

## Instalação do Xampp <a name="instalacao-do-xampp"></a>
A Instalação do Xampp é efetuada fazendo a transferencia do
[ficheiro de instalação](https://www.apachefriends.org/download.html)
indicado para o seu sistema operativo e seguir as instruções de instalação de acordo com o seu
sistema operativo.

__Windows__ - Executar ficheiro com a extensão .exe.

__MacOS__ - Abrir ficheiro .dmg e arrastar o mesmo para a pasta Aplicações.

__Linux__ - Executar o ficheiro .run

## Ficheiros do Site

Os ficheiros do site encontram-se [neste](https://github.com/Valerioooo/fichas)
repositório do github e existem duas maneiras de os obter.


<div style="page-break-after: always;"></div>


### Método 1: Transferir .zip <a name="metodo-1-transferir-zip"></a>

Transfira o ficheiro .zip carregando no botão __Code__ e em seguida no botão __Download Zip__

![Exemplo de tranferencia de ficheiro .zip](img/download.png)

Extraia os ficheiro .zip para:

__Windows__ - ```C:\xampp\htdocs\``` (caso tenha instalado o xampp neste local)

__MacOS__  - ```/opt/lampp/htdocs/```

__Linux__ - ```/opt/lampp/htdocs/```

Em seguida Renomeie a pasta de "fichas-master" para "fichas"

### Método 2: Git clone <a name="metodo-2-git-clone"></a>

Abra o terminal/linha de comandos como **root**/**administrador** e escreva:

__Windows__
```
cd C:\xampp\htdocs\
git clone https://github.com/Valerioooo/fichas.git

```

__MacOS__
```bash
cd /opt/lampp/htdocs/
git clone https://github.com/Valerioooo/fichas.git

```


__Linux__
```bash
cd /opt/lampp/htdocs/
git clone https://github.com/Valerioooo/fichas.git

```

## Iniciar Xampp
Para o site poder ser visualizado normalmente é preciso que o Xampp esteja iniciado para isso faça o
seguinte:

__Windows__ - Abra o Xampp pelo atalho do menu iniciar e carregue no botão "_start all_"

__MacOS__
```bash
sudo /opt/lampp/lampp start

```

__Linux__
```bash
sudo /opt/lampp/lampp start

```

## Criação da Base de dados <a name="criacao-da-base-de-dados"></a>

Se não possuir uma Base de Dados já criada tem de criar uma utilizando uma ferramenta de manipulação
de Base de Dados. Neste exemplo iremos utilizar o _phpMyAdmin_, pois este vem pré instalado com o
Xampp:

1. Abra o Browser web.

2. Escreva no url "[_localhost_](http://localhost)".
3. Carregue no botão _phpMyAdmin_. ![botão phpMyAdmin](img/phpmyadmin.png)
4. Abra a pasta "sql" dentro da pasta ProjetoFinal
5. Copie e cole o conteúdo dos ficheiros 1.sql, 2.sql e 4.sql pela mesma ordem para a aba "__SQL__"
no _phpMyAdmin_ carregando no botão "__Go__" por cada ficheiro copiado.
![botão Go](img/go.png)
6. A base de dados está criada!

## Utilização do Site <a name="utilizacao-do-site"></a>
O site tem uma interface que permite escolher a tabela que pretende listar/inserir registos, e as
vistas de algumas tabelas através do menu de navegação.
Também pode efetuar a remoção e atualização de registos dentro da listagem.

Para aceder ao site pode utilizar este [link](http://localhost/fichas/ProjetoFinal/site)

Para efetuar alguma alteração ou listagem nas tabelas é necessário o login no site. Este é efetuado
com as credenciais de utilizadores presentes na base de dados. Neste caso como criámos o utilizador
"__admin__" com a password "__1234__" no [ponto anterior](#criação-da-base-de-dados) quando inserimos
os valores para a criação da mesma vamos utilizar estas credenciais.

![botão Login](img/botaologin.png)

![botão phpMyAdmin](img/login.png)

Depois de ser efetuado o login o site permite que sejam efetuadas "_queries_" à base de dados.


### Listar Tabela

Para listar uma tabela pressione o botão correspondente à tabela que pretente listar e em seguida carrege no botão
"listar"

![botão listar](img/botaolistar.png)

<div style="page-break-after: always;"></div>

### Inserir Registos
Para inserir registos numa tabela pressione o botão correspondente à tabela que pretente insterir registos e em seguida carrege no botão "inserir"

![botão inserir](img/botaoinserir.png)

![inserir](img/inserir.png)
<div style="page-break-after: always;"></div>

### Atualizar Registos
Para atualizar um registo necessita de carregar no botão para listar a tabela em que esse registo se
encontra e depois carregar no botão <img src="img/edit.png" width="15">

![botão listar](img/botaolistar.png)

![botão editar](img/botaoedit.png)

<div style="page-break-after: always;"></div>

### Remover Registos
Para remover um registo necessita de carregar no botão para listar a tabela em que esse registo se
encontra e depois carregar no botão <img src="img/delete.png" width="15">

![botão listar](img/botaolistar.png)

![botão remover](img/botaodelete.png)
