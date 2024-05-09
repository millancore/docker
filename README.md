# Docker / Docker Compose

## Que es Docker

Docker es software para crear entornos virtualizados ligeros que encapsulan el código 
de una aplicación junto con sus dependencias y configuraciones, 
lo que permite que se ejecuten de manera consistente en diferentes entornos.

### Instalacion

La forma mas sencilla de instalar docker en Mac y Windows es haciendo uso de Docker Desktop

https://www.docker.com/products/docker-desktop


## Que es un Contenedor

Un contenedor es una instancia en tiempo de ejecución de una imagen de Docker.
Puedes pensar en un contenedor como un paquete ligero y portátil que incluye todo lo necesario
para ejecutar una aplicación.

Los contenedores se crean a partir de imagenes, estas imagenes se pueden descargar
desde el [Dock Hub](https://hub.docker.com/) o se pueden crear nuevas imagenes haciendo uso
de un [Dockerfile](https://docs.docker.com/reference/dockerfile)

## Que es un Dockerfile

```dockerfile
FROM php:8.3-apache

RUN docker-php-ext-install mysqli

COPY . /var/www/html
```

Un Dockerfile es un archivo de texto plano que contiene una serie 
de instrucciones que Docker utiliza para construir una imagen de contenedor.
Este archivo define los pasos necesarios para configurar el entorno dentro
del contenedor, incluyendo la instalación de dependencias, la configuración 
del sistema, la copia de archivos y la configuración de variables de entorno.


## Docker CLI
El Docker CLI (Command Line Interface) es la interfaz de línea de comandos
que proporciona Docker para interactuar con el motor de Docker y gestionar contenedores,
imágenes, volúmenes, redes y otros recursos relacionados.

Es la principal forma en que los usuarios interactúan con Docker desde la línea de comandos
de la terminal o el símbolo del sistema.

Pero tambien hay otras formas de interactuar con Docker, Docker Destop, Docker Compose, o Extensiones
para el editor.

### Algunos de los comandos mas usados

- [docker run](https://docs.docker.com/reference/cli/docker/container/run/): Este comando se utiliza para crear y ejecutar un contenedor a partir de una imagen. Puedes especificar opciones como el puerto de exposición, variables de entorno y volumen montado.
- [docker build](https://docs.docker.com/reference/cli/docker/image/build/): Utilizado para construir una nueva imagen de Docker a partir de un Dockerfile y un contexto de construcción. El contexto de construcción suele ser el directorio local donde se encuentra el Dockerfile.
- [docker pull](https://docs.docker.com/reference/cli/docker/image/pull/): Descarga una imagen de Docker desde un registro de imágenes, como Docker Hub, a tu máquina local.
- [docker ps](https://docs.docker.com/reference/cli/docker/container/ls/): Muestra una lista de los contenedores que están en ejecución actualmente. Con el modificador -a, también muestra los contenedores detenidos.
- [docker exec](https://docs.docker.com/reference/cli/docker/container/exec/): Permite ejecutar un comando dentro de un contenedor en ejecución.
- [docker stop](https://docs.docker.com/reference/cli/docker/container/stop/): Detiene uno o más contenedores en ejecución. Se utiliza proporcionando el ID 

## Que es Docker-Compose

Docker Compose es una herramienta que permite definir y administrar aplicaciones 
Docker multi-contenedor de manera sencilla. Permite definir la configuración de 
una aplicación en un archivo YAML llamado **docker-compose.yml**, donde se especifican
los servicios, redes y volúmenes que componen la aplicación, así como sus configuraciones
y relaciones entre ellos.

https://docs.docker.com/compose

### Algunos de los comandos mas usados

- [docker-compose up](https://docs.docker.com/reference/cli/docker/compose/up/): Inicia todos los contenedores definidos en el archivo docker-compose.yml. Si no existe, se construyen las imágenes antes de iniciar los contenedores.
- [docker-compose down](https://docs.docker.com/reference/cli/docker/compose/down/): Detiene y elimina todos los contenedores, redes y volúmenes asociados con la aplicación definida en el archivo docker-compose.yml.
- [docker-compose build](https://docs.docker.com/reference/cli/docker/compose/build/): Construye o reconstruye los servicios definidos en el archivo docker-compose.yml. Útil después de realizar cambios en los archivos de configuración o en el código fuente de la aplicación.
- [docker-compose ps](https://docs.docker.com/reference/cli/docker/compose/ps/): Muestra el estado de los servicios definidos en el archivo docker-compose.yml, incluyendo los contenedores en ejecución y su estado.
- [docker-compose logs](https://docs.docker.com/reference/cli/docker/compose/logs/): Muestra los logs de salida de los servicios definidos en el archivo docker-compose.yml.
- [docker-compose exec](https://docs.docker.com/reference/cli/docker/compose/exec/): Ejecuta un comando en un servicio específico dentro de la composición. Por ejemplo, docker-compose exec servicio comando.
- [docker-compose restart](https://docs.docker.com/reference/cli/docker/compose/restart/): Reinicia los contenedores de los servicios especificados en el archivo docker-compose.yml.