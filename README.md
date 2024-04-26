# eventosartisticos-haulmer
Prueba Tecnica Haulmer

##Importar archivos para la Api
1.- Se debe importar la collection de Postman, en App Postman para revisar los Request, cabe destacar que la api es publica, no necesita autenticacion par acceder.
![](https://github.com/DavidEZM/eventosartisticos-haulmer/blob/main/eventos-artisticos.postman_collection.json)

2.- Una vez teniendo la coleccion cargada en Postman, se procede a montar la aplicacion eventosartisticos ya sea a travez del repositorio con Github Desktop o otro aplicativo (recomiento Github Desktop).

3.-Se debe abrir el proyecto en VSC o Ide de preferencia.

4.-Ahora, para poder utilizar o consumir la api rest debemos migrar las tablas que contiene el aplicativo, estas serian Client, Orders, Event, Ticket.

5.-Luego debemos migrar los Model, que se encuentran en /eventartistic/database/migrations en la terminal o shell de preferencia, ya sea dentro de la Terminal de VSC (Windows PowerShell) debemos ejecutar $ php artisan migrate.
6.-Se debe verificar que las tablas se migraron con exito, ejecutamos $ php artisan migrate:status 

7.-Luego lanzamos el servidor para poder acceder a la api con Postmant, con el siguiente comando $ php artisan serve , luego se mostrara un mensaje de que el servicio ya se encuentra levantado.

8.-Ahora nos dirijimos a Postman y ejecutamos el primer Request -> Request-Clients para ver el listado de clientes.

9.- Para revisar el listado de eventos ejecutamos en la URL de http:  http://127.0.0.1:8000/api/events y nos listara el listado de events

10. Para revisar solo 1 Event con su detalle ejecutamos el 3 Request llamado Request-Event en la URL debe estar http://127.0.0.1:8000/api/events/1
    
11.-Para agregar una orders con su cliente y ticket respectivo ejecutamos el 4 Request http://127.0.0.1:8000/api/clients/ticket
y en el Body copiamos este script para ingresar las Orders.
{
    "ticket_id" : 3,
    "client_id" : 2
}
12.- Luego presionamos en Send y nos listara un mensaje y confirmacion de que se ejecuto con exito la peticion.

13.- Luego para mostrar 1 Cliente con sus respectivos ticket que compro ejecutamos la 5 Request http://127.0.0.1:8000/api/clients/2 el id del cliente dependera de cuantos clientes tenga en la base de datos.

Para mayor informacion o detalle puede consultar en la carpeta de imgEvidenciasApi para revisar la ejecucion del consumo de la Api Rest de eventsartistic.

DAVID ZUÑIGA MUÑOZ
