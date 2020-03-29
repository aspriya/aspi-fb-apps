<?php

require __DIR__ . '/vendor/autoload.php';

$factory = new RandomLib\Factory;
$generator = $factory->getGenerator(new SecurityLib\Strength(SecurityLib\Strength::MEDIUM));

$randomString = $generator->generateString(32, 'abcdef');
echo "random string is: ".$randomString." \n";

?>

