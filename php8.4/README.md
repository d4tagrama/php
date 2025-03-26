# Base Image for PHP applications

## This Image include

1. php:8.4-apache
```bash
"Zend Module"
PHP Version => 8.4.5
PHP API => 20240924
PHP Extension => 20240924
PHP Extension Build => API20240924,NTS
PHP Integer Size => 64 bits
PHP Version => 8.4.5
Version => mysqlnd 8.4.5
Version => 8.4.5
PHP Variables
PHP License
```

2. PHP modules
```bash
Core - 8.4.5
date - 8.4.5
libxml - 8.4.5
openssl - 8.4.5
pcre - 8.4.5
sqlite3 - 8.4.5
zlib - 8.4.5
ctype - 8.4.5
curl - 8.4.5
dom - 20031129
fileinfo - 8.4.5
filter - 8.4.5
hash - 8.4.5
iconv - 8.4.5
json - 8.4.5
mbstring - 8.4.5
SPL - 8.4.5
session - 8.4.5
PDO - 8.4.5
pdo_sqlite - 8.4.5
bz2 - 8.4.5
posix - 8.4.5
random - 8.4.5
readline - 8.4.5
Reflection - 8.4.5
standard - 8.4.5
SimpleXML - 8.4.5
tokenizer - 8.4.5
xml - 8.4.5
xmlreader - 8.4.5
xmlwriter - 8.4.5
mysqlnd - mysqlnd 8.4.5
Phar - 8.4.5
calendar - 8.4.5
exif - 8.4.5
gd - 8.4.5
gettext - 8.4.5
mysqli - 8.4.5
pdo_mysql - 8.4.5
shmop - 8.4.5
soap - 8.4.5
sockets - 8.4.5
sodium - 8.4.5
sysvmsg - 8.4.5
sysvsem - 8.4.5
sysvshm - 8.4.5
xsl - 8.4.5
zip - 1.22.5
```

3. Composer

Please refer to [Composer](https://hub.docker.com/_/composer)

## Required Variables
* ```APACHE_DOCUMENT_ROOT```: Directory that forms the main document tree visible from the web
* ```PROJECT_LOCAL_FOLDER```: Location of the proyect.
* ```PROJECT_DOCKER_FOLDER```: Location of the proyect within the proyect.
* ```SRV_PORT```: Indicate which server's port the container will be bind.
* ```CONT_PORT```: Indicate the Container's port.

