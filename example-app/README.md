Commit 1 : Rutas en Laravel:

Commit 2 : Controladores en Larvel:
Laravel maneja un patron de diseño llamado Modelo Vista Controlador. Este patron de diseño indica que debemos separar los archivos html = Vistas del 
codigo php encargado de hacer las consultas a nuestra BBDD que desde ahora lo conocemos como Modelo.
* ¿ Que son los Controladores ?
Los controladores son quienes se van a encargar de relacionar el codigo html y el codigo php, osea el Modelo y la Vista.
- Para crear un controlador utilizamos el siguiente comando:
    - php artisan make:controller HomeController

- El metodo _invoke lo creamos cuando queremos que el Controlador administre una unica ruta.

- El metodo index lo creamos para mostrar la pagina principal.

- El metodo create lo creamos para mostrar un formulario y poder crear un curso etc.

- El metodo show lo creamos para mostrar un elemento en particular.

* Grupos de rutas por controlador
Esto sirve para no repetir codigo por ejemplo:
 - Route::get('cursos', [CursoController::class, 'index']);
 - Route::get('cursos/create', [CursoController::class, 'create']);
 - Route::get('cursos/{curso}', [CursoController::class, 'show']);
Podemos crear un solo grupo de rutas para el ejmplo indicado :
Route::controller(CursoController::class)->group(function () {
    Route::get('cursos', 'index');
    Route::get('cursos/create', 'create');
    Route::get('cursos/{curso}', 'show');
});

* Introduccion a las Migraciones 
Son como el control de versiones de nuestra BBDD. Lo que permite al equipo modificar y compartir el esquema de la BBDD de la aplicación.
- El comando para realizar una migración es:
 - php artisan migrate
Este comando recorrera uno a uno las migraciones que hemos creado en orden.

- El comando para crear una migracion es:
 - php artisan make:migration create_cursos

- Para revertir los ultimos cambios que hemos realizado el comando es:
 - php artisan migrate: rollback 

- Lotes al migrar , al hacer un roolback retrocedemos un lote.

- Para borrar todos los datos de las tablas y volver a crear las migrationes el comando es:
 - php artisan migrate:fresh
No utilizar este comando cuando nuestro proyecto este en producción por el metodo es destructivo.

- Para ejecutar el metodo down de la migracion y seguido ejecutar la migracion utilizamos el comando:
 - php artisan migrate:refresh
No recomendadp.

- ¿ Como modificar una tabla para crear una nueva columna a una tabla que ya existe ?
