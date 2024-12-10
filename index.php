<?php

include 'autoloader.php';

$discountCalculater = new DiscountCalculator();
echo $discountCalculater->apply(value:900) . "\n";