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