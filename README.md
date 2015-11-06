# Config
> Powerful And Easy Configuration with PHP

Configuration in a PHP application can be difficult to manage. Build your own configuration class that makes using configuration variables easy. Code inspired by [phpacademy](http://phpacademy.org/).

There is always a good idea to have a separate configuration file for your php project, but not always maintaining it is so easy, as it is with this simple, but very powerful PHP class.

Tutorial: [Powerful And Easy Configuration with PHP](https://youtu.be/qyKt4NF_82g).

## How to Use:

Just create a simple configuration file with PHP

```php
<?php

return [
    'db' => [
        'host' => [
            'local' => '127.0.0.1',
            'outer' => '192.168.1.1',
        ],
        'port' => '3306',
        'user' => 'root',
        'pass' => '123456',
    ]
];
```

and use Config.class.php like so:

```php
<?php

use Helpers\Config;

require 'Config.class.php';

$config = new Config;
$config->load('config.php');

var_dump($config->get('db.host.local'));
var_dump($config->get('db.host.outer'));
var_dump($config->get('db.port'));
var_dump($config->get('db.user'));
var_dump($config->get('db.pass'));
```