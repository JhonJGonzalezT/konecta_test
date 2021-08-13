# konecta_test APP
Konecta knowledge test, for lead analyst and management of PHP software development

## Instalación del proyecto

Lo primero es clonar el proyecto a tu equipo local

```git clone https://github.com/JhonJGonzalezT/konecta_test.git```

## Importar base de datos

Ahora tenemos que crear el esquema de la base de datos.

1. Vamos a la carpeta de db

    ```cd konecta_test/database```

2. Vamos a loguearnos a nuestra consola de MySQL (sustituye username con el nombre de usuario de tu conexión)

    ```terminal 
    mysql -u username -p
    ```

3. Creamos una nueva base de datos llamada **konectatest**

```shell
    CREATE DATABASE konectatest;
    ```

4. Salimos con `exit;` y ahora importamos el archivo `konectatest.sql`

    ```shell    
    mysql -u username -p konectatest < konectatest.sql;
    ```

## Configuración de proyecto

Para actualizar las conexiones a la base de datos es importante cambiar los datos que se encuentran en `/settings/connection.php`


## Comenzando 🚀

_Al iniciar el App podras listar y registrar empleados, ver solicitudes realizadas, por cada empleado mostradas con su nombre, descripcion, resumen y codigo. Una vez guardados se iran listando en la tabla, tenemos culumnas al final (parte derecha de la table de empleados), donde podremos modificar, eliminar y crear una solicitud al empleado seleccionado, al modificar te mostrara la informacion del empleado en una formulario con los campos disponibles, para actualizar, terminada la actualizacionte retornara a la pagina principal con la informacion de la tabla actualizada.


### Pre-requisitos 📋

_PHP 7.43_
_MySQL 8.0.25_
_Navegador Google Chrome_


## Construido con 🛠️

_Herramientas Utilizadas_

* [LAMPP Server] - LAMPP Server
* [PHP 7](https://www.php.net/downloads/) - PHP Nativo, patron de diseño MVC con estuctura de codigo del FW CodeIgniter
* [MySQL Workbench 7](https://dev.mysql.com/downloads/workbench/) - SGBD
* [VS Code](https://code.visualstudio.com/Download/) - Editor de Texto
