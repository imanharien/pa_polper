<?php
include('./Service.php');
include('./ServiceLocator.php');

$service = ServiceLocator::getService("keluhan");
$service->Read();

$service = ServiceLocator::getService("Kritiksaran");
$service->Read();

$service = ServiceLocator::getService("keluhan");
$service->Read();

$service = ServiceLocator::getService("Kritiksaran");
$service->Read();

$service = ServiceLocator::getService("Kritiksaran");
$service->Read();

$service = ServiceLocator::getService("keluhan");
$service->Read();

