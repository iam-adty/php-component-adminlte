<?php

use IamAdty\Component\Html\Attribute\Charset;
use IamAdty\Component\Html\Meta;

require_once __DIR__ . "/../vendor/autoload.php";

$meta = Meta::build(
    Charset::set("utf-8")
);

+d($meta);
