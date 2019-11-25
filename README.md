 # nexus for php

## how to running

* start docker service

 ```code
 docker-compose up -d
 ```

* config composer proxy

```code
use https://packagist.org/
```

* install composer

```code
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```
* install deps

```code
cd demoproject
composer install 
```

* run demo

```code
cd demoproject
php demo.php
```