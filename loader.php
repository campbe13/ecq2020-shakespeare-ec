<?php
// PMC getting a memory error in the container
// same limit 128M as my ubuntu but I get the error
// should not do this, should find the error instead
ini_set('memory_limit', '-1');
// PMC

include "./classes/RedisDataLoader.php";

$dataLoader = new RedisDataLoader();
$dataLoader->loadData('shakespeare_input.txt');
?>
