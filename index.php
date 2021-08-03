<?php
require_once ("vendor/autoload.php");

use WebtrainingZone\Models\{Person, Student};

$luis = new Student("Moises", "Magna", "1988-10-17", "202198292");
$esmeralda = new Person("Esmeralda", "Magna", "1993-11-05");

echo $esmeralda;
echo $luis;