<?php
/**
 * Created by PhpStorm.
 * User: laura
 * Date: 6/04/17
 * Time: 12:04
 */

require(__DIR__ . '/../vendor/autoload.php');
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = [__DIR__ .'/../models/Entities'];
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_sqlite',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'yii2base',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);

$entityManager = EntityManager::create($dbParams, $config);
