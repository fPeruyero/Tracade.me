# Tracade.me

## Documentación
[Laravel](https://laravel.com/docs/6.x)

### NOTA
Cada que se haga pul o merge ejecutar el comando
```
php artisan storage:link
```

### Base de datos

#### Ejecutar migracion
1. Crear base de datos *tracademe* 
2. Ejecutar comando
```
php artisan migrate
```
### Inicializar base
Para crer los registros base (disciplinas y aulas) asi como algunos registros iniciales de grupos y alumnos ejecutar el siguiente comando:
```
php artisan db:seed --class=InitSeeder
```
### Registros de prueba
#### Alumnos
CCreación de 10 alumnos de prueba asignados a una discplina aleatoria:
```
php artisan db:seed --class=AlumnosTableSeeder
```
## Controller dentro de carpetas
Para crear controladores dentro de una carpeta dentro de la carpeta *Controller* se debe hacer lo siguiente>

1. Ejecutar  comando
```
php artisan make:controller Carpeta\NombreController
```

*Se debe crear con el comando para que laravel sepa que esta
     dentro de esa carpeta*
     
2. Crear la ruta en *routes/web.php*
 ```
 Carpeta\NombreController@funcion
 ```
 
 ## Default login
 editar *config>auth*
 
* providers 
* passwords
* guards
    * web
    * defaults
        * passwords
 * registerController
 
 
