<?php

include __DIR__.'/../structure/lib/autoload.php';

HyperMVC::addRoute(':estado/:cidade/:controller');
HyperMVC::addRoute(':estado/:cidade/:controller/:action');

HyperMVC::setViewRoot('template1');
//HyperMVC::setNoExecute(true);
HyperMVC::render();
?>