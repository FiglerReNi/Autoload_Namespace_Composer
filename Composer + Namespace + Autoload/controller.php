<?php
include "vendor\autoload.php";

use animal1\sub\Cat;
use animal1\sub\Dog as dog1;
use animal2\sub\Dog as dog2;
use animal1\Snake;
$dog1 = new dog1();
$dog2 = new dog2();
$cat = new Cat();
$snake = new Snake();
$dog1->teszt1();
$dog2->teszt2();
$cat->teszt3();
$snake->teszt4();

