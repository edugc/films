<?php
/**
 * Created by PhpStorm.
 * User: laura
 * Date: 5/04/17
 * Time: 17:04
 */

use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
require_once 'bootstrap.php';

return ConsoleRunner::createHelperSet($entityManager);