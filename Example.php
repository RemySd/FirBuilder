<?php

require_once './src/FirBuilder.php';

$firBuilder = new \FirBuilder\FirBuilder();
$firBuilder->setDefaultChar('X');

echo $firBuilder->getFir(6);
