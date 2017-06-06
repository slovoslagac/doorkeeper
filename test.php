<?php
/**
 * Created by PhpStorm.
 * User: Korisnik
 * Date: 6.6.2017
 * Time: 21:37
 */


$epoch = 1496582685231;


echo date("Y-m-d H:i:s", substr($epoch, 0, 10));
echo"<br>";
echo time();