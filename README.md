## Guia de instalación
##### La instalacion se realizó en Windows con Php 8.0 y MySQL via Xampp
> Uso de Laravel 8, siga la [documentación](https://laravel.com/docs/8.x/installation).

##### Paso 1 - Clonar el repositorio
`$ git clone https://github.com/zenonpa/prueba1305.git`

##### Paso 2 - Instalar las dependencias
`$ cd prueba1305`
`$ composer install`

##### Paso 3 - Sacar una copia de .ENV file
`$ copy .env.example .env`

##### Paso 4 - Colocar los datos de conexion a la base de datos en el archivo .ENV
		DB_CONNECTION=mysql
		DB_HOST=127.0.0.1
		DB_PORT=3306
		DB_DATABASE=laravel
		DB_USERNAME=root
		DB_PASSWORD=
    

##### Paso 5 - Generar el Key del App
`$ php artisan key:generate`

##### Paso 6 - Ejecutar las migraciones
`$ php artisan migrate`

##### Paso 7 - Ejecutar la aplicación
`$ php artisan serve`

## Caracteristicas Generales
* Uso de Laravel 8
* Uso de BootStrap 5 via cdn

## Contribuciones
- [Aprendible.com](https://aprendible.com/)
- [Treehouse.com](https://teamtreehouse.com/zenon)
- [Udemy.com](https://www.udemy.com/)
- [Laravel 8 Templates](https://www.onlinecode.org/laravel-8-crud-example-laravel-8-crud-beginners-tutorial/)

