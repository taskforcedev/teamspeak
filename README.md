TeamSpeak 3 Package
===================
Package Status: In development - Not currently usable.

A package for Laravel 5 which provides routes, views and controllers for interacting with a TeamSpeak 3 server.

### Features ###

TBC

### Installation ###

To install the package add the following line to your composer.json

<code>
"require": {
    "taskforcedev/teamspeak": "1.*"
}
</code>

After doing this you should run composer update, then a dump autoload preferably using artisan

<code>php artisan dump-autoload</code>


#### Service Provider ####

After this you should add the following service provider to your config/app.php

<code>Taskforcedev\Teamspeak\ServiceProvider::class,</code>

Also if not present please also add the following service provider.

<code>Taskforcedev\LaravelSupport\ServiceProvider::class,</code>

#### Overwriting Config ####
The package comes with default config however you will likely wish to publish this and overwrite with your own config settings.

<code>php artisan vendor:publish --tag="taskforce-teamspeak"</code>
