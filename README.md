# Autoescuela frontend
## prueba de concepto, Saúl.
esta aplicación se trata de un web donde realizar tests de autoescuela para practicar, teniendo así la posibilidad de ser escalada facilmente.
dispone de la posibilidad de agregar diferentes modos de aprendizaje  a los permisos que se le agregen.

## Dispone de... 
- Sistema de autentificación.
- Escalabilidad en cuanto a cantidad y actualización mediantee api protegida.
- Se le podrian agregar muchicimas cosas, pero esto DE MOMENTO no es una aplicacion para la venta al publico.
- La aplicación ha sido realizada mezclando tecnicas avanzadas y mas basicas y/o no optimas para demostrar el entendimineto profundo de los frameworks y de los lenguajes y no solo repetir una manera de hacer código solo porque así funciona bien.
- codigo autoexplicativo, no creo que necesite comentarios.

# Despliegue de frontend para su evaluación

```sh
git clone https://github.com/dalosa14/autoescuelaVue.git
cd autoescuelaVue
npm i
npm run serve
```
deberia de estar dispònible en http://localhost:8080/
# Despliegue de frontend para su puesta en producción
```sh
git clone https://github.com/dalosa14/autoescuelaVue.git
cd autoescuelaVue
npm i
npm run build
```
poner el contenido de la carpeta dist en algun servidor nginx, apache ...
> He dejado las configuraciones .env por que es necesario para el correcto funcionamiento de la aplicacion 
> Será necesario que se sigan estos pasos y se usen los mismos dominios ya que se siguen los patrones de seguridad cors y se usa la protección CSRF de laravel.

# Autoescuela frontend
## Dispone de... 
- sistema de autentificación medienate tokens (laravel santum)
- rutas protegidas
- protección csrf
- api
- base de datos sql 
- seeders
- factories
- relaciones
- api con comentarios orientativos ya que swagger ya lo he usado en el proyecto final y no lo veo necesario de implementar.
- ...
## despliegue backend para su evalucación
```sh
git clone https://github.com/dalosa14/autoescuelabackend.git
cd autoescuelabackend
composer install 
php artisan serve
```
- Luego se debe crear una base de datos con el nombre **autoescuela**
- debe de abrirse el sevicio en el dominio y puerto y protocolo siguiente: **http://localhost:8000**

> si se quisiese poner en producción habria que tocar el archivo env con bastante cuidado y concretamente por lo que no lo voy a tratar aquí.
