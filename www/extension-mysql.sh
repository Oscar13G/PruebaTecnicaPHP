#!/bin/bash

echo “Agregando extension PHP para MySQL”

#Instalar extension
docker-php-ext-install mysqli

#Directorio php init 
cd /usr/local/etc/php

#Modificar Archivos 
sed -i 's/;   extension=\/path\/to\/extension\/mysqli.so/   extension=\/usr\/local\/lib\/php\/extensions\/no-debug-non-zts-20190902\/mysqli.so/' php.ini-development php.ini-production

echo “Completado”