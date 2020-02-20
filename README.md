# Project1_team3

Eira , Camillia

Used in container PoC, see https://github.com/campbe13/docker-ecq2020/blob/master/shakespeare-ec


Modified loader php due to runtime error:
```
// PMC getting a memory error in the container
// same limit 128M as my ubuntu but I get the error
// should not do this, should find the error instead
ini_set('memory_limit', '-1');
// PMC
if (isset($argc))
  {
```
error:
```
# php loader.php

Database Flushed

Loading Database For: 3 characters
Start Time: 21:04am
End Time: 21:09

Loading Database For: 6 characters
Start Time: 21:09am

Fatal error: Allowed memory size of 134217728 bytes exhausted (tried to allocate 4096 bytes) in /var/www/html/classes/RedisDataLoader.php on line
```
