<!-- Liste des classes qui viennent de la base de données -->

<?php
session_start();

require_once '../../models/classesModel.php';

$class = new classes;
$classesList = $class->getList();

require_once '../../views/parts/header.php';
require_once '../../views/classes/classesList.php';
require_once '../../views/parts/footer.php';