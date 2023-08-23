<?php 

require_once '../../models/countriesModel.php';
require_once '../../models/nationalitiesModel.php';

$countries = new countries;
$countriesList = $countries->getList();

$nationalities = new nationalities;
$nationalitiesList = $nationalities->getList();


require_once '../../views/parts/header.php';
require_once '../../views/users/register.php';
require_once '../../views/parts/footer.php';