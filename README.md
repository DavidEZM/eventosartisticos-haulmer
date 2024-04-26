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

8.-Ahora nos dirijimos a Postman y ejecutamos el primer Request-Clients para ver el listado de clientes, estos se encontraran vacios para cargarlos debemos ejecutar una peticion http. en la URL ingresamos 
