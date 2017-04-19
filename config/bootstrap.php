<?php

require __DIR__ . '/../vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$isDevMode = false;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_sqlite',
    'user'     => 'root',
    'password' => '',
    'dbname'   => '/home/eduardo/basic/yii2basic.db',
);


$paths = [__DIR__ . '/../models/entities'];
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);