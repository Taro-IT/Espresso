# Espresso

![alt text](http://casademediocamino.com/images/casalogo_2x.jpg) 

_Pagina web para la organizacion sin fines de lucro Casa Medio camino "Casa Loohl"_

## Comenzando 🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._

Mira **Deployment** para conocer como desplegar el proyecto.


### Pre-requisitos 📋

_Para poder instalar el proyecto de manera local será necesario contar con las siguentes cosas en tu computadora_

```
php 7.3^|8.0^
```

```
Composer 2.0^
```

```
MySQL / MariaDB 10.4^
```

```
NOTA: Se recomiendo usar XAMPP o MAMP como paquete en la versión
 7.4.24 / PHP 7.4.24, puedes mirar "Construido con" para encontrar los enlaces.
```


### Instalación 🔧

_Para instalar el proyecto de forma local sigue los siguientes pasos y comandos_

_Descarga el proyecto via git o desde el enlace de <a href="https://github.com/Taro-IT/Espresso/archive/refs/heads/main.zip">Descarga</a>_

```
cd /path-de-tu-eleccion/

git clone https://github.com/Taro-IT/Espresso.git

cd /Espresso/
```
_Instalaremos las dependencias de Laravel/composer_

```
composer install
```

_Copiaremos el contenido archivo .env.example en un nuevo archivo llamado .env en el mismo path en el que se encuetra_

```
cp .env.example .env
```

_Agregaremos la llave única de proyecto_

```
php artisan key:generate
```

_Configuraremos la base de datos y las migraciones_

```
Ve a tu aplicacion de XAMP / MAMP o tu gestor de Base de datos e inicia los servicios de MYSQL /MariaDB

En el archivo .env ubica las variables:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=casamediocamino
DB_USERNAME=root
DB_PASSWORD=


ya sea en localhost/phpmyadmin o en el gestor, crea una base de datos con el nombre "casamediocamino"


En el archivo .env modifica segun sea nesecario asegurandote que tengas el puerto, host, nombre de usuario y contraseña
correctas 


```

_Finalmente correremos las migraciones y seeders_
```
php artisan migrate:fresh --seed
```

_Para correr laravel ejecuta el comando_

```
php artisan serve

Debera mandarte al link http://127.0.0.1:8000
```


## Ejecutando las pruebas ⚙️

_Dentro del sistema se configuraron pruebas automaticas sigue los siguientes pasos para correr ya sean 
generales o individuales, puede utilizar el siguiente comando para probar la página principal_

```
php artisan test
```

_Para correr las pruebas del sistema sigue lo siguiente_

### Analice las pruebas end-to-end 🔩

_Con_

```
Da un ejemplo
```

### Y las pruebas de estilo de codificación ⌨️

_Explica que verifican estas pruebas y por qué_

```
Da un ejemplo
```

## Despliegue 📦

_Para poder hacer un despliegue sigue los siguientes pasos_

## Construido con 🛠️

_Para este proyecto se utilizaron los siguientes recursos_

* [Laravel](https://laravel.com/) - Laravel 
* [XAMPP](https://www.apachefriends.org/download.html) - Manejador de PHP y MySQL
* [Composer](https://getcomposer.org/) - Manejador de dependencias
* [PHPStorm](https://www.jetbrains.com/phpstorm/) - IDE preferido (opcional)
* [ROME](https://rometools.github.io/rome/) - Usado para generar RSS

## Contribuyendo 🖇️

Por favor lee la [Guía para manejar ramas](https://taro-it.github.io/docs/guias/G13-guia-para-manejo-de-ramas) y [Estándar de codificación]() para detalles de nuestro código de conducta, y el proceso para enviarnos pull requests.

## Wiki 📖

Puedes encontrar mucho más de cómo utilizar este proyecto en nuestra [Wiki Departamental](https://taro-it.github.io/docs/) y en nuestra [Wiki Espresso]()

## Versionado 📌

Usamos [SemVer](http://semver.org/) para el versionado. Para todas las versiones disponibles, mira los [tags en este repositorio](https://github.com/Taro-IT/Espresso/tags).

## Autores ✒️

* **Sebastian Tafoya** - *Trabajo Inicial* - [sebastafoya](https://github.com/sebastafoya)
* **Juan Jose Díaz** - *Trabajo Inicial* - [JJDiazAndre](https://github.com/JJDiazAndre)
* **Jorge Lopez** - *Trabajo Inicial* - [JorgeLpz](https://github.com/JorgeLpz)
* **Juan Manuel Amador** - *Trabajo Inicial* - [JuanManuelAmador](https://github.com/JuanManuelAmador)
* **Angélica Anaya** - *Trabajo Inicial* - [angieanaya](https://github.com/angieanaya)
* **Eduardo Guzman** - *Trabajo Inicial* - [a01209519](https://github.com/a01209519)
* **Saul** - *Trabajo Inicial* - [A01208320](https://github.com/A01208320)
* **Adolfo Acosta Castro** - *Trabajo Inicial* - [AAcostac](https://github.com/AAcostac)
* **Jose Carlos Pacheco** - *Trabajo Inicial* - [JoseCarlosPa](https://github.com/JoseCarlosPa)

También puedes mirar la lista de todos los [contribuyentes](https://github.com/Taro-IT) quíenes han participado en este proyecto.
