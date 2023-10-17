<?php

require_once "voiture.class.php";

$v1 = new Voiture();

echo $v1->color;

$v1->stop(20);