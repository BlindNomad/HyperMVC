<?php
include __DIR__.'/../structure/lib/autoload.php';

HyperMVC::addRoute(':controller');
//HyperMVC::addRoute(':estado/:cidade/:controller/:action');

HyperMVC::render();
?>