<?php

use IamAdty\Component\AdminLTE;

require_once __DIR__ . "/../vendor/autoload.php";

$adminLTE = AdminLTE::build();

// +d($adminLTE);

$adminLTE->render();
