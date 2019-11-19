<?php

// require "Catalog.php";
// $catalog = new Catalog("products.json");
// var_dump(gettype($catalog));

require "Person.php";
$person = new Person("antonie", "kowal", "23");
echo $person->getFullName();
echo "<br>";
echo $person->getClassification();
