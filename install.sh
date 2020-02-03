#!/bin/bash
ea-php72 -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
ea-php72 -r "if (hash_file('sha384', 'composer-setup.php') === 'c5b9b6d368201a9db6f74e2611495f369991b72d9c8cbd3ffbc63edff210eb73d46ffbfce88669ad33695ef77dc76976') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
ea-php72 composer-setup.php
ea-php72 -r "unlink('composer-setup.php');"
ea-php72 composer.phar install
ea-php72 -r "unlink('composer.phar');"
mv app/Http/Controllers app/Http/Controllersx
ea-php72 artisan dev:install
mv app/Http/Controllersx app/Http/Controllers
cp -r resources/lang/id vendor/crocodicstudio/crudbooster/src/localization 