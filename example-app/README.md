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